<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<h2>Confirm your informations</h2>
<table>
    <tbody>
        <tr>
            <td>Name:
            <td>{$firstName} {$lastName}
        </tr>
        <tr>
            <td>Email:
            <td>{$email}
        </tr>
        <tr>
            <td>Your payment:
            <td>{$smarty.session.Payment_Amount}
        </tr>
    <tbody>
</table>
<form action='confirmation' METHOD='POST'>
<input type="submit" value="Review"/>
</form>
</body>
</html>