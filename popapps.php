<?php
require_once('fw/define.php');
print "var fqdn = '".$_SERVER['SERVER_NAME']."';";
//print "var fqdn = 'honma-sandbox.herokuapp.com';";
print "window.jQuery || document.write(\"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>\");";
print "if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {";
print "} else {";

$css_no = '';

//iphone direction
if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
        $css_no = '0';
        $direction_js = 0;
    break;
    case DIRECTION_HORIZON:
        //横タイプ 入れ替え
        $width = IPHONE5_HORIZON_WIDTH;
        $height = IPHONE5_HORIZON_HEIGHT;
        $bottom_position = '-329';
        $css_no = '1';
        $direction_js = 1;
    break;
    default:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
        $css_no = '0';
        $direction_js = 0;
    break;
}

//position
if( !isset($_GET['p']) ) $_GET['p'] = POSITION_RIGHT;
switch ($_GET['p']){
    case POSITION_LEFT:
        $position = 'left';
        $css_no .= '0';
    break;
    case POSITION_CENTER:
        $position = 'center';
        $css_no .= '1';
    break;
    case POSITION_RIGHT:
        $position = 'right';
        $css_no .= '2';
    break;
    default:
        $position = 'right';
        $css_no .= '2';
    break;
}

//scroll
if( !isset($_GET['s']) ) $_GET['s'] = SCROLL_BOTTOM;
switch ($_GET['s']){
    case SCROLL_FIRST:
        $scroll_js = 'f';
    break;
    case SCROLL_TOP:
        $scroll_js = 't';
    break;
    case SCROLL_HALF:
        $scroll_js = 'h';
    break;
    case SCROLL_BOTTOM:
        $scroll_js = 'b';
    break;
    case SCROLL_END:
        $scroll_js = 'e';
    break;
    default:
        $scroll_js = 'b';
    break;
}

print "document.write(\"<link rel='stylesheet' href='http://\"+fqdn+\"/css/popapps.css' type='text/css' media='all' /><link rel='stylesheet' href='http://\"+fqdn+\"/css/setting/".$css_no.".css' type='text/css' media='all' /><script type='text/javascript' src='http://\"+fqdn+\"/js/scroll/".$scroll_js.".js' /></script><script type='text/javascript' src='http://\"+fqdn+\"/js/direction/".$direction_js.".js'></script><script type='text/javascript' src='http://\"+fqdn+\"/js/popapps.js'></script><div id='popapps-simulator' style='z-index: 2147483583;width:".$width."px;height:".$height."px;position: fixed;bottom:".$bottom_position."px;".$position.": 5px;padding:0px;margin:0px;'><div id='popapps-title' class='bgBlue'><img src='http://\"+fqdn+\"/img/phone/icon.gif' />popApps<div id='open-btn'><img src='http://\"+fqdn+\"/img/phone/open-btn.gif' /></div><div id='close-btn'><img src='http://\"+fqdn+\"/img/phone/close-btn.gif' /></div></div><iframe src='http://\"+fqdn+\"/phone?sid=".$_GET['sid']."' style='z-index: 1;padding:0;margin:0;' scrolling='no' frameborder='0' width='".$width."px' height='".$height."px' allowtransparency='true'></iframe></div>\");";

print "}";
?>
