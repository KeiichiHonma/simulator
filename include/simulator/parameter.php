<?php
require_once('fw/parameterManager.php');
require_once('simulator/table.php');
class simulatorParameter extends parameterManager
{
    public function setAdd($uid,$aid){
        parent::readyAddParameter(TRUE,time());
        $this->parameter['uid'] = $uid;
        $this->parameter['aid'] = $aid;
        $this->setParameter();
        $this->parameter['images'] = null;
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    public function setUpdate($sid){
        parent::readyUpdateParameter($sid);
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

    public function setImagesUpdate($sid,$images){
        parent::readyUpdateParameter($sid);
        $this->parameter['images'] = serialize($images);
    }


    public function setDelete(){
        parent::readyDeleteParameter($simulator_auth->uid);
    }

    public function setParameter(){
        $columns = simulatorTable::getInput();//特殊な形できます
        foreach($columns as $column){
            $this->parameter[$column] = $_POST[$column];
        }
    }
}
?>