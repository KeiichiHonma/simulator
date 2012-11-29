/*delete*/
$(function() {
    $('a.delete').live('click', function() {
        if( confirm('Are you sure you want to delete this image?') ){
            var $this = $(this);
            var opts = {
                onStart: function() {
                    var li = $this.parent("li");
                    public_id = $(this).attr("id");
                    sid = $('#files').attr('class');
                    //files=$('#files');
                    $('#'+public_id).hide();
                    jQuery . post(
                        '/console/popapps/image/delete',
                        //{ 'public_id' : public_id,'sid':files.attr('class') },
                        { 'public_id' : public_id,'sid':sid },
                        function( response, textStatus ) {
                            if( response.success ) {
                                
                                popapps_screenshots_count = popapps_screenshots_count - 1;
                                if( popapps_screenshots_count <= 8 ){
                                    $('#parent_upload').css('visibility','visible');
                                }
                                
                                var count_n = $("#files li").length;
                                
                                var delete_n = $("#files_" + response.public_id).index();//番目
                                var delete_n_p = delete_n + 1;
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