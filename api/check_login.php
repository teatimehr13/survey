<?php include_once "db.php";

//先檢查是否有錯誤訊息遺留，有則刪除
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}

//使用rows自訂函式來計算資料表中是否有符合帳號密碼的資料
//有則表示帳密正確，無則表示帳密有錯
if(rows('users',$_POST)>0){

    //帳密正確時，在session中紀錄登入者帳號，以利其他用途
    $_SESSION['user']=$_POST['account'];

    //登入檢查完成，將頁面導回首頁
    to("../index.php");
}else{

    //帳密錯誤時，在session中紀錄錯誤訊息
    $_SESSION['error']="帳號或密碼錯誤";

    //帳密錯誤時，將頁面導回登入頁
    to("../index.php?do=login");
    
}

?>



