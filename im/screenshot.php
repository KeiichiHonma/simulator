<?php
if( isset($_GET['url']) && isset($_GET['direction']) ){
    $handle = fopen(urldecode($_GET['url']), 'rb');
    $image = new Imagick();
    $image->readImageFile($handle);
    
    if($_GET['direction'] == 1){
        $max_width = 370;
        $max_height = 208;
        $image->resizeImage(0, $max_height, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
    }else{
        $max_width = 208;
        $max_height = 370;
        $image->resizeImage($max_width, 0, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
    }

    
    echo $image;
}
die();
?>
