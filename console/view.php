<?php
/*echo mb_strimwidth("美容室・ヘアサロン予約＆ヘアカタログ検索 ホットペッパー ビューティー", 0, 36, "...", 'UTF-8');
echo mb_strimwidth("Nenga and greeting 2013 for iphone", 0, 36, "...", 'UTF-8');
die();
//$sData = "あいうえおあいうえおあいうえお123456789012345678901234567890１２３４５６７８９０";
//$sData = 'ホットペッパー ビューティーパズル＆ドラゴンズパズル＆ドラゴンズ';
$sData = '4Towers Onslaught: Combo TD4Towers Onslaught: Combo TD';
//全角・半角問わずバイト数でなく文字数を取得する。
$iCount = mb_strlen( $sData, "UTF-8" );
var_dump($iCount);
die();
//var_dump($iCount);
//die();
//全角・半角問わず140文字より多い場合、140文字に切り詰める
if( $iCount > 140 ){
    $sResult = mb_substr( $sData, 0, 140, "UTF-8" );
}*/
//var_dump($sResult);
//die();
require_once('fw/prepend.php');
$sid = $con->base->getPath('sid',TRUE);
require_once('fw/authManager.php');
$authManager = new authManager();
$authManager->validateLogin(TRUE);

require_once('simulator/logic.php');
$simulator_logic = new simulatorLogic();
$simulator = $simulator_logic->getAppSimulator($sid);
/*$image = unserialize($simulator[0]['simulator_mobile_images']);
var_dump($image);
die();*/
/*unset($image['screenshots'][4]);
unset($image['screenshots'][5]);
unset($image['screenshots'][6]);
unset($image['screenshots'][7]);
var_dump(serialize($image));
die();*/
if(!$simulator){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_APP_EXISTS);
}
$con->t->assign('simulator',$simulator);
//popapps url make
$popapps_url = SIMURLSSL.'/popapps?sid='.$sid;

//position
if( strcasecmp($simulator[0]['col_position'],POSITION_RIGHT) != 0 ){
    $popapps_url .= '&p='.$simulator[0]['col_position'];
}

//scroll
if( strcasecmp($simulator[0]['col_scroll'],SCROLL_BOTTOM) != 0 ){
    $popapps_url .= '&s='.$simulator[0]['col_scroll'];
}
$con->t->assign('popapps_url',$popapps_url);

//iphone
$iphone = utilManager::getIphone($simulator,true);

$con->t->assign('iphone',$iphone);

$con->t->assign('count_screenshots',$iphone['mobile']['count_screenshots']);
if($simulator[0]['col_direction'] == DIRECTION_HORIZON){
    $page = 'horizon';
}else{
    $page = 'vertical';
}
$con->append('console/'.$page);
?>
