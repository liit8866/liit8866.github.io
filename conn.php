<?php
 header('Content-Type: text/html; charset=gb2312'); 


$conn = mysqli_connect("127.0.0.1:8306","admin","admin@123","bszc");

if (!$conn){
die("Êý¾Ý¿âÁ´½Ó´íÎó".mysqli_connect_error());
}






$yygz=mysqli_query($conn,"set names gb2312");


?>