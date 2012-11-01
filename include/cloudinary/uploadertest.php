<?php
require "cloudinary.php" ;
require "uploader.php" ;
class UploaderTest {
    public function test_upload() {
        $options = array("public_id" =>'q9umj3c4zyze65tqjmme');
        //$img = '/usr/local/apache2/htdocs/simulator/cloudinary/logo2.png';
        //$img = 'http://www.813.co.jp/img/common/logo.gif';
        $img = 'http://a4.mzstatic.com/us/r1000/092/Purple/v4/85/70/9d/85709d9f-c9ca-1513-68df-f957e16b8791/mzm.omtlzjin.175x175-75.jpg';//iphone logo
        
        $result = Cloudinary\Uploader::upload($img,$options);
var_dump($result);
die();
    }
}
?>
