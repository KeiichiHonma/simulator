$(function() {
    //var popapps_pos = '-1000px';
    var popapps_pos = '-593px';
    var popapps_showFlag = false;
    var popapps_scrollheight = $(document).height();
    var popapps_windowheight = $(window).height();
    var popapps_simulator = $('#popapps-simulator');
    var popapps_speed = 200;
    if(popapps_math == 1){
        popapps_showFlag = true;
        popapps_simulator.stop().animate({'bottom' : '20px'}, popapps_speed); 
    }else{
        popapps_simulator.css('bottom', popapps_pos);
        var popapps_showFlag = false;
        $(window).scroll(function () {
            var top = $(window).scrollTop();
            scrollPosition = popapps_windowheight + top;
            if( top == 0 ){
                if (openFlug) {
                    panelSwitch();
                    openFlug = false;
                }
                popapps_showFlag = false;
                popapps_simulator.stop().animate({'bottom' : popapps_pos}, popapps_speed);
            }else if ( (popapps_scrollheight - scrollPosition) / popapps_scrollheight <= popapps_math) {
                if (popapps_showFlag == false) {
                    if (openFlug == false) {
                        panelSwitch();
                        openFlug = true;
                    }
                    popapps_showFlag = true;
                    popapps_simulator.stop().animate({'bottom' : '20px'}, popapps_speed);
                }
            } else {
                if (popapps_showFlag) {
                    if (openFlug) {
                        panelSwitch();
                        openFlug = false;
                    }
                    popapps_showFlag = false;
                    popapps_simulator.stop().animate({'bottom' : popapps_pos}, popapps_speed);
                }
            }
        });
    }

    var openBtn = $('#open-btn img');
    var closeBtn = $('#close-btn img');
    closeBtn.hide();//default
    var openFlug = false;
    var panelSwitch = function() {
        //閉じる
        if (openFlug == true ) {
            popapps_simulator.stop().animate({'bottom' : popapps_pos}, popapps_speed);
            openBtn.show();
            closeBtn.hide();
        }
        //開く
        else if (openFlug == false) {
            popapps_simulator.stop().animate({'bottom' : '20px'}, popapps_speed);
            closeBtn.show();
            openBtn.hide();        //閉じるボタンにする
        }
    };
    //開くボタンクリックしたら
    $('#popapps-title').click(function(){
        panelSwitch();
        openFlug = !openFlug;
        popapps_showFlag = true;
    });
});