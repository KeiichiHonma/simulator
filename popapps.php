<?php
require_once('fw/define.php');
print "var fqdn = 'simulator.813.co.jp';";
//print "var fqdn = 'honma-sandbox.herokuapp.com';";
print "window.jQuery || document.write(\"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>\");";
print "if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {";
print "} else {";
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
switch ($_GET['s']){
    case SCROLL_FIRST:
        $js = 'f';
    break;
    case SCROLL_TOP:
        $js = 't';
    break;
    case SCROLL_HALF:
        $js = 'h';
    break;
    case SCROLL_BOTTOM:
        $js = 'b';
    break;
    case SCROLL_END:
        $js = 'e';
    break;
    default:
        $js = 'b';
    break;
}

//iphone direction
if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
    break;
    case DIRECTION_HORIZON:
        //横タイプ 入れ替え
        $width = IPHONE5_HORIZON_WIDTH;
        $height = IPHONE5_HORIZON_HEIGHT;
        $bottom_position = '-593';
    break;
    default:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $bottom_position = '-593';
    break;
}

print "document.write(\"<link rel='stylesheet' href='http://\"+fqdn+\"/css/simulator.css' type='text/css' media='all' /><script type='text/javascript' src='http://\"+fqdn+\"/js/popapps/".$js."'></script><script type='text/javascript' src='http://\"+fqdn+\"/js/simulator.js'></script><div id='popapps-simulator' style='position: fixed;bottom:".$bottom_position."px;".$position.": 5px;padding:0px;margin:0px;'><div id='popapps-title' class='bgBlue'><img src='http://\"+fqdn+\"/img/phone/icon.gif' />popApps<div id='open-btn'><img src='http://\"+fqdn+\"/img/phone/open-btn.gif' /></div><div id='close-btn'><img src='http://\"+fqdn+\"/img/phone/close-btn.gif' /></div></div><iframe src='http://\"+fqdn+\"/phone?sid=".$_GET['sid']."' style='z-index: 1;padding:0;margin:0;' scrolling='no' frameborder='0' width='".$width."' height='".$height."' allowtransparency='true'></iframe></div>\");";

print "}";
?>
