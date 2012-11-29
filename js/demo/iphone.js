(function($){
    $.fn.sb = function(){
        var element = $('#demo-flickable').flickable({
          section: 'li'
        });
        //$('#flickable').flickable('refresh');

        $('#demo-select_box li a').click(function() {
            var index = $(this).text() - 1;
            element.flickable('select', index);
            $('#demo-select_box li a').css("background-color", "#4E4E4E");
            $('#demo-select_box li a').hover(function(){
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