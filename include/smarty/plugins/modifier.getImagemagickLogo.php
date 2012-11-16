<?php
function smarty_modifier_getImagemagickLogo($logo)
{
header('Content-type: image/jpeg');
$handle = fopen($logo, 'rb');
$image = new Imagick();
$image->readImageFile($handle);
$image->thumbnailImage(75, 75,true);
$image->roundCorners(12, 12);
$image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('white'), 0);
//return $image;
echo $image;
die();
}
?>
