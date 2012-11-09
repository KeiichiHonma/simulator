<?php
//echo json_encode(array('success' => true, 'mes' => $postSize.':'.$uploadSize));die();
//die();
// list of valid extensions, ex. array("jpeg", "xml", "bmp")
$allowedExtensions = array("jpeg", "jpg", "gif");
// max file size in bytes
$sizeLimit = 0.5 * 1024 * 1024;

require('fw/fineUploder.php');
$uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
//echo json_encode(array('success' => true, 'mes' => 'ok'));die();
// Call handleUpload() with the name of the folder, relative to PHP's getcwd()
//$result = $uploader->handleUpload('./uploads/');
$result = $uploader->handleCloudinaryUpload();


// to pass data through iframe you will need to encode all html tags
echo htmlspecialchars(json_encode($result), ENT_NOQUOTES);
?>
