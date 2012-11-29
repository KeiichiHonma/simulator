(function($){
    $.fn.sb = function(){
        var element = $('#demo2-flickable').flickable({
          section: 'li'
        });
        //$('#flickable').flickable('refresh');

        $('#demo2-select_box li a').click(function() {
            var index = $(this).text() - 1;
            element.flickable('select', index);
            $('#demo2-select_box li a').css("background-color", "#4E4E4E");
            $('#demo2-select_box li a').hover(function(){
                $(this).css('background-color','#FFFFFF');
            }, function(){
                $(this).css('background-color','#4E4E4E');
            });
            $(this).css('background-color','#FFFFFF');
            $(this).unbind("mouseenter").unbind("mouseleave");
            
            return false;
        });
    }
})(jQuery);

$(function() {
    $(this).sb();
});