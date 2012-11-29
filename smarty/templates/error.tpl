<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 

<link type="text/css" href="/css/common.css" rel="stylesheet" media="all" />

<title>{$smarty.const.APP_NAME}</title>
</head>
<body>
{foreach from=$errorlist key="key" item="value" name="errorlist"}
{$value|nl2br}<br />
{/foreach}
</body>
</html>