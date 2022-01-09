<?php

//判斷是否有任何的錯誤訊息存在，有則顯示
if (isset($_SESSION['error'])) {
    echo "<div class='text-center'>";
    echo "<span class='text-danger mt-3'>" . $_SESSION['error'] . "</span>";
    echo "</div>";
}

?>
  <nav>
    <div class="nav nav-tabs justify-content-center mt-3" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">會員登入</a>
        <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">後台登入</a> -->
    </div>
</nav>


<div class="tab-content d-flex justify-content-center" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <form action="./api/check_login.php" method="post">

            <table id="loginForm" class='table m-auto w-auto'>
                <tr>
                    <td>帳號：</td>
                    <td><input type="text" name="account" required></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="登入">
                        <input type="reset" class="btn btn-secondary" value="重罝">
                    </td>

                </tr>
            </table>
        </form>


    </div>

    <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <form action="./api/check_be_login.php" method="post">
            <table id="loginForm" class='table m-auto w-auto'>
                <tr>
                    <td>帳號：</td>
                    <td><input type="text" name="account"></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-primary" value="登入">
                        <input type="reset" class="btn btn-secondary" value="重罝">
                    </td>

                </tr>
            </table>
        </form>
    </div> -->
</div>