<?php
require 'facebook-facebook-php-sdk/src/facebook.php';
class apiManager
{
    //facebook
    private $appId;
    private $secret;
    public  $facebook;
    public  $queries = array();
    public  $fql;
    public  $andArray = array();

    //permissions facebook側からの戻り値と合わせるため形が特殊
    public $permissions = array
    (
        array
        (
            'publish_stream'=>'1',
            'email'=>'1'
        )
    );
    public $permissions_comma = '';

    //fql number
    public $fql_number_permissions = 0;
    
    function __construct(){
        global $con;
        //app id
        if($con->isDebug){
            //テスト
            $this->appId = '125397024279857';
            $this->secret = 'a04baf149f04a22cc2731d99fcc3900d';
        }else{
            //本番
            //$this->appId = '474881109223560';
            //$this->secret = 'ed7b39a2cbdebbe177a3601e5a94e990';
        }

        $this->facebook = new Facebook(
            array(
          'appId'  => $this->appId,
          'secret' => $this->secret,
          'cookie' => true, // enable optional cookie support
            )
        );
        //権限
        $this->permissions_comma = implode(',',array_keys($this->permissions[0]));
        
        $this->queries[$this->fql_number_permissions] = 'select '.$this->permissions_comma.' from permissions where uid = me()';
    }
    
    public function setMulti($index = FALSE){
        $this->facebook->is_multiquery = TRUE;
        if($index !== FALSE) $this->facebook->api_setting = $index;
    }

    public function doFQL($method = null){
        $this->fql = $this->facebook->api
        (
            array
            (
                'method'=>'fql.multiquery',
                'queries'=>$this->queries,
                'access_token'=>$this->facebook->getAccessToken()
            )
        );
        
        //facebook権限チェック
        $this->checkPermissions($this->fql[$this->fql_number_permissions]['fql_result_set']);
    }

    public function checkPermissions($fql_permissions){
        $result_array = array_intersect_assoc($this->permissions[0], $fql_permissions[0]);
        if( count($this->permissions[0]) != count($result_array) ){
            require_once('fw/errorManager.php');
            errorManager::throwError(E_CMMN_PERMISSIONS_ERROR);
        }
    }
    
    protected function getQueriesNumber(){
        $count = count($this->queries);
        return $count;
    }
    
    protected function getResult($number){
        return isset($this->fql[$number]['fql_result_set']) ? $this->fql[$number]['fql_result_set'] : FALSE;
    }
}
?>
