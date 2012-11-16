/*delete*/
$(function() {
    $('a.delete').live('click', function() {
        //console.log($(this).parent("li"));
        if( confirm('Are you sure you want to delete this image?') ){
            var $this = $(this);
            var opts = {
                onStart: function() {
                    var li = $this.parent("li");
                    public_id = $(this).attr("id");
                    $('#'+public_id).hide();
                    jQuery . post(
                        '/console/image/delete',
                        { 'public_id' : public_id },
                        function( response, textStatus ) {
                            if( response.success ) {
                                var count_n = $("#files li").length;
                                
                                var delete_n = $("#files_" + response.public_id).index();//番目
                                var delete_n_p = delete_n + 1;
                                //console.log(delete_n_p);
                                //var delete_n = Number(li.attr("class"));
                                
                                $this.spinner('remove');
                                $('#files_'+response.public_id).remove();
                                $('#sort_'+response.public_id).remove();
                                $('#flick_'+response.public_id).remove();
                                $('#select_box_' + delete_n_p ).remove();
                                
                                //n以降の数字の要素を変更
                                if( count_n > delete_n_p){
                                    for (i=delete_n_p + 1;i<=count_n;i++){
                                        nm = i - 1;
                                        //console.log(nm);
                                        //$('#files_' + response.public_id).attr("class",nm);
                                        $('#select_box_' + i).html('<a href="#" id="select' + nm + '">' + nm + '</a>');
                                        $('#select_box_' + i).attr("id",'select_box_' + nm);
                                    }
                                    $(this).sb();
                                }
                            }else{
                                //$('#'+public_id).show();
                                alert(response.error);
                            }
                        }
                        ,'json'
                    );
                },
                onFinish: function() {
                    //$(this).remove();
                }
            };
            $this.spinner(opts);
            //$this.parent("li").spinner(opts);
        }
        return false;
    });
});

/*add*/
$(function(){
    var btnUpload=$('#upload');
    var status=$('#status');
    new AjaxUpload(btnUpload, {
        action: '/console/image/upload',
        name: 'uploadfile',
        onSubmit: function(file, ext){
             if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
                // extension is not allowed 
                status.text('Only JPG, PNG or GIF files are allowed');
                return false;
            }
            //status.text('Uploading...');
            
            var opts = {
                onStart: function() {
                    $('#upload_btn').hide();
                },
                onFinish: function() {

                }
            };
            $('#upload').spinner(opts);
        },
        onComplete: function(file, response){
            status.text('');
            var responseObj = jQuery.parseJSON(response);
            if(responseObj.success){
                var n=$("#sort li").length;
                var np = n+1;
                //sortable
                $('<li id="sort_' + responseObj.public_id + '" class="'+ n + '"></li>').appendTo('#sort').html('<img src="'+ responseObj.console_thumbnail + '" alt="" />');
                $('.sortable').sortable();
                
                $('<li id="files_' + responseObj.public_id + '"><a href="#" id="' + responseObj.public_id + '" class="delete">Delete</a><br /><img src="'+ responseObj.console_transformations_url + '" /></li>').appendTo('#files');
                
                //flickable
                $('<li id="flick_' + responseObj.public_id + '"></li>').appendTo('#flickable_ul').html('<div class="block"><img src="'+ responseObj.mobile_transformations_url + '" alt="" /><div>');
                
                //select_box
                $('<li id="select_box_' + np + '"></li>').appendTo('#select_box').html('<a href="#" id="select' + np + '">' + np + '</a>');
                
                $(this).sb();
            } else{
                $('<li></li>').appendTo('#new_files').text(responseObj.error).addClass('error');
            }
            $('#upload').spinner('remove');
            $('#upload_btn').show();
            $('#upload').attr("disabled",false);
        }
    });
});