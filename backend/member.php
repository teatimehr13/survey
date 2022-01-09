<h3 class='text-center font-weight-bold'>會員管理</h3>
<?php
$subjects = all('users');
echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>id</th>";
echo "<th scope='col'>姓名</th>";
echo "<th scope='col'>account</th>";
echo "<th scope='col'>email</th>";
echo "<th scope='col'>刪除</th>";
echo "</tr>";
foreach ($subjects as $key => $value) {
    if (rows('users', ['id' => $value['id']]) > 0) {
        echo "<tr>";
    }
    if (isset($_SESSION['user'])) {
        
        echo "<td>{$value['id']}</td>";
        // echo "<a class='d-inline-block col-md-8' href='index.php?do=vote&id={$value['id']}'>";
        // echo $value['id'] . ". ";
        echo  "<td>{$value['name']}</td>";
        echo  "<td>{$value['account']}</td>";
        echo  "<td>{$value['email']}</td>";
        echo  "<td><a class='btn btn-danger btn-sm' href='../api/del_user.php?id={$value['id']}'>刪除</a></td>";
        // <a class='btn btn-info btn-sm' href='../api/edit_member.php?id={$value['id']}'>停權</a>
        echo "</tr>";
        echo "</thead>";
    }
}
echo "</table>";

?>