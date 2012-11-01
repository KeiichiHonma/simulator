<?php
function smarty_modifier_getWidthHeight($width,$height,$max_width = 208,$max_height = 370)
{
    $margin_text = '';
    if($width >= $height){
        if($width > $max_width){
            $x = $max_width * $height / $width;
            $height = ceil($x);
            if($height > $max_height){
                //高さ調整したのにまだ高さが大きい場合
                $x = $max_width * $max_height / $height;
                $width = ceil($x);
                return 'width="'.$width.'" height="'.$max_height.'"';
            }

            return 'width="'.$max_width.'" height="'.$height.'"'.$margin_text;
        }else{
            if($height > $max_height){
                $x = $max_height * $width / $height;
                return 'width="'.ceil($x).'" height="'.$max_height.'"';
            }else{
                return 'width="'.$width.'" height="'.$height.'"'.$margin_text;
            }
        }
    }else{
        if($height > $max_height){
            $x = $max_height * $width / $height;
            return 'width="'.ceil($x).'" height="'.$max_height.'"';
        }else{
            if($width > $max_width){
                $x = $max_width * $height / $width;
                return 'width="'.$max_width.'" height="'.ceil($x).'"';
            }else{
                return 'width="'.$width.'" height="'.$height.'"'.$margin_text;
            }
        }
    }
}
?>
