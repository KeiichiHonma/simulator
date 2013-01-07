<?php
require_once('fw/prepend.php');
if( !isset($_SERVER["REMOTE_ADDR"]) || ( !$con->isDebug && strcasecmp($_SERVER["REMOTE_ADDR"],'210.173.251.227') == 0) ){
    $con->safeExitRedirect('/');
}
//ディレクトリ・ハンドルをオープン
//$res_dir = opendir( '/usr/local/apache2/htdocs/simulator/img/common' );
$res_dir = opendir( '/usr/local/apache2/htdocs/simulator/img/phone' );
require_once "fw/cloudinaryUploader.php";

//$dh = opendir($res_dir);

$fnArray = array();
while(false !== ($file_name = readdir($res_dir))){
    if($file_name !== '.' && $file_name !== '..' && !is_dir($dir.$file_name)){
        //array_push($fnArray, $file_name);
        //$cloudinary = cloudinaryUploader::upload('http://www.simulator.813.co.jp/img/common/'.$file_name,pathinfo($file_name,PATHINFO_FILENAME));
        $cloudinary = cloudinaryUploader::upload('http://www.simulator.813.co.jp/img/phone/'.$file_name,pathinfo($file_name,PATHINFO_FILENAME));
    }
}
closedir($res_dir);
?>