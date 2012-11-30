<?php
header('content-type: text/javascript');
require_once('fw/define.php');

$speed = 400;
//接頭辞
$head = '';
if( isset($_GET['demo']) && is_numeric($_GET['demo']) ){
    $head = 'demo'.$_GET['demo'].'_';
    //demoだけ変更か
    if( isset($_GET['speed']) && is_numeric($_GET['speed']) ){
        $speed = $_GET['speed'];
    }
}

if( !isset($_GET['d']) ) $_GET['d'] = DIRECTION_VERTICAL;
switch ($_GET['d']){
    case DIRECTION_VERTICAL:
        $position = '"-593px"';
    break;
    case DIRECTION_HORIZON:
        $position = '"-329px"';
    break;
    default:
        $position = '"-593px"';
    break;
}

//scroll
if( !isset($_GET['s']) ) $_GET['s'] = SCROLL_BOTTOM;
switch ($_GET['s']){
    case SCROLL_FIRST:
        $scroll_math_param = '1';
        $is_begin_param = 'true';
    break;
    case SCROLL_TOP:
        $scroll_math_param = '0.66';
        $is_begin_param = 'false';
    break;
    case SCROLL_HALF:
        $scroll_math_param = '0.5';
        $is_begin_param = 'false';
    break;
    case SCROLL_BOTTOM:
        $scroll_math_param = '0.33';
        $is_begin_param = 'false';
    break;
    case SCROLL_END:
        $scroll_math_param = '0';
        $is_begin_param = 'false';
    break;
    default:
        $scroll_math_param = '0.33';
        $is_begin_param = 'false';
    break;
}
?>
$(function() {
    var <?php echo $head; ?>popapps_pos = <?php echo $position; ?>;
    var <?php echo $head; ?>popapps_math = <?php echo $scroll_math_param; ?>;
    var <?php echo $head; ?>is_begin = <?php echo $is_begin_param; ?>;
    var <?php echo $head; ?>popapps_showFlag = false;
    var <?php echo $head; ?>popapps_scrollheight = $(document).height();
    var <?php echo $head; ?>popapps_windowheight = $(window).height();
    var <?php echo $head; ?>popapps_simulator = $('#<?php echo $head; ?>popapps-frame');
    var <?php echo $head; ?>popapps_speed = <?php echo $speed; ?>;
    if(<?php echo $head; ?>popapps_math == 1){
        <?php echo $head; ?>popapps_showFlag = true;
        <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : '5px'}, <?php echo $head; ?>popapps_speed); 
    }else{
        <?php echo $head; ?>popapps_simulator.css('bottom', <?php echo $head; ?>popapps_pos);
        var <?php echo $head; ?>popapps_showFlag = false;
        $(window).scroll(function () {
            var <?php echo $head; ?>popapps_top = $(window).scrollTop();
            <?php echo $head; ?>popapps_scrollPosition = <?php echo $head; ?>popapps_windowheight + <?php echo $head; ?>popapps_top;
            if( <?php echo $head; ?>popapps_top == 0 ){
                if (<?php echo $head; ?>openFlug) {
                    <?php echo $head; ?>panelSwitch();
                    <?php echo $head; ?>openFlug = false;
                }
                <?php echo $head; ?>popapps_showFlag = false;
                <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : <?php echo $head; ?>popapps_pos}, <?php echo $head; ?>popapps_speed);
            }else if ( (<?php echo $head; ?>popapps_scrollheight - <?php echo $head; ?>popapps_scrollPosition) / <?php echo $head; ?>popapps_scrollheight <= <?php echo $head; ?>popapps_math) {
                if (<?php echo $head; ?>popapps_showFlag == false) {
                    if (<?php echo $head; ?>openFlug == false) {
                        <?php echo $head; ?>panelSwitch();
                        <?php echo $head; ?>openFlug = true;
                    }
                    <?php echo $head; ?>popapps_showFlag = true;
                    <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : '5px'}, <?php echo $head; ?>popapps_speed);
                }
            } else {
                if (<?php echo $head; ?>popapps_showFlag) {
                    if (<?php echo $head; ?>openFlug) {
                        <?php echo $head; ?>panelSwitch();
                        <?php echo $head; ?>openFlug = false;
                    }
                    <?php echo $head; ?>popapps_showFlag = false;
                    <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : <?php echo $head; ?>popapps_pos}, <?php echo $head; ?>popapps_speed);
                }
            }
        });
    }

    var <?php echo $head; ?>openBtn = $('#<?php echo $head; ?>up-btn img');
    var <?php echo $head; ?>closeBtn = $('#<?php echo $head; ?>down-btn img');
    var <?php echo $head; ?>openFlug = false;

    //default
    if(<?php echo $head; ?>is_begin){
        <?php echo $head; ?>openFlug = true;
        <?php echo $head; ?>openBtn.hide();
    }else{
        <?php echo $head; ?>openFlug = false;
        <?php echo $head; ?>closeBtn.hide();
    }

    var <?php echo $head; ?>panelSwitch = function() {
        //閉じる
        if (<?php echo $head; ?>openFlug == true ) {
            <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : <?php echo $head; ?>popapps_pos}, <?php echo $head; ?>popapps_speed);
            <?php echo $head; ?>openBtn.show();
            <?php echo $head; ?>closeBtn.hide();
        }
        //開く
        else if (<?php echo $head; ?>openFlug == false) {
            <?php echo $head; ?>popapps_simulator.stop().animate({'bottom' : '5px'}, <?php echo $head; ?>popapps_speed);
            <?php echo $head; ?>closeBtn.show();
            <?php echo $head; ?>openBtn.hide();
        }
    };
    $('#<?php echo $head; ?>popapps-mobile-box').click(function(){
        <?php echo $head; ?>panelSwitch();
        <?php echo $head; ?>openFlug = !<?php echo $head; ?>openFlug;
        <?php echo $head; ?>popapps_showFlag = true;
    });
});