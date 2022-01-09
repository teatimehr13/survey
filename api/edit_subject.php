<?php
include_once "db.php";

/**
 * 資料表的欄位名稱=>資料內容
 */

 //依據表單傳過來的topic欄位取得問卷主題資料
$topic=$_POST['topic'];

//依據表單傳過來的topic_id欄位取得問卷id資料
$topic_id=$_POST['topic_id'];

//使用update自訂函式來更新問卷主題內容
update('topics',['topic'=>$topic],['id'=>$topic_id]);

//依據表單傳過來的選項內容，取得選項內容，為一個陣列
$options=$_POST['options'];

//依據表單傳過來的選項id內容，取得選項id，為一個陣列
$opt_id=$_POST['opt_id'];

//使用迴圈對選項內容進行遍歷
foreach ($options as $key => $opt) {
    //判斷選項是否有內容，有則更新，無則刪除
    if($opt!=""){
        update('options',['opt'=>$opt],['id'=>$opt_id[$key]]);
    }else{
        del('options',$opt_id[$key]);
    }
}

//完成問卷和選項更新，導向回後台首頁
to("../backend/index.php")

?>