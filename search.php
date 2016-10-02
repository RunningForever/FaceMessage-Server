<?php
require "medoo.php";
$data = new medoo();
$username = $_POST['username'];
mysql_query("set names gb2312");   
/*
face_message 是存放留言信息的表
*/
$message = $data ->select("face_message",[
	         "content",
             "person_send"
	],[      
	     "person_rec" =>$username
	]);
if(sizeof($message) != 0){
	
		  for($i =0;$i<sizeof($message);$i++){
             $str[$i]= array('content'  => iconv('gb2312','UTF-8',$message[$i]['content']),'person_send' =>$message[$i]['person_send']);
		}
      print(json_encode($str));
	}else{
		print(json_encode(0));
		}
?>