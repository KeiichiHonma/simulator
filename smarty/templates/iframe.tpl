<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="ja" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[DEMO]一番下までスクロールするとコンテンツが右下の要素が開く | webOpixel</title>
  <script src="http://lagoscript.org/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
  <script src="/js/jquery.flickable-1.0b3.min.js" type="text/javascript"></script>
</head>
<body style="padding:0;margin:0;">
{literal}
<style type="text/css">
    #iphone {
        /*border: 1px solid #000000;*/
        background:url("/img/common/iphone5.png") 0px 75px no-repeat;
        width:240px;
        height:579px;
        /*height:504px;*/
        padding:0px;
        margin:0px;
    }

    img {
        border: 0;
    }
    
    #app{
        position: relative; top: 0px; left:18px;
    }
      #flickable4 {
        width: 208px;
        height: 370px;
        overflow: hidden;
        float: left;
        margin: 0;
        padding:0;
      }
      #flickable4 ul {
        list-style: none;
        width:624px;
        margin: 0;
        padding:0;
      }
      #flickable4 ul li {
        margin: 0;
        padding:0;
        float: left;
      }
      #flickable4 .block {
        color: #000000;
        width: 208px;
        height: 370px;
        text-align:center;
        float:left;
        margin: 0;
        padding:0;
      }
      #flickable4 h4 {
        /*color: #FFF;*/
        color: #000000;
        margin: 0;
        padding:0;
      }
      #flickable4 .ui-flickable-container {
        cursor: pointer;
        margin: 0;
        padding:0;
      }
        .icon{
            height:75px;
            margin-bottom:72px;
            font-size: 77%;
        }
      #select_box {
        /*border: 1px solid #CCC;*/
        position:relative;
        top:-430px;
        left:130px;
        
        width: auto;
        height: auto;
        padding: 5px;
        margin-left: 15px;
        float: left;
      }
      #select_box td {
        padding: 0;
        margin: 0;
        text-align: center;
        vertical-align: middle;
      }
      #select_box td a {
        text-decoration: none;
        color: #000000;
        background-color: #FFFFFF;
        line-height:10px;
        width: 10px;
        height: 10px;
        margin: 2px;
        display:block;
        text-indent: -9000px; /* 文字はあっちへ行け */
      }
      #select1:hover {background-color:#8c1b1b}
      #select2:hover {background-color:#8c4a1b}
      #select3:hover {background-color:#8c8c1b}
      #select4:hover {background-color:#1b8c1b}
      #select5:hover {background-color:#1b8c83}
      #select6:hover {background-color:#1b508c}
      #select7:hover {background-color:#531b8c}
      #select8:hover {background-color:#8c1b53}
      #select9:hover {background-color:#8c8c8c}
    </style>
    
    <script type="text/javascript">
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

    </script>
{/literal}
<div id="iphone">
    <div id="app">
    <div class="icon">
        <div style="float: left;"><img src="{$icon}" width="75" height="75" alt="" /></div>
        <div>{$h1_text}<br /><a href="{$itune_link}" target="_blank"><img src="/img/common/install_btn.png"  width="125" height="23" alt="" /></a></div>
    </div>

    <div id="flickable4">
        <ul>
        {if $screenshots}
        {foreach from=$screenshots key="key" item="screenshot" name="screenshots"}
        <li><div class="block"><img src="{$screenshot}"alt=""  width='190' height='338' /></div></li>
        {/foreach}
        {/if}
        </ul>
    </div>
    <div style="clear:both;"></div>
    <table id="select_box"> 
      <tbody>
{if $count_screenshots}

{section name=cnt start=1  loop=$count_screenshots_on}
{if $smarty.section.cnt.index == 1 || $smarty.section.cnt.index == 4 || $smarty.section.cnt.index == 7}
<tr>
{/if}
<td><a href="#" id="select{$smarty.section.cnt.index}">{$smarty.section.cnt.index}</a></td>
{if $count_screenshots == $smarty.section.cnt.index || $smarty.section.cnt.index == 3 || $smarty.section.cnt.index == 6 || $smarty.section.cnt.index == 9}
</tr>
{/if}
{/section}
{/if}
    </tbody></table>
    </div>
</div>
</body>
</html>