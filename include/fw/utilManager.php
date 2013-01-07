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
    
    static public function getCloudinaryFit($width,$height,array $max_image_size){
        $string = 'w_';
        $width_per =  round($max_image_size['max_width'] / $width,2);
        $height_per =  round($max_image_size['max_height'] / $height,2);
        if($width_per >= 1){
            //倍率そのまま
            if($height_per >= 1){
                //倍率そのまま
                return $string.'1.0';
            }else{
                $new_height = ceil($width_per * $height);
                
                if($new_height > $max_image_size['max_height']){
                    //倍率下げても高さが高い場合
                    return $string.$height_per;
                }else{
                    return $string.$width_per;
                }
            }
        }else{
            $new_height = ceil($width_per * $height);
            
            if($new_height > $max_image_size['max_height']){
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
    
    static private function getMaxImageSize($direction){
        if(strcasecmp($direction,DIRECTION_HORIZON) == 0 ){
/*            $max_width = 370;
            $max_height = 208;*/
            $max_width = 357;
            $max_height = 200;
        }else{
            $max_width = 200;
            $max_height = 357;
        }
        return array('max_width'=>$max_width,'max_height'=>$max_height);
    }
    
    static public function test($cloudinary,$direction){
        return utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'],utilManager::getMaxImageSize($direction));
    }
    
    static public function getMobileImageParam($cloudinary,$direction = DIRECTION_VERTICAL){
        return array
        (
            'public_id'=>$cloudinary['public_id'],
            'version'=>$cloudinary['version'],
            'secure_url'=>$cloudinary['secure_url'],
            'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'],utilManager::getMaxImageSize($direction))))
        );
    }

    static public function getConsoleImageParam($cloudinary,$direction = DIRECTION_VERTICAL){
        return array
        (
            'public_id'=>$cloudinary['public_id'],
            'version'=>$cloudinary['version'],
            'secure_url'=>$cloudinary['secure_url'],
            'thumbnail_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array('t_admin_thumbnail')),
            'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(utilManager::getCloudinaryFit($cloudinary['width'],$cloudinary['height'],array('max_width'=>128,'max_height'=>128))))
        );
    }

    static public function getUserImageParam($cloudinary,$logo){
        return array
        (
            'public_id'=>$cloudinary['public_id'],
            'version'=>$cloudinary['version'],
            'secure_url'=>$cloudinary['secure_url'],
            'thumbnail_url'=>$logo['thumbnail_url']
        );
    }

    static public function getLogoParam($cloudinary){
        return array
        (
            'public_id'=>$cloudinary['public_id'],
            'version'=>$cloudinary['version'],
            'secure_url'=>$cloudinary['secure_url'],
            'thumbnail_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array('t_admin_thumbnail')),
            'transformations_url'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(CLOUDINARY_LOGO_SETTING)),
            'transformations_url_little'=>utilManager::getCloudinaryTransformationsURL($cloudinary['secure_url'],array(CLOUDINARY_LOGO_LITTLE_SETTING))
        );
    }

    static public function getIphone($simulator,$isConsole = false){
        //mobile
        if(is_null($simulator[0]['simulator_mobile_images'])){
            $mobile_images = unserialize($simulator[0]['application_mobile_images']);
        }else{
            $mobile_images = unserialize($simulator[0]['simulator_mobile_images']);
        }
        //title
        $iphone['title'] = $simulator[0]['col_title'];
        //screenshots
        $iphone['mobile']['screenshots'] = $mobile_images['screenshots'];
        $count = count($mobile_images['screenshots']);
        $iphone['mobile']['count_screenshots'] = $count;
        $iphone['mobile']['count_screenshots_on'] = $count + 1;

        if($isConsole){
            if(is_null($simulator[0]['simulator_console_images'])){
                $console_images = unserialize($simulator[0]['application_console_images']);
            }else{
                $console_images = unserialize($simulator[0]['simulator_console_images']);
            }
            //screenshots
            $iphone['console']['screenshots'] = $console_images['screenshots'];
        }

        //logo
        $iphone['logo'] = $mobile_images['logo'];
        //link
        $iphone['link'] = $simulator[0]['col_link'];
        //position
        $iphone['position'] = $simulator[0]['col_position'];
        //direction
        $iphone['direction'] = $simulator[0]['col_direction'];
        //licence
        $iphone['licence'] = $simulator[0]['col_licence'];
        return $iphone;
    }
    
    static public function getIphoneHome($user){
        //position
        $iphone['position'] = $user[0]['col_position'];
        
        //logo
        $iphone['user_images'] = unserialize($user[0]['col_user_images']);
        if(is_array($iphone['user_images']) && count($iphone['user_images']) > 0){
            $iphone['user_images_chunk'] = array_chunk($iphone['user_images'],MAX_LOGO_COUNT,TRUE);//画面数計算
            $iphone['user_display_count'] = count($iphone['user_images_chunk'])+1;
        }
        return $iphone;
    }
    
    static public function getPopAppsURL($sid,$simulator){
        //popapps url make
        $popapps_url = SIMURLSSL.'/popapps?sid='.$sid;

        //direction
        if( strcasecmp($simulator[0]['col_direction'],DIRECTION_HORIZON) == 0 ){
            $popapps_url .= '&d='.$simulator[0]['col_direction'];
        }

        //position
        if( strcasecmp($simulator[0]['col_position'],POSITION_RIGHT) != 0 ){
            $popapps_url .= '&p='.$simulator[0]['col_position'];
        }

        //scroll
        if( strcasecmp($simulator[0]['col_scroll'],SCROLL_BOTTOM) != 0 ){
            $popapps_url .= '&s='.$simulator[0]['col_scroll'];
        }
        return $popapps_url;
    }

    static public function getPopAppsHomeURL($uid,$user){
        //$home_url =  SIMURLSSL.'/popapps_home?uid='.$uid;
        $home_url =  SIMURLSSL.'/popapps?uid='.$uid;
        //position
        if( strcasecmp($user[0]['col_position'],POSITION_RIGHT) != 0 ){
            $home_url .= '&p='.$user[0]['col_position'];
        }

        //scroll
        if( strcasecmp($user[0]['col_scroll'],SCROLL_BOTTOM) != 0 ){
            $home_url .= '&s='.$user[0]['col_scroll'];
        }
        return $home_url;
    }

    static public function checkDomain($url,$referer){
        //return FALSE;
        $seiki = '/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i';
        if (preg_match($seiki, $url)) {
        } else {
            return FALSE;
        }
        if (preg_match($seiki, $referer)) {
        } else {
            return FALSE;
        }

        //domain取得
        $seiki2 = '@^(?:https?://)?([^/]+)@i';
        if (preg_match($seiki2, $url,$match)) {
            $url_domain = $match[1];
        } else {
            return FALSE;
        }
        $seiki2 = '@^(?:https?://)?([^/]+)@i';
        if (preg_match($seiki2, $referer,$match)) {
            $referer_domain = $match[1];
        } else {
            return FALSE;
        }

        if( stristr( $referer,$_SERVER['SERVER_NAME']) === TRUE || strcasecmp($url_domain,$referer_domain) == 0 ) return TRUE;
        return FALSE;
    }

}
?>