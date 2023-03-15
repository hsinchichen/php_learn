<?php
session_start();
if (!empty($_POST['login_name'])) {
  $_SESSION['login_name'] = $_POST['login_name'];
}
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

  <h1>【負責送出資料】</h1>
  <h2>========get送出資料===========</h2>

  <form action="./part7_2.php" method="get">
    <input type="text" name="t_name" id="" require placeholder="請輸入姓名">
    <input type="text" name="t_love" id="" require placeholder="請輸入喜歡.....">
    <input type="submit" value="送出  ">
  </form>

  <h2>========POST送出資料===========</h2>

  <form action="./part7_2.php" method="post">
    <input type="text" name="t_name" id="" require placeholder="請輸入姓名">
    <input type="text" name="t_love" id="" require placeholder="請輸入喜歡.....">
    <input type="submit" value="送出  ">
  </form>


  <h2>===== 登入表單 =====</h2>

  <form name="loginForm" method="post" action="">
    <input type="text" name="login_name" required placeholder="請輸入帳號....">
    <input type="password" id="login_pwd" name="login_pwd" required placeholder="請輸入密碼....">

    <input type="button" id="showBtn" value="顯示密碼">
    <input type="reset" value="清除重填">
    <input type="submit" value="登入">
  </form>

  <link rel="stylesheet" href="test008.css">

  <script>
    let show_btn = document.querySelector('#showBtn');
    let login_pwd = document.querySelector('#login_pwd');

    show_btn.addEventListener('mousedown', function() {
      login_pwd.setAttribute('type', 'text');
    })
    show_btn.addEventListener('mouseup', function() {
      login_pwd.setAttribute('type', 'password');
    })
  </script>

</body>

</html>