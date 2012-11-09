<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
{*<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ADZ94EYP438NY">
<input type="hidden" name="landing_page" value="billing">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
*}

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ADZ94EYP438NY">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
{*<input type="hidden" name="landing_page" value="billing">*}
<input type="hidden" name="return" value="http://simulator.813.co.jp/paypal/success?uid={$uid}">
<input type="hidden" name="notify_url" value="http://simulator.813.co.jp/paypal/notify?uid={$uid}">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



</form>

{*<form action='expresscheckout.php' METHOD='POST'>
<input id="basic" type="radio" value="9" name="Payment_Amount">$9 / 5 app<br>
<input id="advance" type="radio" value="18" name="Payment_Amount">$18 / 5 app<br>
<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
</form>*}
</body>
</html>