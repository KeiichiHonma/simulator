<?php
//print "var fqdn = 'simulator.813.co.jp';";
print "var fqdn = 'honma-sandbox.herokuapp.com';";
print "window.jQuery || document.write(\"<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js'></script>\");";
print "if (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPad') > 0 || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {";
print "} else {";
print "document.write(\"<link rel='stylesheet' href='http://\"+fqdn+\"/css/viewer.css' type='text/css' media='all' /><script type='text/javascript' src='http://\"+fqdn+\"/js/viewer.js'></script><div id='viewer'><iframe src='http://\"+fqdn+\"/iframe?uid=".$_GET['uid']."' style='z-index: 1;padding:0;margin:0;' scrolling='no' frameborder='0' width='240' height='579'></iframe></div>\");";
print "}";
?>
