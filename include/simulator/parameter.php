<?php
require_once('fw/parameterManager.php');
require_once('simulator/table.php');
class simulatorParameter extends parameterManager
{
    public function setAdd($uid,$aid,$mobile_images,$console_images,$direction){
        parent::readyAddParameter(TRUE,time());
        $this->parameter['uid'] = $uid;
        $this->parameter['aid'] = $aid;
        $this->setParameter();
        $this->parameter['direction'] = $direction;
        $this->parameter['mobile_images'] = is_null($mobile_images) ? null : serialize($mobile_images);
        $this->parameter['console_images'] = is_null($console_images) ? null : serialize($console_images);
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

    public function setImagesUpdate($sid,$mobile_images,$console_images){
        parent::readyUpdateParameter($sid);
        $this->parameter['mobile_images'] = serialize($mobile_images);
        $this->parameter['console_images'] = serialize($console_images);
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