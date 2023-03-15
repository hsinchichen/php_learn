<?php
require_once('./share/conn.php');
include_once('./assist.php');
// 判斷是否需要新增資料
// 假如收到來自留言表單資料===>新增資料到資料庫
if (!empty($_POST['mb_name'])) {
  // 接收資料
  $mb_name = $_POST['mb_name'];
  $mb_content = $_POST['mb_content'];
  // 新增資料至資料庫

  $sql_str = "INSERT INTO md( mb_name,mb_content) 
                      VALUE ('$mb_name','$mb_content')";
  $result =  mysqli_query($conn, $sql_str);

  header('Location: mb_index.php');
}

// 查詢資料表mb所有資料
// SELECT 選擇欄位 (*代表全部)
// FROM (資料表名稱) 查詢哪個資料表
// ORDER BY 依照指定欄位排序 (ASC 由小到大 、 DESC 由大到小)

$sql_str = "SELECT * FROM md ORDER BY mb_time DESC";

$RS_mb =  mysqli_query($conn, $sql_str);

$RS_mb_result = mysqli_num_rows($RS_mb);

// print_r($RS_mb);


?>


<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    max-width: 1200px;
    margin: 20px auto;
    color: #000;
  }

  form {
    width: 700px;
    margin: 20px auto;
  }

  input,
  textarea {
    display: block;
    width: 100%;
    margin: 5px;
    font-size: 16px;
    padding: 5px;
  }

  h1 {
    text-align: center;
  }

  h2 {
    background-color: lightgray;
    padding: 5px;
    font-size: 16px;
  }

  p {
    margin: 10px;
  }

  .block {
    background-color: #afe2f7;
    margin: 20px 0;
  }
</style>

<body>

  <h1>留言牆</h1>
  <form method="post" action="mb_index.php" class="mbform">
    <input type="text" name="mb_name" maxlength="20" require placeholder="請輸入留言者姓名">
    <textarea name="mb_content" rows="5" require placeholder="請輸入留言內容"></textarea>
    <input type="submit" value="確定新增留言">
    <input type="reset" value="清除重寫">
  </form>


  <?php
  while ($row = mysqli_fetch_assoc($RS_mb)) {


  ?>

    <p>
      留言者：<?php echo $row['mb_name']; ?>
      [<?php echo $row['mb_time']; ?>]
    </p>
    <p>
      內 容：<?php echo nl2br($row['mb_content']); ?>
    </p>
    <hr>

  <?php
  }
  ?>


  <?php if ($RS_mb_result == 0) {
    echo '<hr>';
    echo '目前尚無留言';
  } ?>
</body>

</html>

<?php
mysqli_free_result($RS_mb);
mysqli_close($conn);
?>