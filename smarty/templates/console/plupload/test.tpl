<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title>Plupload - Queue widget example</title>
{literal}
<style type="text/css">
    body {
        font-family:Verdana, Geneva, sans-serif;
        font-size:13px;
        color:#333;
        background:url(../bg.jpg);
    }
</style>
{/literal}
<link rel="stylesheet" href="/css/plup.css" type="text/css" media="screen" />

{*<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>*}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/plup/plupload.js"></script>
<script type="text/javascript" src="/js/plup/plupload.html4.js"></script>
{*<script type="text/javascript" src="/js/plup//jquery.plupload.queue/jquery.plupload.queue.js"></script>*}
<script type="text/javascript" src="/js/plup/jquery.plupload.queue.js"></script>
</head>
<body>

<form method="post" action="dump.php">
    <div style="float: left; margin-right: 20px">
        {*<div id="html4_uploader" style="width: 450px; height: 330px;">You browser doesn't have HTML 4 support.</div>*}
        <div id="html4_uploader" style="width: 340px; height: 460px;">You browser doesn't have HTML 4 support.</div>
    </div>

    <br style="clear: both" />

    <input type="submit" value="Send" />
</form>
{literal}
<script type="text/javascript">
$(function() {
    // Setup html4 version
    var uploader = $("#html4_uploader").pluploadQueue({
        // General settings
        runtimes : 'html4',
        url : '/console/plupload/upload.php',
        unique_names : true,
        init : {
            QueueChanged: function(obj) {
                //console.log(obj.id);
                //alert(6);
                //document.getElementById(obj.id).innerHTML = '<a href=\'155523\'>123</a>';
            },
           FileUploaded: function(up, file, response) {
            var responseObj = jQuery.parseJSON(response.response);
                //alert(3);
                //alert( file.id );
                //console.log(file.id);
                //console.log(responseObj.filename);
                //document.getElementById('fileName' + file.id).innerHTML = '<a href=\'' + document.URL + responseObj.filename + '\'>' + file.name + '</a>';
                //document.getElementById('fileName' + file.id).innerHTML = '<p>' + file.id + '</p>';
                document.getElementById('testtest').innerHTML = '<p>' + file.id + '</p>';
                //console.log(document.getElementById(file.id));
                return false;
           },
            Error: function( up, args ) {
                alert('Error message.');
            }
        },
        filters : [
            {title : "Image files", extensions : "jpg,gif,png"},
            {title : "Zip files", extensions : "zip"}
        ]
    });

});
</script>
{/literal}
{*<div class="plupload_file_name"><span id="fileName' + o.id + '">'+o.name+'</span></div><div class="plupload_file_action"><a class="status" href="#"></a></div>*}
</body>
</html>