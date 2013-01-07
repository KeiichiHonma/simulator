<?php
include('fw/css_path.php');//css path
require_once('fw/define.php');
print "var fqdn = '".$_SERVER['SERVER_NAME']."';";
print "window.jQuery || document.write(\"<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>\");";
print "if ( navigator.userAgent.indexOf('Android') > 0 || navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('iPad') > 0 ) {";
print "} else {";

//iphone direction
if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
        $direction_js = 0;
    break;
    case DIRECTION_HORIZON:
        //横タイプ 入れ替え
        $width = IPHONE5_HORIZON_WIDTH;
        $height = IPHONE5_HORIZON_HEIGHT;
        $bottom_position = '-329';
        $direction_js = 1;
    break;
    default:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
        $direction_js = 0;
    break;
}

//position
if( !isset($_GET['p']) ) $_GET['p'] = POSITION_RIGHT;
switch ($_GET['p']){
    case POSITION_LEFT:
        $position = 'left';
    break;
    case POSITION_CENTER:
        $position = 'center';
    break;
    case POSITION_RIGHT:
        $position = 'right';
    break;
    default:
        $position = 'right';
    break;
}

//scroll
if( !isset($_GET['s']) ) $_GET['s'] = SCROLL_BOTTOM;

//page
if( isset($_GET['sid']) && is_numeric($_GET['sid']) ){
    $page = "phone?sid=".$_GET['sid'];
}elseif( isset($_GET['uid']) && is_numeric($_GET['uid']) ){
    $page = 'home?uid='.$_GET['uid'].'&d='.DIRECTION_VERTICAL;
    $width = IPHONE5_HOME_WIDTH;
    $height = IPHONE5_HOME_HEIGHT;
    $bottom_position = '-593';
}else{
    die();
}
print "document.write(\"<link rel='stylesheet' href='https://\"+fqdn+\"/css/popapps.php?p=".$_GET['p']."&d=".$_GET['d']."' type='text/css' media='screen' /><script type='text/javascript' src='https://\"+fqdn+\"/js/popapps.php?d=".$_GET['d']."&s=".$_GET['s']."'></script><div id='popapps-mobile-box'><div id='up-btn'><img src='".$ssl_path."up.png' /></div><div id='down-btn'><img src='".$ssl_path."down.png' /></div></div><div id='popapps-frame' style='z-index: 2147483582;width:".$width."px;height:".$height."px;position: fixed;bottom:".$bottom_position."px;".$position.": 5px;padding:0px;margin:0px;'><iframe src='https://\"+fqdn+\"/".$page."' style='z-index: 1;padding:0;margin:0;' scrolling='no' frameborder='0' width='".$width."' height='".$height."'></iframe></div>\");";
print "}";
?>
