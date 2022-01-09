<?php include_once "db.php";

$users=find('users',$_GET['id']);

del('users',$_GET['id']);

to('../backend/?do=member');
?>