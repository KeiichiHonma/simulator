<?php

/****************************************
Example of how to use this uploader class...
You can uncomment the following lines (minus the require) to use these as your defaults.

// list of valid extensions, ex. array("jpeg", "xml", "bmp")
$allowedExtensions = array();
// max file size in bytes
$sizeLimit = 10 * 1024 * 1024;

require('valums-file-uploader/server/php.php');
$uploader = new qqFileUploader($allowedExtensions, $sizeLimit);

// Call handleUpload() with the name of the folder, relative to PHP's getcwd()
$result = $uploader->handleUpload('uploads/');

// to pass data through iframe you will need to encode all html tags
echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);

/******************************************/



/**
 * Handle file uploads via XMLHttpRequest
 */
class handleUploadedFileXhr {
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    public function save($path) {    
        $input = fopen("php://input", "r");
        $temp = tmpfile();
        $realSize = stream_copy_to_stream($input, $temp);
        fclose($input);
        
        if ($realSize != $this->getSize()){            
            return false;
        }
        
        $target = fopen($path, "w");        
        fseek($temp, 0, SEEK_SET);
        stream_copy_to_stream($temp, $target);
        fclose($target);
        
        return true;
    }

    /**
     * Get the original filename
     * @return string filename
     */
    public function getName() {
        return $_GET['uploadfile'];
    }
    
    /**
     * Get the file size
     * @return integer file-size in byte
     */
    public function getSize() {
        if (isset($_SERVER["CONTENT_LENGTH"])){
            return (int)$_SERVER["CONTENT_LENGTH"];
        } else {
            throw new Exception('Getting content length is not supported.');
        }
    }   
}

/**
 * Handle file uploads via regular form post (uses the $_FILES array)
 */
class handleUploadedFileForm {
      
    /**
     * Save the file to the specified path
     * @return boolean TRUE on success
     */
    public function save($path) {
        return move_uploaded_file($_FILES['uploadfile']['tmp_name'], $path);
    }
    
    /**
     * Get the original filename
     * @return string filename
     */
    public function getName() {
        return $_FILES['uploadfile']['name'];
    }
    
    /**
     * Get the file size
     * @return integer file-size in byte
     */
    public function getSize() {
        return $_FILES['uploadfile']['size'];
    }
}

/**
 * Class that encapsulates the file-upload internals
 */
class handleUploader {
    private $allowedExtensions;
    private $sizeLimit;
    private $file;
    private $uploadName;

    /**
     * @param array $allowedExtensions; defaults to an empty array
     * @param int $sizeLimit; defaults to the server's upload_max_filesize setting
     */
    function __construct(array $allowedExtensions = null, $sizeLimit = null){
        if($allowedExtensions===null) {
            $allowedExtensions = array();
        }
        if($sizeLimit===null) {
            $sizeLimit = $this->toBytes(ini_get('upload_max_filesize'));
        }

        $allowedExtensions = array_map("strtolower", $allowedExtensions);
            
        $this->allowedExtensions = $allowedExtensions;        
        $this->sizeLimit = $sizeLimit;
        
        $this->checkServerSettings();       

        if (strpos(strtolower($_SERVER['CONTENT_TYPE']), 'multipart/') === 0) {
            //die(htmlspecialchars(json_encode(array('error' => "increase post_max_size and upload_max_filesize to $size")), ENT_NOQUOTES));
            $this->file = new handleUploadedFileForm();
        } else {
            //die(htmlspecialchars(json_encode(array('error' => "increase post_max_size and upload_max_filesize to $size")), ENT_NOQUOTES));
            $this->file = new handleUploadedFileXhr();
        }
    }
    
    /**
     * Get the name of the uploaded file
     * @return string
     */
    public function getUploadName(){
        if( isset( $this->uploadName ) )
            return $this->uploadName;
    }
    
