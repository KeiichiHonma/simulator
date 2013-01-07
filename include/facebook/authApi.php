<?php
require_once('facebook/apiManager.php');
class authApi extends apiManager
{
    public function auth($path = '/',$isMost = false){
        $uid = $this->facebook->getUser();
        if ($uid === 0 || !$uid || $isMost == true) {
            $page = '';
            if(isset($_GET['page'])){
                $page = '?page='.$_GET['page'];
            }
            $par = array(
                'scope' => $this->permissions_comma,
                'redirect_uri' => SIMURL.$path.$page
            );
            $fb_login_url = $this->facebook->getLoginUrl($par);
            header("Location: ".$fb_login_url);
            die();
            //echo "<script type='text/javascript'>top.location.href = '$fb_login_url';</script>";
            //exit();
        }
        return $uid;
    }

    public function logout($path = '/'){
        //$par = array(
            //'scope' => $this->permissions_comma,
            //'redirect_uri' => SIMURL.$path
        //);
        $params = array( 'next' => SIMURL.$path );
        $fb_login_url = $this->facebook->getLogoutUrl($params);
        header("Location: ".$fb_login_url);
        die();
    }
}
?>
