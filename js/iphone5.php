<?php
header('content-type: text/javascript');

//接頭辞
$head = '';
if( isset($_GET['demo']) && is_numeric($_GET['demo']) ){
    $head = 'demo'.$_GET['demo'].'_';
}
?>
(function($){
    $.fn.sb = function(){
        var element = $('#<?php echo $head; ?>flickable').flickable({
          section: 'li'
        });
        $('#<?php echo $head; ?>select_box li a').click(function() {
            var index = $(this).text() - 1;
            element.flickable('select', index);
            $('#<?php echo $head; ?>select_box li a').css("background-color", "#4E4E4E");
            $('#<?php echo $head; ?>select_box li a').hover(function(){
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