    /**
     * Get the original filename
     * @return string filename
     */
    public function getName(){
        if ($this->file)
            return $this->file->getName();
    }
    
    /**
     * Internal function that checks if server's may sizes match the
     * object's maximum size for uploads
     */
    private function checkServerSettings(){        
        $postSize = $this->toBytes(ini_get('post_max_size'));
        $uploadSize = $this->toBytes(ini_get('upload_max_filesize'));        
        if ($postSize < $this->sizeLimit || $uploadSize < $this->sizeLimit){
            //$size = max(1, $this->sizeLimit / 1024 / 1024) . 'M';
            $size = max(1, $this->sizeLimit / 1024 / 1024) . 'KB';
            die(htmlspecialchars(json_encode(array('error' => "increase post_max_size and upload_max_filesize to $size")), ENT_NOQUOTES));
        }
    }
    
    /**
     * Convert a given size with units to bytes
     * @param string $str
     */
    private function toBytes($str){
        $val = trim($str);
        $last = strtolower($str[strlen($str)-1]);
        switch($last) {
            case 'g': $val *= 1024;
            case 'm': $val *= 1024;
            case 'k': $val *= 1024;        
        }
        return $val;
    }
    
    /**
     * Handle the uploaded file
     * @param string $uploadDirectory
     * @param string $replaceOldFile=true
     * @returns array('success'=>true) or array('error'=>'error message')
     */
    function handleUpload($uploadDirectory, $replaceOldFile = FALSE){
        if (!is_writable($uploadDirectory)){
            return array('error' => "Server error. Upload directory isn't writable.");
        }
        
        if (!$this->file){
            return array('error' => 'No files were uploaded.');
        }
        
        $size = $this->file->getSize();
        
        if ($size == 0) {
            return array('error' => 'File is empty');
        }
        
        if ($size > $this->sizeLimit) {
            return array('error' => 'File is too large');
        }
        
        $pathinfo = pathinfo($this->file->getName());
        $filename = $pathinfo['filename'];
        //$filename = md5(uniqid());
        $ext = @$pathinfo['extension'];        // hide notices if extension is empty

        if($this->allowedExtensions && !in_array(strtolower($ext), $this->allowedExtensions)){
            $these = implode(', ', $this->allowedExtensions);
            return array('error' => 'File has an invalid extension, it should be one of '. $these . '.');
        }
        
        $ext = ($ext == '') ? $ext : '.' . $ext;
        
        if(!$replaceOldFile){
            /// don't overwrite previous files that were uploaded
            while (file_exists($uploadDirectory . DIRECTORY_SEPARATOR . $filename . $ext)) {
                $filename .= rand(10, 99);
            }
        }
        
        $this->uploadName = $filename . $ext;
        
        if ($this->file->save($uploadDirectory . DIRECTORY_SEPARATOR . $filename . $ext)){
            return array('success'=>true,'file'=>'/console/image/uploads/'.$filename . $ext);
        } else {
            return array('error'=> 'Could not save uploaded file.' .
                'The upload was cancelled, or server error encountered');
        }
        
    }

