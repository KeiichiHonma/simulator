<?php
require_once('fw/parameterManager.php');
require_once('image/table.php');
class imageParameter extends parameterManager
{
    public function setAdd($aid,$uid,$cloudinary){
        parent::readyAddParameter(TRUE,time());
        $this->parameter['aid'] = $aid;
        $this->parameter['uid'] = $uid;
        $this->parameter['public_id'] = $cloudinary['public_id'];
        $this->parameter['width'] = $cloudinary['width'];
        $this->parameter['height'] = $cloudinary['width'];
        $this->parameter['format'] = $cloudinary['format'];
        $this->parameter['resource_type'] = $cloudinary['resource_type'];
        $this->parameter['url'] = $cloudinary['url'];
        $this->parameter['secure_url'] = $cloudinary['secure_url'];
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

    public function setDelete(){
        parent::readyDeleteParameter($image_auth->uid);
    }

    public function setParameter(){
        $columns = imageTable::getInput();//特殊な形できます
        foreach($columns as $column){
            $this->parameter[$column] = $_POST[$column];
        }
    }
}
?>