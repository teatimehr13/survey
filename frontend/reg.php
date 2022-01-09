<!-- <h2 class="text-center font-weight-bold">註冊會員</h2> -->
<form action="./api/reg.php" method="post" id="regForm">
    <table class='table m-auto w-auto'>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="account" required></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>電子郵件：</td>
            <td><input type="text" name="email" required ></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>生日：</td>
            <td><input type="date" name="birthday" required></td>
        </tr>
        <tr>
            <td>性別：</td>
            <td><input type="text" name="gender" required></td>
        </tr>
    </table>
    <div class='text-center'><input type="submit" class="btn btn-secondary" value="確認送出"> </div>
</form>