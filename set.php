<?php
require "medoo.php";
$data = new medoo();
$person_send = $_POST['person_send'];
$message =$_POST['message'];
$person_rec = $_POST['person_rec'];
if(message!=""){
mysql_query("set names gb2312");     
$data ->insert("face_message",[
       "person_rec" =>$person_rec,
       "content" =>$message,
       "person_send" =>$person_send
]);
}
?>