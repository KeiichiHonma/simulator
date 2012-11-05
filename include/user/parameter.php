<?php
require_once('fw/parameterManager.php');
require_once('user/table.php');
class userParameter extends parameterManager
{
    public function setAdd($fbid,$name,$mail){
        $time = time();
        parent::readyAddParameter(TRUE,$time);
        $this->parameter['fbid'] = $fbid;
        $this->parameter['name'] = $name;
        $this->parameter['mail'] = $mail;
        $this->parameter['licence'] = 0;//最初は0
        $this->parameter['last_login'] = $time;
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    public function setUpdate($uid,$licence){
        parent::readyUpdateParameter($uid);
        $this->parameter['licence'] = $licence;
        $this->parameter['status'] = $_POST['status'];
        $this->parameter['given_name'] = $_POST['given_name'];
        $this->parameter['buyer_email'] = $_POST['buyer_email'];
        $this->parameter['customer_no'] = $_POST['customer_no'];
        $this->parameter['account'] = $_POST['account'];
        $this->parameter['buyer_id'] = $_POST['buyer_id'];
        $this->parameter['trade_no'] = $_POST['trade_no'];
        $this->parameter['validate'] = $_POST['validate'];
        $this->parameter['validate_time'] = $_POST['validate_time'];
    }

    public function setLastLoginUpdate($uid){
        //認証される前のため、uid直指定
        parent::readyUpdateParameter($uid);
        $this->setLastLoginParameter();
    }

    public function setDelete(){
        parent::readyDeleteParameter($user_auth->uid);
    }

    public function setLastLoginParameter(){
        $this->parameter['last_login'] = time();
    }
}
?>