    function handleCloudinaryUpload($replaceOldFile = FALSE){
       if (!$this->file){
            return array('error' => 'No files were uploaded.');
        }
        
        $size = $this->file->getSize();
        
        if ($size == 0) {
            return array('error' => 'File is empty');
        }
        
        if ($size > $this->sizeLimit) {
            return array('error' => 'File is too large');
        }
        
        $pathinfo = pathinfo($this->file->getName());
        $filename = $pathinfo['filename'];
        $ext = @$pathinfo['extension'];        // hide notices if extension is empty

        if($this->allowedExtensions && !in_array(strtolower($ext), $this->allowedExtensions)){
            $these = implode(', ', $this->allowedExtensions);
            return array('error' => 'File has an invalid extension, it should be one of '. $these . '.');
        }
        
        $ext = ($ext == '') ? $ext : '.' . $ext;
        $this->uploadName = $filename . $ext;

        //move_uploaded_file($_FILES['uploadfile']['tmp_name'], $path);
        require "fw/cloudinaryUploader.php";
        $cloudinary = cloudinaryUploader::upload($_FILES['uploadfile']['tmp_name']);
        //$cloudinary = true;
        //if ($this->file->save($uploadDirectory . DIRECTORY_SEPARATOR . $filename . $ext)){
        if ($cloudinary){
            global $con;
            if( !isset($_SESSION[SESSION_U_UID]) ){
                return array('error' => 'Must Login');
            }
            
            //simulatorテーブルに画像を追加
            require_once('simulator/logic.php');
            $simulator_logic = new simulatorLogic();
            $simulator = $simulator_logic->getUserSimulator($_SESSION[SESSION_U_UID]);//applicationも入ってます。
            $mobile_images = unserialize($simulator[0]['simulator_mobile_images']);
            $console_images = unserialize($simulator[0]['simulator_console_images']);
            $mobile_image = utilManager::getMobileImageParam($cloudinary);
            $mobile_images['screenshots'][] = $mobile_image;

            $console_image = utilManager::getConsoleImageParam($cloudinary);
            $console_images['screenshots'][] = $console_image;
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();
            $con->db->cloudinary_image = $mobile_images;//rollback 準備
            $sid = $simulator_handle->updateImagesRow($simulator[0]['simulator_id'],$mobile_images,$console_images);
            if(!$sid){
                //rollback
                cloudinaryUploader::rollback($mobile_images);
                return array('error'=> 'Could not save uploaded file.');
            }
            $con->safeExit();//commit
            return array('success'=>true,'public_id'=>$mobile_image['public_id'],'mobile_transformations_url'=>$mobile_image['transformations_url'],'console_transformations_url'=>$console_image['transformations_url'],'console_thumbnail'=>$console_image['thumbnail_url']);
        } else {
            return array('error'=> 'Could not save uploaded file.' .'The upload was cancelled, or server error encountered');
        }
        
    }
}
class handleDestroy {

    function handleCloudinaryDestroy($public_id){
       if (!$public_id){
            return array('error' => 'No files.');
        }
        require "fw/cloudinaryUploader.php";
        $cloudinary = cloudinaryUploader::destroy($public_id);
        if ($cloudinary){
            global $con;
            if( !isset($_SESSION[SESSION_U_UID]) ){
                return array('error' => 'Must Login');
            }
            
            //simulatorテーブルに画像を追加
            require_once('simulator/logic.php');
            $simulator_logic = new simulatorLogic();
            $simulator = $simulator_logic->getUserSimulator($_SESSION[SESSION_U_UID]);//applicationも入ってます。
            $mobile_images = unserialize($simulator[0]['simulator_mobile_images']);
            $console_images = unserialize($simulator[0]['simulator_console_images']);
            $new_mobile_images = array();
            $new_console_images = array();
            
            foreach ($mobile_images['screenshots'] as $key => $value){
                if($value['public_id'] == $public_id) unset($mobile_images['screenshots'][$key]);
                if($value['public_id'] == $public_id) unset($console_images['screenshots'][$key]);
            }
            //key 振りなおし
            $mobile_images['screenshots'] = array_values($mobile_images['screenshots']);
            $console_images['screenshots'] = array_values($console_images['screenshots']);
            
            require_once('simulator/handle.php');
            $simulator_handle = new simulatorHandle();
            $sid = $simulator_handle->updateImagesRow($simulator[0]['simulator_id'],$mobile_images,$console_images);
            if(!$sid){
                return array('error'=> 'Could not save uploaded file.');
            }
            $con->safeExit();//commit
            return array('success'=>true,'public_id'=>$public_id);
        } else {
            return array('error'=> 'Could not save uploaded file.' .'The upload was cancelled, or server error encountered');
        }
    }
}