<?php
if(is_file('/app/www/include/setting.ini')){
    $ini = parse_ini_file('/app/www/include/setting.ini', true);
}else{
    $ini = FALSE;
}

//本番
if(!$ini){
    $path = 'http://res.cloudinary.com/popapps/image/upload/';
    $ssl_path = 'https://d3jpl91pxevbkh.cloudfront.net/popapps/image/upload/';
    $ja = 'ja.popapp-simulator.com';
}else{
    if(strcasecmp($ini['common']['isDebug'],1) == 0){
        $path = '/img/common/';
        $ssl_path = '/img/phone/';
        $ja = 'ja.simulator.813.co.jp';
    }else{
        $path = 'http://res.cloudinary.com/popapps/image/upload/';
        $ssl_path = 'https://d3jpl91pxevbkh.cloudfront.net/popapps/image/upload/';
        $ja = 'ja.popapp-simulator.com';
    }
}

switch ($_SERVER['SERVER_NAME']){
    case $ja:
        $tail_string = '_ja';
    break;

    default:
        $locale_string = '';
    break;
}

?>