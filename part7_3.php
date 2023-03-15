<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .login-info {
    float: right;
    padding: 20px;
    font-size: 20px;
    color: red;
  }

  nav {
    margin-bottom: 30px;
  }

  nav a {
    display: inline-block;
    padding: 5px 20px;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    background-color: lightyellow;
    border: 2px solid #000;
    color: #000;
  }

  nav a:hover {
    background-color: #ffff8a;
  }

  nav a.active {
    background-color: #164e1a;
    border: 2px solid #000;
    color: yellow;
  }

  h2 {
    background-color: #c1edff;
  }

  form {
    margin-left: 50px
  }
</style>

<body>
  <div class="login-info">
    <?php

    if (!empty($_SESSION['login_name'])) {
      echo '歡迎' . $_SESSION['login_name'] . '登入';
    }

    ?>
  </div>
  <nav>
    <a href="part7_1.php">第一頁 表單</a>
    <a href="part7_2.php" class="active">第二頁 結果</a>
    <a href="part7_3.php">第三頁 其他</a>
  </nav>


  <?php

  if (!empty($_GET['a'])) {
    $tname = $_GET['a'];
    $tlove = $_GET['b'];

    echo $tname . '說，他喜歡' . $tlove;
  }

  echo "<hr>";

  ?>


</body>

</html>