<?php include_once "db.php";

//使用insert自訂函式，將$_POST陣列中的使用者註冊資料新增至users資料表
insert('users',$_POST);

//新增完畢導向回首頁
to("../index.php");





