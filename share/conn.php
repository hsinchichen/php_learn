<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '123456';
$db_name = 'php_learn';


// 連線資料庫 mysqli_connect(伺服器主機,登入的管理員名稱,登入的使用者密碼,資料庫名稱)
$conn =  mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

if (!$conn) {
  printf('連線資料庫: %s\n', mysqli_connect_error());
  exit();
}

mysqli_set_charset($conn, 'utf8');

// 假如連線資料庫沒有成功，則顯示錯誤訊息，並結束離開PHP不執行
