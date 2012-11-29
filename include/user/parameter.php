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
        
        $this->parameter['title'] = '';
        $this->parameter['scroll'] = 3;
        $this->parameter['position'] = 2;//right
        
        $this->parameter['use_licence'] = 0;//最初は0
        $this->parameter['max_licence'] = 1;//最初は1
        $this->parameter['last_login'] = $time;
        $this->parameter['validate'] = VALIDATE_ALLOW;
    }

    public function setUpdate($uid){
        parent::readyUpdateParameter($uid);
        $this->setParameter();
    }

    public function setUseLicenceUpdate($uid,$use_licence){
        parent::readyUpdateParameter($uid);
        $this->parameter['use_licence'] = $use_licence;
    }
    
    public function setImagesUpdate($uid,$user_images){
        parent::readyUpdateParameter($uid);
        $this->parameter['user_images'] = serialize($user_images);
    }

    public function setUseLicenceImagesUpdate($uid,$use_licence,$user_images){
        parent::readyUpdateParameter($uid);
        $this->parameter['use_licence'] = $use_licence;
        $this->parameter['user_images'] = serialize($user_images);
    }

    public function setMaxLicenceUpdate($uid,$max_licence){
        parent::readyUpdateParameter($uid);
        $this->parameter['max_licence'] = $max_licence;
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

    public function setParameter(){
        $columns = userTable::getInput();//特殊な形できます
        foreach($columns as $column){
            $this->parameter[$column] = $_POST[$column];
        }
    }
}
?>