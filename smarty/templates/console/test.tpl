<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:mixi="http://mixi-platform.com/ns#">
<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<meta charset="utf-8"> 
<title>app</title>
<link href="/css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/testfileuploader.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/js/testfileuploader.min.js"></script>
</head>
<body>
<div id="thumbnail-fine-uploader"></div>
<div id="thumbnail-result0" class="thumbnail-result"></div><br />
<div id="thumbnail-result1" class="thumbnail-result"></div>
<br />123<br />
123<br />
<ul class="test-list"></ul>
{literal}
<script>
function createUploader() {
    var i = 0;
    var thumbnailuploader = new qq.FileUploader({
        element: $('#thumbnail-fine-uploader')[0],
        action: '/console/image/fine_uploader',
        //listElement:'<ul class="test-list"></ul>',
        //listElement:'<ul class="test-list">',
        //listElement:'test-list',
        debug: true,
        multiple: false,
        //onComplete : function(id, fileName, responseJSON){
            //alert(responseJSON.greeting);
            //console.log(c)
        //} //outputs: success: true, greeting: ;hello world'
        //allowedExtensions: ['jpeg', 'jpg', 'gif', 'png'],
        //sizeLimit: 51200,
        onComplete: function(id, fileName, responseJSON) {
            
            if (responseJSON.error) {
                alert(responseJSON.error);
            }
            if (responseJSON.mes) {
                alert(responseJSON.mes);
            }
            if (responseJSON.success) {
                $('#thumbnail-result'+i).append('<img src="' + responseJSON.file + '" alt="' + responseJSON.file + '" width="27" height="40" />');
                i = i+1;
            }
        }
    });
}
window.onload = createUploader;
</script>
{/literal}
</body>
</html>