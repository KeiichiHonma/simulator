<?php
require_once('sendgrid-php/SendGrid_loader.php');
class mailManager
{
    private $halt_real = 'halt@813.co.jp';

    private $halt_debug = 'keiichi-honma@813.co.jp';

    private $dev_real = 'dev@813.co.jp';

    private $dev_debug = 'keiichi-honma@813.co.jp';

    //ハチワンに送る
    private $iluna_real = 'info@813.co.jp';

    private $iluna_debug = 'keiichi-honma@813.co.jp';
    
    //申込関連で使用するアドレス
    private $buy_real = 'popapps@813.co.jp';

    private $buy_debug = 'keiichi-honma@813.co.jp';

    private $sendgrid;
    private $sendgrid_mail;
    private $mail_template;
    
    private $to;
    private $from = 'info@popapps-simulator.com';
    private $bcc;
    private $subject;
    //private $body;
    
    function __construct(){
        $this->sendgrid = new SendGrid('popapps', 'k-honma2638');
        $this->sendgrid_mail = new SendGrid\Mail();
    }

    private function callTemplate(){
        require_once('locale/'.LOCALE.'/mailTemplate.php');//翻訳ファイル
        $this->mail_template = new mailTemplate();
    }

    private function append(){
        //戻し
        $this->mail_template->ca_url = null;
        $this->mail_template->ca_url_ssl = null;
    }
    
    private function send($body){
        $this->sendgrid_mail->
          addTo($this->to)->
          setFrom($this->from)->
          setSubject($this->subject)->
          setText($body);
        $this->sendgrid->smtp->send($this->sendgrid_mail);
    }
    
    //宛先/////////////////////////////////////////////////////////////////////////////////////////////////
    public function sendHalt($body,$shutdown_error = null){
        global $con;
        if($con->isDebug){
            $this->to = $this->halt_debug;
        }else{
            $this->to = $this->halt_real;
        }
        $this->subject = 'popapps-halt';
        $body .= "\n\nhalt----------------------------------------------------\n\n";
        $body .= 'URL : '.$_SERVER['SCRIPT_NAME']."\n";
        if(isset($_SERVER['HTTP_REFERER'])) $body .= 'REFERER : '.$_SERVER['HTTP_REFERER']."\n";
        $body .= 'USER_AGENT : '.$_SERVER['HTTP_USER_AGENT']."\n";
        $body .= 'ADDR : '.$_SERVER['REMOTE_ADDR']."\n";
        if(!is_null($shutdown_error)){
            foreach ($shutdown_error as $key => $value){
                $body .= $key.$value."\n";
            }
        }

        $this->send($body);
    }

    public function sendLog($body){
        global $con;
        if($con->isDebug){
            $this->to = $this->iluna_debug;
        }else{
            $this->to = $this->iluna_real;
        }
        $this->subject = 'popapps-log';
        $body .= "\n\nlog----------------------------------------------------\n\n";
        $body .= 'URL : '.$_SERVER['SCRIPT_NAME']."\n";
        if(isset($_SERVER['HTTP_REFERER'])) $body .= 'REFERER : '.$_SERVER['HTTP_REFERER']."\n";
        $body .= 'USER_AGENT : '.$_SERVER['HTTP_USER_AGENT']."\n";
        $body .= 'ADDR : '.$_SERVER['REMOTE_ADDR']."\n";
        
        $this->send($body);
    }

    //登録
    public function sendBuyUser($mail){
        $this->callTemplate();//言語チェック
        $this->to = $mail;
        global $con;
        if($con->isDebug){
            $this->bcc = $this->buy_debug;
        }else{
            $this->bcc = $this->buy_real;
        }
        //$this->subject($this->mail_template->getBuySubject());
        $this->subject = $this->mail_template->getBuySubject();
        $this->send( $this->mail_template->getBuyUserBody() );
    }

    public function sendBuyAdmin($res){
        global $con;
        if($con->isDebug){
            $this->to = $this->dev_debug;
        }else{
            $this->to = $this->buy_real;
        }
        //$this->subject('popapps-buy');
        $this->subject = 'sendBuyAdmin-popapps-buy';
        $this->send($res);
    }

    //デバッグ
    public function sendDebug($string){
        global $con;
        if($con->isDebug){
            $this->mail-> to( $this->dev_debug );
        }else{
            $this->mail-> to( $this->dev_real );
        }
        
        $this->mail-> subject('デバッグ');
        $this->mail->text($string);
        $this->setFrom();
        $this->mail->send();
    }
}
?>
