$(function() {
    var demo_popapps_showFlag = false;
    var demo_popapps_scrollheight = $(document).height();
    var demo_popapps_windowheight = $(window).height();
    var demo_popapps_simulator = $('#demo-popapps-simulator');
    var demo_popapps_speed = 600;
    if(demo_popapps_math == 1){
        demo_popapps_showFlag = true;
        demo_popapps_simulator.stop().animate({'bottom' : '5px'}, demo_popapps_speed); 
    }else{
        demo_popapps_simulator.css('bottom', demo_popapps_pos);
        var demo_popapps_showFlag = false;
        $(window).scroll(function () {
            var demo_top = $(window).scrollTop();
            demo_scrollPosition = demo_popapps_windowheight + demo_top;
            if( demo_top == 0 ){
                if (demo_openFlug) {
                    demo_panelSwitch();
                    demo_openFlug = false;
                }
                demo_popapps_showFlag = false;
                demo_popapps_simulator.stop().animate({'bottom' : demo_popapps_pos}, demo_popapps_speed);
            }else if ( (demo_popapps_scrollheight - demo_scrollPosition) / demo_popapps_scrollheight <= demo_popapps_math) {
                if (demo_popapps_showFlag == false) {
                    if (demo_openFlug == false) {
                        demo_panelSwitch();
                        demo_openFlug = true;
                    }
                    demo_popapps_showFlag = true;
                    demo_popapps_simulator.stop().animate({'bottom' : '5px'}, demo_popapps_speed);
                }
            } else {
                if (demo_popapps_showFlag) {
                    if (demo_openFlug) {
                        demo_panelSwitch();
                        demo_openFlug = false;
                    }
                    demo_popapps_showFlag = false;
                    demo_popapps_simulator.stop().animate({'bottom' : demo_popapps_pos}, demo_popapps_speed);
                }
            }
        });
    }

    var demo_openBtn = $('#demo-open-btn img');
    var demo_closeBtn = $('#demo-close-btn img');
    var demo_openFlug = false;

    //default
    if(demo_is_begin){
        demo_openFlug = true;
        demo_openBtn.hide();
    }else{
        demo_openFlug = false;
        demo_closeBtn.hide();
    }

    var demo_panelSwitch = function() {
        //閉じる
        if (demo_openFlug == true ) {
            demo_popapps_simulator.stop().animate({'bottom' : demo_popapps_pos}, demo_popapps_speed);
            demo_openBtn.show();
            demo_closeBtn.hide();
        }
        //開く
        else if (demo_openFlug == false) {
            demo_popapps_simulator.stop().animate({'bottom' : '5px'}, demo_popapps_speed);
            demo_closeBtn.show();
            demo_openBtn.hide();
        }
    };
    $('#demo-popapps-title').click(function(){
        demo_panelSwitch();
        demo_openFlug = !demo_openFlug;
        demo_popapps_showFlag = true;
    });
});