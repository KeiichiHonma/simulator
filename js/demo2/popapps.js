$(function() {
    var demo2_popapps_showFlag = false;
    var demo2_popapps_scrollheight = $(document).height();
    var demo2_popapps_windowheight = $(window).height();
    var demo2_popapps_simulator = $('#demo2-popapps-simulator');
    var demo2_popapps_speed = 200;
    if(demo2_popapps_math == 1){
        demo2_popapps_showFlag = true;
        demo2_popapps_simulator.stop().animate({'bottom' : '5px'}, demo2_popapps_speed); 
    }else{
        demo2_popapps_simulator.css('bottom', demo2_popapps_pos);
        var demo2_popapps_showFlag = false;
        $(window).scroll(function () {
            var demo2_top = $(window).scrollTop();
            demo2_scrollPosition = demo2_popapps_windowheight + demo2_top;
            if( demo2_top == 0 ){
                if (demo2_openFlug) {
                    demo2_panelSwitch();
                    demo2_openFlug = false;
                }
                demo2_popapps_showFlag = false;
                demo2_popapps_simulator.stop().animate({'bottom' : demo2_popapps_pos}, demo2_popapps_speed);
            }else if ( (demo2_popapps_scrollheight - demo2_scrollPosition) / demo2_popapps_scrollheight <= demo2_popapps_math) {
                if (demo2_popapps_showFlag == false) {
                    if (demo2_openFlug == false) {
                        demo2_panelSwitch();
                        demo2_openFlug = true;
                    }
                    demo2_popapps_showFlag = true;
                    demo2_popapps_simulator.stop().animate({'bottom' : '5px'}, demo2_popapps_speed);
                }
            } else {
                if (demo2_popapps_showFlag) {
                    if (demo2_openFlug) {
                        demo2_panelSwitch();
                        demo2_openFlug = false;
                    }
                    demo2_popapps_showFlag = false;
                    demo2_popapps_simulator.stop().animate({'bottom' : demo2_popapps_pos}, demo2_popapps_speed);
                }
            }
        });
    }

    var demo2_openBtn = $('#demo2-open-btn img');
    var demo2_closeBtn = $('#demo2-close-btn img');
    var demo2_openFlug = false;

    //default
    if(demo2_is_begin){
        demo2_openFlug = true;
        demo2_openBtn.hide();
    }else{
        demo2_openFlug = false;
        demo2_closeBtn.hide();
    }

    var demo2_panelSwitch = function() {
        //閉じる
        if (demo2_openFlug == true ) {
            demo2_popapps_simulator.stop().animate({'bottom' : demo2_popapps_pos}, demo2_popapps_speed);
            demo2_openBtn.show();
            demo2_closeBtn.hide();
        }
        //開く
        else if (demo2_openFlug == false) {
            demo2_popapps_simulator.stop().animate({'bottom' : '5px'}, demo2_popapps_speed);
            demo2_closeBtn.show();
            demo2_openBtn.hide();
        }
    };
    $('#demo2-popapps-title').click(function(){
        demo2_panelSwitch();
        demo2_openFlug = !demo2_openFlug;
        demo2_popapps_showFlag = true;
    });
});