<?php
require "cloudinary/cloudinary.php" ;
require "cloudinary/uploader.php" ;
class cloudinaryUploader {
    public function upload($url,$public_id = null) {
        if(!is_null($public_id)){
            $options = array("public_id" =>$public_id);
        }
        //$img = 'http://a4.mzstatic.com/us/r1000/092/Purple/v4/85/70/9d/85709d9f-c9ca-1513-68df-f957e16b8791/mzm.omtlzjin.175x175-75.jpg';//iphone logo
        return Cloudinary\Uploader::upload($url,$options);
/*array(9) {
  ["public_id"]=>
  string(20) "q9umj3c4zyze65tqjmme"
  ["version"]=>
  int(1351851921)
  ["signature"]=>
  string(40) "14112aeb6dde512a7eac71a609d695f65890d4e7"
  ["width"]=>
  int(175)
  ["height"]=>
  int(175)
  ["format"]=>
  string(3) "jpg"
  ["resource_type"]=>
  string(5) "image"
  ["url"]=>
  string(84) "http://res.cloudinary.com/hachione/image/upload/v1351851921/q9umj3c4zyze65tqjmme.jpg"
  ["secure_url"]=>
  string(96) "https://d3jpl91pxevbkh.cloudfront.net/hachione/image/upload/v1351851921/q9umj3c4zyze65tqjmme.jpg"
}*/
    }
}
?>
