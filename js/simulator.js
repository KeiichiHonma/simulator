$(function() {
    var showFlug = false;
    //var pop_scroll = 300;
    var pop_scroll = $(document).height() - $(window).height() - 700;
    
    var popapp = $('#simulator');    
    popapp.css('bottom', '-700px');
    var showFlug = false;
    $(window).scroll(function () {
        if ($(this).scrollTop() > pop_scroll) {
            if (showFlug == false) {
                showFlug = true;
                popapp.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlug) {
                showFlug = false;
                popapp.stop().animate({'bottom' : '-700px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    popapp.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});