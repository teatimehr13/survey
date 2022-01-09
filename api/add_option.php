<?php include_once "db.php";?>
<?php
//接收由URL傳過來的題目id值
$id=$_GET['id'];

//執行新增空白選項紀錄，並紀錄此選項為主題$id的選項
insert('options',['opt'=>"",'topic_id'=>$id]);

//新增空白選項紀錄完成後，導回管理問卷頁面，帶上主題的id才能在顯示時顯示原本的問題
to("../backend/?do=edit_subject&id=$id");
?>









