<?php
require_once('facebook/apiManager.php');
class authApi  extends apiManager
{
    public function auth($path = '/',$isMost = false){
        $uid = $this->facebook->getUser();
        if (!$uid || $isMost == true) {
            $par = array(
                'scope' => $this->permissions_comma,
                //'redirect_uri' => WTCURLSSL.$path
                'redirect_uri' => SIMURL.$path
            );
            $fb_login_url = $this->facebook->getLoginUrl($par);
            header("Location: ".$fb_login_url);
            die();
            //echo "<script type='text/javascript'>top.location.href = '$fb_login_url';</script>";
            //exit();
        }
        return $uid;
    }
}
?>
