<?php
function smarty_modifier_test($user,$uid)
{
    //    <a href="http://www.facebook.com/dialog/send?app_id=284194714999778&name={'フォトブックアプリ'|escape:'url'}&description={$value.nameさんの写真を集めるため、フォトブックアプリに参加しましょう。|escape:'url'}&link={'http://friend-selector.813.co.jp/test/'|escape:'url'}&redirect_uri={'http://friend-selector.813.co.jp/test/marriage/uid/$value.uid'|escape:'url'}&to={$value.uid}">{$value.name}</a>
    $array = explode('/sx',$_SERVER['REQUEST_URI']);
    $url = $array !== FALSE ? $array[0] : $_SERVER['REQUEST_URI'];
    
    $html = 'http://www.facebook.com/dialog/send?app_id=284194714999778&';
    $html .= 'name='.urlencode('フォトブックアプリ').'&';
    $html .= 'description='.urlencode($user.'さんの写真を集めるため、フォトブックアプリに参加しましょう。').'&';
    $html .= 'link='.urlencode('http://friend-selector.813.co.jp/test/').'&';
    $html .= 'redirect_uri='.urlencode('http://friend-selector.813.co.jp/test/marriage/uid/'.$uid).'&';
    $html .= 'to='.$uid;
    return $html;
}

?>
