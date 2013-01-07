<?php
require_once('facebook/apiManager.php');
class userApi extends apiManager
{
    public $fql_number_user;
    public $fql_number_user_friend;
    public $fql_number_user_app_friend;
    
    //setter column////////////////////////////////////////////////////////////////////////////////////
    private function setUserColumn($type){
        $column = array('uid','name','pic_square','email');
        return implode(',',$column);
    }

    //指定ユーザーの友達情報
    private function setUserFriendColumn(){
        $column = array('uid','name','username','pic_square','sex','birthday_date','locale','work','education');
        return implode(',',$column);
    }

    //指定ユーザーのアプリを使っている友達情報
    private function setUserAppFriendColumn(){
        $column = array('uid','name','pic_square','birthday_date');
        return implode(',',$column);
    }
    
    //setter query////////////////////////////////////////////////////////////////////////////////////
    //指定のユーザー情報
    public function setUser($uid,$type = 'self'){
        $uid_query = '';
        if(is_array($uid)){
            $uid_query = 'uid in ('.implode(',',$uid).')';
        }else{
            $uid_query .= 'uid = '.$uid;
        }
        
            
        $this->fql_number_user = $this->getQueriesNumber();
        $this->queries[$this->fql_number_user] = 'SELECT '.$this->setUserColumn($type).' FROM user WHERE '.$uid_query;
    }
    
    //指定ユーザーの友達情報
    public function setUserFriend($uid,$sex = null){
        $this->fql_number_user_friend = $this->getQueriesNumber();
        
        $andQuery = '';
        if(!is_null($sex)){
            if($sex == 'male'){
                $this->andArray['sex'] = 'sex = \'female\'';
            }elseif ($sex == 'female'){
                $this->andArray['sex'] = 'sex = \'male\'';
            }else{
                
            }
        }
        if(count($this->andArray) > 0){
            $andQuery .= implode(' AND ',$this->andArray);
            $andQuery = ' AND '.$andQuery;
        }
        $this->queries[$this->fql_number_user_friend] = 'SELECT '.$this->setUserFriendColumn().' FROM user WHERE uid in ( SELECT uid2 FROM friend WHERE uid1 = '.$uid.' )'.$andQuery.' ORDER BY uid DESC';//全てのフレンド
    }

    //指定ユーザーのアプリを使っている友達情報
    public function setUserAppFriend($uid){
        $this->fql_number_user_app_friend = $this->getQueriesNumber();
        $this->queries[$this->fql_number_user_app_friend] = 'SELECT '.$this->setUserAppFriendColumn().' FROM user WHERE uid in ( SELECT uid2 FROM friend WHERE uid1 = '.$uid.' ) AND is_app_user = 1 ORDER BY uid DESC';//全てのフレンド
    }

    //getter////////////////////////////////////////////////////////////////////////////////////
    //指定のユーザー情報
    public function getUser(){
        return $this->getResult($this->fql_number_user);
    }
    
    //指定ユーザーの友達情報
    public function getUserFriend(){
        return $this->getResult($this->fql_number_user_friend);
    }
    
    //指定ユーザーのアプリを使っている友達情報
    public function getUserAppFriend(){
        return $this->getResult($this->fql_number_user_app_friend);
    }
}
?>
