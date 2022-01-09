<?php include_once "db.php";

//取得URL傳送過來的圖片id
$id=$_GET['id'];

//從資料庫中取得指定$id的圖片紀錄
$img=find('ad',$id);

//將紀錄中的顯示欄位(sh)值進行切換，在1(顯示),0(不顯示)之間切換
//因為只在1和0間切換所以使用計算方式來完成，如果切換的條件較複雜
//可以改用if..else或是switch...case
$img['sh']=($img['sh']+1)%2;

//將更新完的資料帶入update函式，完成更新
update('ad',['sh'=>$img['sh']],['id'=>$img['id']]);

//資料表更新完成，將頁面導向原本的廣告管理頁面
to("../backend/?do=ad");

?>