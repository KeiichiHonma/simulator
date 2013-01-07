<?php /* Smarty version 2.6.18, created on 2012-12-13 18:36:11
         compiled from include/console/double_click_stop.inc */ ?>
<?php echo '
<script>
var submit_error_message = \'Please perform data transmission every once.\';
$(function(){
    $(\'#image_sort_submit\').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $(\'#setting_submit\').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $(\'#next_submit\').click(function() {
        if($(\'form input\').val() == \'\'){
            alert(\'Please input a value.\');
            return false;
        }
        $(\'#next_submit\').hide();
        $(\'#loader\').css("background-image","url(/img/common/ajax-loader.gif)");
        $(\'#loader-text\').text("Please be patioent.We are now loading.");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $(\'#create_submit\').click(function() {
        if($(\'form input\').val() == \'\'){
            alert(\'Please input a value.\');
            return false;
        }
        $(\'#create_submit\').hide();
        $(\'#previous_submit\').hide();
        $(\'#loader\').css("background-image","url(/img/common/ajax-loader.gif)");
        $(\'#loader-text\').text("Please be patioent.We are now loading.");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});


</script>
'; ?>