<?php
require_once('fw/parameterManager.php');
require_once('application/table.php');
class applicationParameter extends parameterManager

    public function setAdd($itunes_id,$itunes_url,$name){
        $time = time();
        parent::readyAddParameter(TRUE,$time);
        $this->parameter['itunes_id'] = $itunes_id;
        $this->parameter['itunes_url'] = $itunes_url;
        $this->parameter['name'] = $name;
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    //管理者のみ実行可能
    public function setUpdate($uid){
        parent::readyUpdateParameter($uid);
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
        parent::readyDeleteParameter($application_auth->uid);
    }

    public function setLastLoginParameter(){
        $this->parameter['last_login'] = time();
    }
}
?>