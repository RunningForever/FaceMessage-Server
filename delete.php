<?php
require "medoo.php";
$content = $_POST['content'];
$person_rec = $_POST['person_rec'];
mysql_query("set names gb2312");   
$data = new medoo();
$data -> delete("face_message",[
    "AND" =>[
        "content" =>$content,
        "person_rec" =>$person_rec
        ]
]);
?>