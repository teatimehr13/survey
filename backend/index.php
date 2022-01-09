<?php include_once "../api/db.php";

if (!isset($_SESSION['user'])) {
  to("../index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="../css/style.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    
  </style>
</head>

<body>

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
          <!-- <a class="text-white touch pr-3" href="../index_be.php">進入前台</a> -->
          <!-- Default dropleft button -->

          <div class="btn-group">
            <button type="button" class="dropdown-toggle btn-outline" data-toggle="dropdown" data-display="static" aria-expanded="false">
              管理中心
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="?do=show_vote_list">問卷管理</a></button>
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="?do=member">會員管理</a></button>
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="?do=ad">廣告管理</a></button>
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="?do=photo">題目圖片管理</a></button>
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="../index.php">進入前台</a></button>
              <button class="dropdown-item" type="button"><a class="text-dark touch" href="../logout.php">登出</a></button>
            </div>
          </div>


        </li>
        <li class="nav-item">
          <!-- <a class="text-white touch" href="../logout.php">登出</a> -->

        <?php
          } else {

        ?>

          <a class="text-white touch pr-3" data-toggle="modal" data-target="#myModal">
            登入
          </a>
          <a class="text-white touch" data-toggle="modal" data-target="#myModa2">註冊新會員</a>

          <!-- The Modal -->
        <?php
          }
        ?>
        </li>

      </ul>
    </div>
  </nav>


  <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:400px">
    <a href="index.php">
      <div id="carouselExampleSlidesOnly" class="carousel slide  position-relative" data-ride="carousel">
        <div class="carousel-inner position-absolute">
          <?php
          $images = all('ad', ['sh' => 1]);

          foreach ($images as $key => $image) {
            if ($key == 0) {
              echo "<div class='carousel-item active'>";
            } else {
              echo "<div class='carousel-item'>";
            }

            echo "  <img class='d-block w-100' style='height:100vh ;' src='../image/{$image['name']}' alt='{$image['intro']}'>";
            echo "</div>";
          }


          ?>
        </div>
      </div>
    </a>
  </div>


  <div class="container mt-5">
    <?php

    $do = (isset($_GET['do'])) ? $_GET['do'] : 'manage_vote';
    $file = $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "manage_vote.php";
    }
    ?>
  </div>
  <div class="p-3 text-center text-light bg-dark"> Copyright © 2021, All Rights Reserved</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>