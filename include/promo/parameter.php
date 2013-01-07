<?php
require_once('fw/parameterManager.php');
require_once('promo/table.php');
class promoParameter extends parameterManager
{
    public function setAdd(){
        $time = time();
        parent::readyAddParameter(TRUE,$time);
        $this->parameter['promo_code'] = uniqid();
        $this->setParameter();
    }

    //管理者のみ実行可能
    public function setUpdate(){
        parent::readyUpdateParameter($aid);
        $this->setParameter();
    }
    
    public function setDelete(){
        parent::readyDeleteParameter($promo_auth->uid);
    }

    public function setParameter(){
        $columns = promoTable::getInput();//特殊な形できます
        foreach($columns as $column){
            $this->parameter[$column] = $_POST[$column];
        }
    }

    private function getRand(){
        return md5(uniqid( rand(), true ) );
    }
}

class usePromoParameter extends parameterManager
{
    public function setAdd($uid,$pid){
        $time = time();
        parent::readyAddParameter(TRUE,$time);
        $this->parameter['uid'] = $uid;
        $this->parameter['pid'] = $pid;
    }
}
?>