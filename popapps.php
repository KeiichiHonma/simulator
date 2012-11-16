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
if( !isset($_GET['d']) ) $_GET['d'] = 'v';
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $direction = DIRECTION_VERTICAL;
        $width = 240;
        $height = 579;
    break;
    case DIRECTION_HORIZON:
        $direction = DIRECTION_HORIZON;
        $width = 579;
        $height = 240;
    break;
    default:
        $direction = DIRECTION_VERTICAL;
        $width = 240;
        $height = 579;
    break;
}

print "document.write(\"<link rel='stylesheet' href='http://\"+fqdn+\"/css/simulator.css' type='text/css' media='all' /><script type='text/javascript' src='http://\"+fqdn+\"/js/popapps/".$js."'></script><script type='text/javascript' src='http://\"+fqdn+\"/js/simulator.js'></script><div id='popapps-simulator' style='position: fixed;".$position.": 20px;padding:0px;margin:0px;'><iframe src='http://\"+fqdn+\"/phone?sid=".$_GET['sid']."&d=".$direction."' style='z-index: 1;padding:0;margin:0;' scrolling='no' frameborder='0' width='".$width."' height='".$height."'></iframe></div>\");";

print "}";
?>
