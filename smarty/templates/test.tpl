<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[DEMO]スクロールするとページトップへ戻るボタンがアニメーションで表示 | webOpixel</title>
<link href="common.css" rel="stylesheet" type="text/css" media="all" />
{literal}
<style type="text/css">
#article
{
  background-color: #ffffff;
  background-image: none;
  background-repeat: repeat;
  background-attachment: scroll;
  background-position: 0% 0%;
  background-clip: border-box;
  background-origin: padding-box;
  background-size: auto auto;
  padding-top: 60px;
  padding-right: 60px;
  padding-bottom: 60px;
  padding-left: 60px;
  height: 2000px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 60px;
  margin-left: auto;
  width: 680px;
}
/* page-top */
#page-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    font-size: 77%;
}
#page-top a {
    background: #666;
    text-decoration: none;
    color: #fff;
    width: 100px;
    height: 500px;
    padding: 30px 0;
    text-align: center;
    display: block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
#page-top a:hover {
    text-decoration: none;
    background: #999;
}
#open-btn {
	position: absolute;
	right: 5px;
	top: 5px;
	width: 20px;
	height: 20px;
	cursor: pointer;
	background: url(http://www.webopixel.net/img/close-btn.gif);
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    var openBtn = $('#open-btn img');
    var showFlug = false;
    var topBtn = $('#page-top');    
    topBtn.css('bottom', '-500px');
    var showFlug = false;

	//開くボタンクリックしたら
	$('#open-btn').click(function(){
		panelSwitch();
		openFlug = !openFlug;
		btnOpenFlug = true;
	});

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlug == false) {
                showFlug = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200); 
            }
        } else {
            if (showFlug) {
                showFlug = false;
                topBtn.stop().animate({'bottom' : '-500px'}, 200); 
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>
{/literal}
</head>
<body>
<div id="wrap">
<h1><a href="http://www.webopixel.net/javascript/538.html">スクロールするとページトップへ戻るボタンが<br />アニメーションで表示</a></h1>

<div class="nav">
    <ul class="clearfix">
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">LINK</a></li>
    </ul>
<!-- /#nav --></div>

<div id="article">
    <h2>こんにちは</h2>
    <p>
        これはスクロールするとページトップへ戻るボタンがアニメーションで表示されるサンプルです。<br />
        jQueryを使用しています。<br />
        CSS3は装飾しているだけなので動作には関係ないです。
    </p>
    <p><a href="http://www.webopixel.net/javascript/538.html">このサンプルの記事はこちら</a></p>
<!-- /#article --></div>

<p id="page-top"><a href="#wrap">PAGE TOP</a></p>
<!-- /#wrap --></div>
</body>
</html>