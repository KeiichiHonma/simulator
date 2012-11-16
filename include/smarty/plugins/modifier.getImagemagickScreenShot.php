<?php
function smarty_modifier_getImagemagickScreenShot($screenshot,$max_width = 208,$max_height = 370)
{
header('Content-type: image/jpeg');
$handle = fopen($screenshot, 'rb');
$image = new Imagick();
$image->readImageFile($handle);
$image->thumbnailImage($max_width, $max_height,true);
//$image->paintOpaqueImage(new ImagickPixel('rgba( 0, 0, 0, 0.0)'), new ImagickPixel('white'), 0);
return  $image;
}
?>
