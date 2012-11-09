<?php
class utilManager
{
    static public function checkPrefix($column,$as = null,$alias = null){
        if(preg_match("/^_id/", $column) == 1){
            if(!is_null($alias)){
                return is_null($as) ? $alias.'.'.$column : $alias.'.'.$column.' AS '.$as;
            }else{
                return $column;//そのまま _id
            }
        }else{
            if(!is_null($alias)){
                return is_null($as) ? $alias.'.'.DATABASE_COLUMN_PREFIX.$column : $alias.'.'.DATABASE_COLUMN_PREFIX.$column.' AS '.$as;
            }elseif(!is_null($as)){//locale
                return DATABASE_COLUMN_PREFIX.$column.' AS '.$as;
            }else{
                return DATABASE_COLUMN_PREFIX.$column;
            }
        }
    }
    
    static public function makePrefixParameter($param = array(),$alias = null){
        foreach ($param as $key => $value){
            $new = self::checkPrefix($key,$alias);
            $param[$new] = $value;
            if($new != $key) unset($param[$key]);//_idｊは消さない
        }
        return $param;
    }
    
    //locale変数をPOSTにセットする汎用関数
    //DBから取得された変数を各言語用パラメータにセットする
    static public function setLocalePostPram($param_name,$param,$someone_key = FALSE){
        if(!$someone_key) $someone_key = $param_name;
        $_POST[$param_name.'_'.LOCALE_JA] = $param['col_'.$someone_key.'_'.LOCALE_JA];
        $_POST[$param_name.'_'.LOCALE_EN] = $param['col_'.$someone_key.'_'.LOCALE_EN];
    }
    
    static public function getCloudinaryFit($width,$height,$max_width = 208,$max_height = 370){
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
    
    static public function getCloudinaryTransformationsURL($image_url,$transformations){
        //logoは丸めるので修正
        $url = explode('/',$image_url);
        $count = count($url);
        if($transformations == false){
            unset($url[$count-2]);
        }else{
            $url[$count-2] = implode(',',$transformations);
        }
        return implode('/',$url);
    }
}
?>