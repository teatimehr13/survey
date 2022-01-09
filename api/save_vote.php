<?php 
include_once "db.php";

//依據投票表單傳來的選項值取得選項的id值
$opt_id=$_POST['opt'];

//使用find自訂函式取得選項資料
$opt=find("options",$opt_id);
//$opt['count']++;
//$opt['count']+=1;

//將該選項的count欄位加1
$opt['count']=$opt['count']+1;

//使用update自訂函式來更新選項紀錄
update('options',['count'=>$opt['count']],['id'=>$opt_id]);


//完成投票紀錄，導向回投票結果頁並帶上主題的id
to("../index.php?do=vote_result&id={$opt['topic_id']}");