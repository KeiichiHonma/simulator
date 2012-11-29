<?php
require_once('fw/parameterManager.php');
require_once('simulator/table.php');
class simulatorParameter extends parameterManager
{
    public function setAdd($uid,$aid,$mobile_images,$console_images,$direction,$licence){
        parent::readyAddParameter(TRUE,time());
        $this->parameter['uid'] = $uid;
        $this->parameter['aid'] = $aid;
        $this->setParameter();
        $this->parameter['direction'] = $direction;
        $this->parameter['mobile_images'] = is_null($mobile_images) ? null : serialize($mobile_images);
        $this->parameter['console_images'] = is_null($console_images) ? null : serialize($console_images);
        $this->parameter['licence'] = $licence;
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    public function setUpdate($sid,$direction,$mobile_images,$console_images){
        parent::readyUpdateParameter($sid);
        $this->setParameter();
        $this->parameter['direction'] = $direction;
        if($mobile_images !== false && $console_images !== false ){
            $this->parameter['mobile_images'] = serialize($mobile_images);
            $this->parameter['console_images'] = serialize($console_images);
        }
    }

    public function setImagesUpdate($sid,$mobile_images,$console_images){
        parent::readyUpdateParameter($sid);
        $this->parameter['mobile_images'] = serialize($mobile_images);
        $this->parameter['console_images'] = serialize($console_images);
    }

    public function setPaymentUpdate($sid,$mobile_images,$console_images){
        parent::readyUpdateParameter($sid);
        $this->parameter['mobile_images'] = serialize($mobile_images);
        $this->parameter['console_images'] = serialize($console_images);
        $this->parameter['licence'] = LICENCE_BASIC;
    }

    public function setLicenceUpdate($licence){
        parent::readyUpdateSpecialParameter();
        $this->parameter['licence'] = $licence;
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