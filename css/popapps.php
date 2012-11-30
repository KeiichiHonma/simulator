<?php
header('content-type: text/css');
require_once('fw/define.php');

//接頭辞
$head = '';
if( isset($_GET['demo']) && is_numeric($_GET['demo']) ){
    $head = 'demo'.$_GET['demo'].'_';
}

//電話ボックス位置設定
if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $css_no = '0';
    break;
    case DIRECTION_HORIZON:
        $css_no = '1';
    break;
    default:
        $css_no = '0';
    break;
}

if( !isset($_GET['p']) ) $_GET['p'] = POSITION_RIGHT;
switch ($_GET['p']){
    case POSITION_LEFT:
        $css_no .= '0';
    break;
    case POSITION_CENTER:
        $css_no .= '1';
    break;
    case POSITION_RIGHT:
        $css_no .= '2';
    break;
    default:
        $css_no .= '2';
    break;
}

switch ($css_no){
    case '00':
        $position = 'left: 12px;bottom: 15px;';
    break;
    case '02':
        $position = 'right: 12px;bottom: 15px;';
    break;
    case '10':
        $position = 'left: 15px;bottom: 20px;';
    break;
    case '12':
        $position = 'right: 12px;bottom: 20px;';
    break;
    default:
        $position = 'right: 12px;bottom: 15px;';
    break;
}

?>

#<?php echo $head; ?>popapps-mobile-box {
    width:62px;
    height:55px;
    cursor: pointer;
    background: url(https://<?php echo $_SERVER['SERVER_NAME']; ?>/img/phone/mobile_box.png) no-repeat;
    position: fixed;
    <?php echo $position; ?>
    z-index: 2147483583;
}

#<?php echo $head; ?>up-btn {
    position: absolute;
    right: 24px;
    top: 24px;
    width: 15px;
    height: 15px;
    cursor: pointer;
}

#<?php echo $head; ?>down-btn {
    position: absolute;
    right: 24px;
    top: 24px;
    width: 15px;
    height: 15px;
    cursor: pointer;
}