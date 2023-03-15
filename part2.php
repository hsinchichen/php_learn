<!DOCTYPE html>
<html lang="TW">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if else</title>
</head>

<body>
  <?php

  // rand(起始值,終結值) 隨機取值
  $value = rand(10, 99);  

  echo '題目一:判斷數字為基數或偶數<br>';
  if ($value % 2 == 0) {
    echo '抽到' . $value . '他是個偶數';
  } else {
    echo '抽到' . $value . '他是個基數';
  }

  echo '<br>';

  echo '題目二:若抽到40~49之間的數字<br>';
  $a2 = '很抱歉尚未能抽中大獎';
  if ($value >= 40 && $value <= 49) {
    echo '抽到' . $value . '恭喜獲得大獎';
  } else {
    echo '抽到' . $value . $a2;
  }

  echo '<br>';

  echo '題目三:抽中11 22 33等 (A1)<br>';
  if ($value % 11 == 0) {
    echo '抽到' . $value . '恭喜獲得大獎';
  } else {
    echo '抽到' . $value . $a2;
  }

  echo '<br>';

  echo '題目三:抽中11 22 33等 (A2)<br>';
  $total = floor($value / 10);
  if ($total == $value - $total * 10) {
    echo '抽到' . $value . '恭喜獲得大獎';
  } else {
    echo '抽到' . $value . $a2;
  }

  echo '<br>';

  echo '題目三:抽中11 22 33等 (A3)<br>';
  if (floor($value / 10) == $value % 10) {
    echo '抽到' . $value . '恭喜獲得大獎';
  } else {
    echo '抽到' . $value . $a2;
  }

  echo '<br>';

  // 題目6: ceil() 無條進位' floor() 無條件捨去;
  $bag1 = ceil($value / 10);
  echo '總共有' . $bag1 . '袋' . '<br>';
  $bag2 = floor($value / 10);
  echo '總共有' . $bag2 . '袋';

  echo '<br>';

  // 題目5: 判斷是否3與7的倍數

  if ($value % 3 == 0 && $value % 7 == 0) {
    echo '他是3與7的倍數';
  } else if ($value % 3 == 0) {
    echo '他是3的倍數';
  } else if ($value % 7 == 0) {
    echo '他是7的倍數';
  } else {
    echo '他不是3與7的倍數';
  }


  ?>
</body>

</html>