<?php
function smarty_modifier_getWidthHeight($width,$height,$max_width = 208,$max_height = 370)
{
    // 画像サイズ取得

    //list($width, $height, $type, $attr) = getimagesize(画像パス);
    $newwidth = 0; // 新しい横幅
    $newheight = 0; // 新しい縦幅
    //$max_width = 200; // 最大横幅
    //$max_height = 50; // 最大縦幅

    // 両方オーバーしていた場合
    if ($max_height < $height && $max_width < $width)  {
        if ($max_width < $max_height) {
            $newwidth = $max_width;
            $newheight = $height * ($max_width / $width); 
        } else if ($max_height < $max_width) {
            $newwidth = $width * ($max_height / $height);
            $newheight = $max_height; 
        } else { 
             if ($width < $height) {
                $newwidth = $width * ($max_height / $height);
                $newheight = $max_height; 
            } else if($height < $width) {
                $newwidth = $max_width;
                $newheight = $height * ($max_width / $width); 
            }
        }
    } else if ($height < $max_height && $width < $max_width) { // 両方オーバーしていない場合 
        $newwidth = $width;
        $newheight = $height; 
    } else if ($max_height < $height && $width <= $max_width) {
        // 縦がオーバー、横は新しい横より短い場合
        // 縦がオーバー、横は同じ長さの場合
        $newwidth = $width * ($max_height / $height);
        $newheight = $max_height; 
    } else if ($height <= $max_height && $max_width < $width) {
        // 縦が新しい縦より短く、横はオーバーしている場合
        // 縦は同じ長さ、横はオーバーしている場合
        $newwidth = $max_width;
        $newheight = $height * ($max_width / $width); 
    } else if ($height == $max_height && $width < $max_width) {
        // 横が新しい横より短く、縦は同じ長さの場合 
        $newwidth = $width * ($max_height / $height);
        $newheight = $max_height; 
    } else if ($height < $max_height && $width = $max_width) { 
        // 縦が新しい縦より短く、横は同じ長さの場合
        $newwidth = $max_width;
        $newheight = $height * ($max_width / $width); 
    } else {
        // 縦も横も、新しい長さと同じ長さの場合
        // または、縦と横が同じ長さで、かつ最大サイズを超えない場合
        $newwidth = $width;
        $newheight = $height;
    }
    return array('width'=>$newwidth,'height'=>$newheight);
}
?>
