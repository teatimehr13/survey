<?php include_once "./api/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷系統</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>


        <body>
            <div class="container-fluid bg ss">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-white text-center d-lg-block my-5 sss">
                        <div id="headingGroup" class="">
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo "<h1>HELLO！{$_SESSION['user']}</h1>";
                            }else{
                                echo "<h1>POLLING STATION</h1>";
                            }
                            ?>
                            <h3>投票去</h3>
                            <a href="#vote" class="label"><i class="fas fa-angle-double-down fa-4x tm-down-arrow"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <nav id="mainNavbar" class="navbar navbar-dark navbar-expand-md py-0 fixed-top">
                <a href="./index.php" class="navbar-brand bs">POLLING STATION</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navLinks">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['user'])) {
                                echo "<span class='pr-5 text-white'>歡迎！{$_SESSION['user']}</span>";
                            ?>


                        </li>
                        <li class="nav-item">
                            <a class="text-white touch pr-3" href="./backend/index.php">進入後台</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white touch" href="logout.php">登出</a>
                        <?php
                            } else {

                        ?>
                            <!-- <a class="text-white" href="?do=login">登入</a> -->
                            <!-- Button to Open the Modal -->
                            <a class="text-white touch pr-3" data-toggle="modal" data-target="#myModal">
                                登入
                            </a>
                            <a class="text-white touch" data-toggle="modal" data-target="#myModa2">註冊新會員</a>

                            <!-- The Modal -->
                        <?php
                            }
                        ?>
                        </li>
                        <!-- <li class="nav-item">
                    <a href="" class="nav-link">TICKETS</a>
                </li> -->
                    </ul>
                </div>
            </nav>
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog1">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="modal-title font-weight-bold">登入</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <?php include('./frontend/login.php') ?>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="myModa2">
                <div class="modal-dialog mt-5">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h2 class="modal-title font-weight-bold">註冊會員</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <?php include('./frontend/reg.php') ?>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- <nav class='bg-light shadow py-3 px-2 d-flex justify-content-between mb-4'> -->
            <nav class='d-flex mx-3 justify-content-center'>
                <div>&nbsp;</div>
                <?php

                //判斷是否有任何的錯誤訊息存在，有則顯示
                if (isset($_SESSION['error'])) {
                    // echo "<span class='text-danger mt-3'>" . $_SESSION['error'] . "</span>";
                }

                ?>
            </nav>


            <div class="container">
                <?php

                //根據網址帶的do參數內容來決定要include那一個檔案內容
                $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';

                //建立要引入的檔案路徑
                $file = "./frontend/" . $do . ".php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "./frontend/show_vote_list.php";
                }
                ?>

            </div>
            <div class="p-3 text-center text-light bg-dark d-block"> Copyright © 2021, All Rights Reserved</div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

            <!-- 當滑動時nav發時動作-->
            <script>
                $(function() {
                    $(document).scroll(function() {
                        var $nav = $("#mainNavbar");
                        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
                    });
                });
            </script>

        </body>

</html>