<?php
if(isset($_GET['url'])){
    $handle = fopen(urldecode($_GET['url']), 'rb');
    $image = new Imagick();
    $image->readImageFile($handle);
    //$image->thumbnailImage(75, 75,true);
    $image->thumbnailImage(57, 57,true);
    $image->roundCorners(6, 6);
    $image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('black'), 0);
    echo $image;
}
die();
?>
