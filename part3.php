<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>switch</title>
</head>

<body>
  <?php
  date_default_timezone_set('Asia/Taipei');
  echo date('Y-m-d w H:i:s') . '<br>';
  echo date('Y-m-d D H:i:s') . '<br>';
  echo date('Y-m-d l H:i:s') . '<br>';
  echo date('Y-m-d a H:i:s') . '<br>';

  $now = date('Y-m-d w H:i:s');
  $week =  date('w');
  $week_str = '星期';
  switch ($week) {
    case 0:
      $week_str .= '日';
      break;
    case 1:
      $week_str .= '一';
      break;
    case 2:
      $week_str .= '二';
      break;
    case 3:
      $week_str .= '三';
      break;
    case 4:
      $week_str .= '四';
      break;
    case 5:
      $week_str .= '五';
      break;
    case 6:
      $week_str .= '六';
      break;
  }

  echo '現在是' . $now . $week_str;
  ?>
</body>

</html>