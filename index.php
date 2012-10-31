<?php
require_once('fw/prepend.php');

$user = auth($facebook);
$access_token = $facebook->getAccessToken();


//FQL
$facebook->is_multiquery = true;
$result = $facebook->api
(
    array
    (
        'method'=>'fql.multiquery',
        'queries'=>array
        (
            'q1' =>'select '.$con->permissions_comma.' from permissions where uid = me()',
            'q2' =>'SELECT flid, name FROM friendlist WHERE owner = me() ORDER BY flid DESC'
        ),
        'access_token'=>$access_token
    )
);

$con->checkPermissions($result[0]['fql_result_set']);
$friendlist = $result[1]['fql_result_set'];
//ありえない
if( count($friendlist) == 0 ){
    require_once('fw/errorManager.php');
    errorManager::throwError(E_CMMN_PERMISSIONS_ERROR);
}
$con->t->assign('friendlist',$friendlist);

//seo
$con->t->assign('h1','index');

$con->append();
?>
