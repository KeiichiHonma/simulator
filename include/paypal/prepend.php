<?php

if(is_file('/app/www/include/setting.ini')){
    $ini = parse_ini_file('/app/www/include/setting.ini', true);
}else{
    $ini = FALSE;
}


//本番
if(!$ini){
    $pp_hostname = "www.paypal.com";
}else{
    //debug
    if( strcasecmp($ini['paypal']['sandbox'],1) == 0 ){
        $pp_hostname = "www.sandbox.paypal.com";
    }else{
        $pp_hostname = "www.paypal.com";
    }
}
//notify
$curl_url = 'https://'.$pp_hostname.'/cgi-bin/webscr';
?>