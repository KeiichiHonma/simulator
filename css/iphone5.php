<?php
header('content-type: text/css');
require_once('fw/define.php');

//接頭辞
$head = '';
$is_demo = FALSE;
if( isset($_GET['demo']) && is_numeric($_GET['demo']) ){
    $head = 'demo'.$_GET['demo'].'_';
    $is_demo = TRUE;
}

if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;

$iphone_image = '/img/phone/iphone5_black_vertical.png';
$iphone_image_position = '89px';
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $image_position = '21px';
        $top_box_bottom_margin = 'margin-bottom:75px;';
        $flickable_width = 200;//意図的にint
        $flickable_height = '357px';
        $flickable_position = '';
        $selectbox_position = 'top:-420px;left:0px;';
        $css_no = '0';
    break;
    case DIRECTION_HORIZON:
        $iphone_image = '/img/phone/iphone5_black_horizon.png';
        $width = IPHONE5_HORIZON_WIDTH;
        $height = IPHONE5_HORIZON_HEIGHT;
        $image_position = '75px';
        $top_box_bottom_margin = '';
        $flickable_width = 357;//意図的にint
        $flickable_height = '200px';
        $flickable_position = 'top:19px;';
        $selectbox_position = 'top:-190px;left:-55px;';
        $css_no = '1';
    break;
    default:
        $width = IPHONE5_VERTICAL_WIDTH;
        $height = IPHONE5_VERTICAL_HEIGHT;
        $top_box_bottom_margin = 'margin-bottom:75px;';
        $flickable_width = 200;//意図的にint
        $flickable_height = '357px';
        $flickable_position = '';
        $selectbox_position = 'top:-420px;left:0px;';
        $css_no = '0';
    break;
}

//home?
$top_box_padding = '';
$is_home = FALSE;
if( isset($_GET['h']) && strcasecmp($_GET['h'],0 ) == 0){
    $top_box_padding = 'padding-top:164px;';///*89+75*/
    $is_home = TRUE;
}

//console? fixedとかの位置設定を抜くため
$is_console = TRUE;
if( !isset($_GET['c']) || strcasecmp($_GET['c'],1 ) == 0){
    $is_console = FALSE;
    
    //homeからの表示の場合はhomeのposition優先
    if( isset($_GET['home_p']) ){
        switch ($_GET['home_p']){
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
    }else{
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
    }
    $position_fixed_or_absolute = $is_demo ? 'absolute' : 'fixed';
    switch ($css_no){
        case '00':
            $phone_position = 'position: '.$position_fixed_or_absolute.';bottom: 0px;left: 0px;';
            $top_box_position = 'position: relative;top:0px;left:0px;';
        break;
        case '02':
            $phone_position = 'position: '.$position_fixed_or_absolute.';bottom: 0px;right: 0px;';
            $top_box_position = 'position: relative;top:0px;left:0px;';
        break;
        case '10':
            $phone_position = 'position: '.$position_fixed_or_absolute.';bottom: 0px;left: 0px;';
            $top_box_position = 'position: relative;top:0px;left:-54px;';
        break;
        case '12':
            $phone_position = 'position: '.$position_fixed_or_absolute.';bottom: 0px;right: 0px;';
            $top_box_position = 'position: relative;top:0px;left:210px;';
        break;
        default:
            $phone_position = 'position: '.$position_fixed_or_absolute.';bottom: 0px;right: 0px;';
            $top_box_position = 'position: relative;top:0px;left:0px;';
        break;
    }
}else{

}
//
if($is_home && $is_console){
    $top_box_padding = 'padding-top:75px;';
    $height = IPHONE5_HORIZON_WIDTH;
    $iphone_image_position = '0px';
}

//border: 1px solid #CCC;
?>
#<?php echo $head; ?>iphone {
    background:url(<?php echo $iphone_image; ?>) 0px <?php echo $iphone_image_position; ?> no-repeat;
    width:<?php echo $width; ?>px;
    height:<?php echo $height; ?>px;
    padding:0px;
    margin:0px;
    <?php echo $phone_position; ?>
}

#<?php echo $head; ?>top-box{
    width:208px;
    height:89px;
    <?php echo $top_box_position; ?>
    <?php echo $top_box_bottom_margin; ?>
}

#<?php echo $head; ?>top-box table{
    width:208px;
}
#<?php echo $head; ?>top-box td{
    font-size: 11px;
}

#<?php echo $head; ?>top-box td.logo{
    padding:3px 0px 3px 2px;
}

#<?php echo $head; ?>top-box td.appstore{
    padding:0px 2px 0px 0px;
}

#<?php echo $head; ?>error-box{
    width:208px;
    height:89px;
    font-size: 77%;
    <?php echo $top_box_position; ?>
    <?php echo $top_box_bottom_margin; ?>
}

#<?php echo $head; ?>app{
    position: relative;
    top:0px;
    left:<?php echo $image_position; ?>;
    <?php echo $top_box_padding; ?>
}

#<?php echo $head; ?>flickable {
    <?php echo $flickable_position; ?>
    width: <?php echo $flickable_width;//int ?>px;
    height: <?php echo $flickable_height; ?>;
    overflow: hidden;
    float: left;
    margin: 0;
    padding:0;
}
#<?php echo $head; ?>flickable ul {
    list-style: none;
    width:<?php echo $flickable_width * 3;//int ?>px;
    margin: 0;
    padding:0;
}
#<?php echo $head; ?>flickable ul li {
    margin: 0;
    padding:0;
    float: left;
}
#<?php echo $head; ?>flickable .block {
    color: #FFFFFF;
    width: <?php echo $flickable_width;//int ?>px;
    height: <?php echo $flickable_height; ?>;
    text-align:center;
    float:left;
    margin: 0;
    padding:0;
}

#<?php echo $head; ?>flickable .block .logo{
    width: 40px;
    height: 40px;
    float:left;
    margin: 16px 0px 0px 8px;
    padding:0;
}

#<?php echo $head; ?>flickable .ui-flickable-container {
    cursor: pointer;
    margin: 0;
    padding:0;
}

#<?php echo $head; ?>select_box {
    position:relative;
    <?php echo $selectbox_position; ?>
    padding: 0px;
    margin: 10px 0px 0px 10px;
    float: left;
    width:42px;
}

#<?php echo $head; ?>select_box li{
    padding: 0;
    margin: 0;
    text-align: center;
    vertical-align: middle;
    float:left;
    list-style:none;
}

#<?php echo $head; ?>select_box li a {
    text-decoration: none;
    color: #4E4E4E;
    background-color: #4E4E4E;
    line-height:10px;
    width: 10px;
    height: 10px;
    margin: 2px;
    display:block;
    text-indent: -9000px;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
}
#<?php echo $head; ?>select_box li a#<?php echo $head; ?>select1 {
    background-color:#FFFFFF;
}

#<?php echo $head; ?>select1:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select2:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select3:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select4:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select5:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select6:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select7:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select8:hover {background-color:#FFFFFF}
#<?php echo $head; ?>select9:hover {background-color:#FFFFFF}