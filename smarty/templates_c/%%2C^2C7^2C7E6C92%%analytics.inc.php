<?php /* Smarty version 2.6.18, created on 2012-12-14 14:13:38
         compiled from include/common/analytics.inc */ ?>
<?php if (! $this->_tpl_vars['debug']): ?>
<?php echo '
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-5207312-13\']);
  _gaq.push([\'_setDomainName\', \'popapp-simulator.com\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
'; ?>

<?php endif; ?>