<?php
class simulatorUtil extends logicManager
{
    static public function getIphone($simulator){
        if(is_null($simulator[0]['simulator_images'])){
            $images = unserialize($simulator[0]['application_images']);
        }else{
            $images = unserialize($simulator[0]['simulator_images']);
/*            unset($images['screenshots'][5]);
            unset($images['screenshots'][6]);
            unset($images['screenshots'][7]);
            unset($images['screenshots'][8]);
var_dump(serialize($images));
die();*/
        }
        //title
        $iphone['title'] = $simulator[0]['col_title'];
        //screenshots
        $iphone['screenshots'] = $images['screenshots'];
        $count = count($images['screenshots']);
        $iphone['count_screenshots'] = $count;
        $iphone['count_screenshots_on'] = $count + 1;
        //logo
        $iphone['logo'] = $images['logo'];
        //link
        $iphone['link'] = $simulator[0]['col_link'];
        return $iphone;
    }
}
?>