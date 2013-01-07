<?php
$url = urldecode('http%3A%2F%2Fa1.mzstatic.com%2Fus%2Fr1000%2F097%2FPurple%2Fv4%2F9a%2Fc2%2F69%2F9ac269f7-e7a4-55a3-b7ce-31630d10555d%2Fmzl.ilicmvyg.175x175-75.jpg');
$handle = fopen($url, 'rb');
$image = new Imagick();
$image->readImageFile($handle);
//$image->thumbnailImage(75, 75,true);
$image->thumbnailImage(57, 57,true);
$image->roundCorners(5, 5);
$image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('black'), 0);
$fname = pathinfo($url,PATHINFO_BASENAME);
$image->writeImages('/tmp/'.$fname, true);
?>
