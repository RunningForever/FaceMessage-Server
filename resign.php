<?php
require "medoo.php";
$username = $_POST['username'];
$password = $_POST['password'];
$person_name = $_POST['person_name'];
$data = new medoo();
mysql_query("set names gb2312");   
/*
face_user 是存放用户信息的表
*/
$has = $data ->has("face_user",[    
 "username" =>$username
 ]);
 if($has){
     print(json_encode(0));
     }else{
      $data ->insert("face_user",[
           'username' =>$username,
           'person_name' =>$username,
           'password' =>$password
      ]);
      print(json_encode(1));
         }
?>