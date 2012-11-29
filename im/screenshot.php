<?php
if( isset($_GET['url']) ){
    list($width, $height, $type, $attr) = getimagesize($_GET['url']);

    $handle = fopen(urldecode($_GET['url']), 'rb');
    $image = new Imagick();
    $image->readImageFile($handle);
    $max_width = 128;
    $max_height = 128;
/*    if($_GET['direction'] == 1){
        $max_width = 128;
        $max_height = 128;
        //$image->resizeImage(0, $max_height, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
        //全画像が横タイプとは限らない
        if($width >= $height){
            $image->resizeImage($max_width, 0, imagick::FILTER_MITCHELL, 1);
        }else{
            $image->resizeImage(0, $max_height, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
        }
        
    }else{
        $max_width = 128;
        $max_height = 128;
        //$image->resizeImage($max_width, 0, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
        $image->resizeImage(0, $max_height, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
    }*/
    if($width >= $height){
        $image->resizeImage($max_width, 0, imagick::FILTER_MITCHELL, 1);
    }else{
        $image->resizeImage(0, $max_height, imagick::FILTER_MITCHELL, 1); //アスペクト比を保ちながら縮小（リサイズ）
    }
    
    echo $image;
}
die();
?>
