<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
{include file="include/common/header.inc"}

<div class='title'>登録しているアプリ一覧</div>
<ul>
{foreach from=$simulators key="key" item="simulator" name="simulators"}
<li><img src="{$simulator.application_images|getCloudinaryLogo}" /><a href="/console/view/sid/{$simulator.simulator_id}">{$simulator.col_name}</a></li>
{/foreach}
</ul>
</body>
</html>