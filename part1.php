<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php基本變數運算&function操作</title>
</head>

<body>
  <!-- PHP 變數 -->
  <?php
  $money = 1000;
  $str = '元';

  // 連結符號  . (單引號為主 )
  echo '1.$money . $str'; //單引號不會變別 變數
  echo '<br> 2.' . $money . $str;
  echo "<br> 3.$money$str"; //雙引號會辨別 變數
  echo "<br> 4.$money 元";
  echo "<br> 5.$money元"; //此案例變數名被判別為(money元)


  echo '<hr>';

  $num = 1000;

  function run()
  {
    global $num;
    $num *= 20;
    echo '工作20天，薪資=' . $num;
  }

  run();

  echo '<hr>';

  function run2($name, $salary, $day)
  {
    // 引入 1.姓名  2.日薪 3.天數 => 得出月薪 
    echo $name . '他的月薪是' . $salary * $day . '元' . '<br>';
  }

  run2('jack', 1500, 22);
  run2('amy', 1000, 22);
  run2('boy', 800, 22);

  ?>
</body>

</html>