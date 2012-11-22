(function($){
    $.fn.sb = function(){
        var element = $('#flickable').flickable({
          section: 'li'
        });

        $('#select_box li a').click(function() {
            var index = $(this).text() - 1;
            element.flickable('select', index);
            $('#select_box li a').css("background-color", "#ffffff");
            $('#select_box li a').hover(function(){
                $(this).css('background-color','#1b508c');
            }, function(){
                $(this).css('background-color','#FFFFFF');
            });
            $(this).css('background-color','#1b508c');
            $(this).unbind("mouseenter").unbind("mouseleave");
            
            return false;
        });
    }
})(jQuery);

$(function() {
    $(this).sb();
});