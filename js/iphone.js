$(function() {
    var element = $('#flickable4').flickable({
      section: 'li'
    });

    $('#select_box td a').click(function() {
      var index = $(this).text() - 1;

      element.flickable('select', index);
      return false;
    });
});