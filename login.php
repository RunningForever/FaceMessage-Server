<?php
require "medoo.php";
$username = $_POST['username'];
$password = $_POST['password'];
$data = new medoo();
$has = $data ->has("face_user",[    
 "username" =>$username
 ]);
 if(!$has){
     print(json_encode(0));
     }else{
         $pwd = $data ->get("face_user","password",[
                  "username" =>$username
         ]);
         if($pwd == $password){
                   print(json_encode(1));
             }else{
                 print(json_encode(2));
                 }
         }
?>