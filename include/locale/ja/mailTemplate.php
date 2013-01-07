<?php
class mailTemplate
{
    public function getBuySubject(){
        return '[popapps]ご購入ありがとうございます。';
    }

    public function getBuyUserBody(){
        $message .= "ご購入ありがとうございます。\n\n
この度は【 popApps 】をご利用いただきまして、誠にありがとうございます。.\n
このメールは、登録メールアドレス宛に自動的にお送りしています。.\n
popApps team\n
Email:     info@popapp-simulator.com\n
Web:       http://ja.popapp-simulator.com/";
        return $message;
    }
    
}
?>
