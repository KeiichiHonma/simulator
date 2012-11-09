<?php
require_once('fw/parameterManager.php');
require_once('application/table.php');
class applicationParameter extends parameterManager
{
    public function setAdd($itunes_id,$itunes_url,$name,$cloudinary_images){
        $time = time();
        parent::readyAddParameter(TRUE,$time);
        $this->parameter['itunes_id'] = $itunes_id;
        $this->parameter['itunes_url'] = $itunes_url;
        $this->parameter['name'] = $name;
        $this->parameter['images'] = serialize($cloudinary_images);
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    //管理者のみ実行可能
    public function setUpdate($aid,$name,$cloudinary_images){
        parent::readyUpdateParameter($aid);
        $this->parameter['name'] = $name;
        $this->parameter['images'] = serialize($cloudinary_images);
        $this->parameter['validate'] = VALIDATE_ALLOW;
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