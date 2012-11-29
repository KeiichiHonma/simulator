{literal}
<script>
var submit_error_message = 'Please perform data transmission every once.';
$(function(){
    $('#image_sort_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#setting_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#next_submit').click(function() {
        $('#next_submit').hide();
        $('<img src="/img/common/ajax-loader.gif" />').appendTo('#loader');
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#create_submit').click(function() {
        $('#create_submit').hide();
        $('#previous_submit').hide();
        $('<img src="/img/common/ajax-loader.gif" />').appendTo('#loader');
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});



</script>
{/literal}