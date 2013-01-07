<?php /* Smarty version 2.6.18, created on 2012-12-10 13:44:28
         compiled from include/common/javascript.inc */ ?>
<?php echo '
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
    $(\'a[href^=#]\').click(function() {
        var speed = 1000;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? \'html\' : href);
        var position = target.offset().top;
        $($.browser.safari ? \'body\' : \'html\').animate({scrollTop:position}, speed, \'swing\');
        return false;
    });
});
$(function(){
    $(\'[src*="_off."]\')
        .mouseover(function()
        {$(this).attr("src",$(this).attr("src").replace(/^(.+)_off(\\.[a-z]+)$/,"$1_on$2"));})
        .mouseout(function()
        {$(this).attr("src",$(this).attr("src").replace(/^(.+)_on(\\.[a-z]+)$/,"$1_off$2"));})
        .each(function(init)
        {$("<img>").attr("src",$(this).attr("src").replace(/^(.+)_off(\\.[a-z]+)$/,"$1_on$2"));})
});
</script>
<!--[if IE 6]><script src="/js/DD_belatedPNG.js"></script><script>DD_belatedPNG.fix(\'img, .png\');</script><![endif]-->
'; ?>