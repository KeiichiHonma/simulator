<?php
require "fw/cloudinaryUploader.php";
$url = 'http://simulator.813.co.jp/im/logo?url='.urlencode('http://a4.mzstatic.com/us/r1000/084/Purple/79/69/95/mzl.heabknkr.175x175-75.jpg');
//UploaderTest::test_upload();
//$url = 'http://a2.mzstatic.com/us/r1000/087/Purple/v4/48/35/27/48352767-7bfd-ac11-c51b-aa92df863ed7/mzl.ecvhpptk.175x175-75.jpg';
//$public_id = 'q9umj3c4zyze65tqjmme';
$image2 = cloudinaryUploader::upload($url);
var_dump($image2);
die();
die();
?>