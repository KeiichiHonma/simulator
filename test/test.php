<?php
require "fw/cloudinaryUploader.php";
//UploaderTest::test_upload();
$url = 'http://a2.mzstatic.com/us/r1000/087/Purple/v4/48/35/27/48352767-7bfd-ac11-c51b-aa92df863ed7/mzl.ecvhpptk.175x175-75.jpg';
$public_id = 'q9umj3c4zyze65tqjmme';
$image = cloudinaryUploader::upload($url,$public_id);
var_dump($image);
die();
die();
?>