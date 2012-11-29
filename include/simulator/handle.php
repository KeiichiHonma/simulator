<?php
require_once('fw/handleManager.php');
require_once('simulator/parameter.php');
class simulatorHandle extends handleManager
{
    public $parameter;
    
    function __construct(){
        $this->parameter = new simulatorParameter();
    }
    
    public function addRow($uid,$aid,$mobile_images = null,$console_images = null,$direction = DIRECTION_VERTICAL,$licence = LICENCE_FREE){
        $this->parameter->setAdd($uid,$aid,$mobile_images,$console_images,$direction,$licence);
        //return parent::addDebug(T_USER,$this->parameter);
        return parent::addRow(T_SIMULATOR,$this->parameter);
    }

    public function updateRow($sid,$direction,$mobile_images,$console_images){
        $this->parameter->setUpdate($sid,$direction,$mobile_images,$console_images);
        return parent::updateRow(T_SIMULATOR,$this->parameter);
    }

    public function updateImagesRow($sid,$mobile_images,$console_images){
        $this->parameter->setImagesUpdate($sid,$mobile_images,$console_images);
        return parent::updateRow(T_SIMULATOR,$this->parameter);
    }
    
    //決済時のみ呼ばれる。free → 有料の場合で且つアプリ登録済みの場合に限り呼ばれる
    public function updatePaymentRow($sid,$mobile_images,$console_images){
        $this->parameter->setPaymentUpdate($sid,$mobile_images,$console_images);
        return parent::updateRow(T_SIMULATOR,$this->parameter);
    }

    //uidから一括更新。危険。管理系？
    public function updateLicenceRow($uid,$licence = LICENCE_BASIC){
        $this->parameter->setLicenceUpdate($licence);
        $pair = array('key'=>'col_uid','value'=>$uid);
        return parent::updateSpecialRow(T_SIMULATOR,$this->parameter,$pair);
    }

    public function deleteRow(){
        return parent::deleteRow(T_SIMULATOR,$this->parameter);
    }

}
?>
