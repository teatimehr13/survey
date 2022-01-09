<?php include_once "api/db.php";

//使用unset()函式來移除session中的user紀錄，達到登出使用者的效果
unset($_SESSION['user']);

//使用者登出後，導向回首頁
to("index.php");
?>