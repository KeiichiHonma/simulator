<?php
function smarty_modifier_getCloudinaryFit($width,$height,$max_width = 208,$max_height = 370)
{
    $string = 'w_';
    $width_per =  round($max_width / $width,2);
    $height_per =  round($max_height / $height,2);
    if($width_per > 1){
        //倍率そのまま
        if($height_per > 1){
            //倍率そのまま
            return 1;
        }else{
            $new_height = ceil($width_per * $height);
            
            if($new_height > $max_height){
                //倍率下げても高さが高い場合
                return $string.$height_per;
            }else{
                return $string.$width_per;
            }
        }
    }else{
        $new_height = ceil($width_per * $height);
        
        if($new_height > $max_height){
            //倍率下げても高さが高い場合
            return $string.$height_per;
        }else{
            return $string.$width_per;
        }
    }
}
?>
