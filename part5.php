<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>陣列</title>
</head>

<body>
  <?php
  $name_a = [];

  $name_b = [
    'amy' => 'word',
    'jack' => 'excel'
  ];

  echo $name_b['jack'];

  echo '<hr>';


  // 索引式陣列
  $array1 = array('000', 123, 456);
  echo '<span>設定陣列變數</span>';
  print_r($array1);

  echo '<hr>';

  // 陣列排列最後，新增一組值 array_push(陣列名稱,添加的值)
  array_push($array1, 400);
  print_r($array1);

  echo '<hr>';

  // 在陣列中指定新的索引號碼位置存入值，會排列至最後
  $array1[8] = 500;
  echo '<br><span>指定新的索引號碼[8]存入值，排列至最後</span>';
  print_r($array1);

  echo '<hr>';

  array_push($array1, 600);
  echo '<br><span>加入新的值，排到最後</span>';
  print_r($array1);

  echo '<hr>';

  // 陣列中指定的索引號碼存入值，將會取代原本的值
  $array1[2] = 222;
  print_r($array1);

  echo '<hr>';

  // 關聯式陣列

  $array2 = array(
    'name' => 'hsinchi',
    'age' => '24',
    'sex' => 'boy'
  );
  echo '設定陣列變數';
  print_r($array2);

  echo '<hr>';

  // 陣列指定標籤存入值，會排列至最後

  $array2['job'] = 'SEO';
  echo '陣列指定標籤存入值，會排列至最後';
  print_r($array2);
  echo '<hr>';

  // 依內容值遞增排序 asort(陣列名稱)
  asort($array2);
  print_r($array2);
  echo '<hr>';

  // 依內容值遞減排序 arsort(陣列名稱) 
  arsort($array2);
  print_r($array2);
  echo '<hr>';

  // 依標籤名稱遞增排序 ksort(陣列名稱)
  ksort($array2);
  print_r($array2);
  echo '<hr>';

  // 依標籤名稱遞減排序 krsort(陣列名稱)
  krsort($array2);
  print_r($array2);
  echo '<hr>';

  // 星期幾
  date_default_timezone_set("Asia/Taipei");
  $week = date('w');
  echo '今天星期' . $week;
  $week_array = ['日', '一', '二', '三', '四', '五', '六'];
  print_r($week_array);
  echo '<br>';
  echo '今天星期' . $week_array[$week];
  echo '<hr>';


  // foreach

  $result = '$name_b裡面有 :  ';
  $key = 0;

  foreach ($name_b as $label => $value) {
    if ($key == 0) {
      $result .= $label . '櫃子有' . $value;
    } else {
      $result .= '、' . $label . '櫃子' . $value;
    }

    $key++;

    echo '<br>';
  }

  echo $result . '。';

  ?>
</body>

</html>