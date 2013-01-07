var submit_error_message = 'Please perform data transmission every once.';
$(function(){
    $('#promo_code_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});

$(function(){
    $('#choose_submit').click(function() {
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});


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
        if($('form input').val() == ''){
            alert('Please input a value.');
            return false;
        }
        $('#next_submit').hide();
        $('#loader').css("background-image","url(http://res.cloudinary.com/popapps/image/upload/ajax-loader.gif)");
        $('#loader-text').text("Please be patioent.We are now loading.");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});
$(function(){
    $('#create_submit').click(function() {
        if($('form input').val() == ''){
            alert('Please input a value.');
            return false;
        }
        $('#create_submit').hide();
        $('#previous_submit').hide();
        $('#loader').css("background-image","url(http://res.cloudinary.com/popapps/image/upload/ajax-loader.gif)");
        $('#loader-text').text("Please be patioent.We are now loading.");
        $(this).click(function () {
            alert(submit_error_message);
            return false;
        });
    });
});