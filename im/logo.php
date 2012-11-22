<?php
if(isset($_GET['url'])){
    $handle = fopen(urldecode($_GET['url']), 'rb');
    $image = new Imagick();
    $image->readImageFile($handle);
    $image->thumbnailImage(75, 75,true);
    $image->roundCorners(9, 9);
    $image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('black'), 0);
    echo $image;
}
die();
?>
