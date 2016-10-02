<?php
require "medoo.php";
$content = $_POST['content'];
$person_rec = $_POST['person_rec'];
mysql_query("set names gb2312");   
$data = new medoo();
/*
face_message 是存放留言信息的表
*/
$data -> delete("face_message",[
    "AND" =>[
        "content" =>$content,
        "person_rec" =>$person_rec
        ]
]);
?>