<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>迴圈</title>
</head>

<body>
  <?php
  $total = 0;

  for ($i = 0; $i <= 100; $i++) {
    echo $i . ' + ';
    $total += $i;
  }

  echo $total;
  echo '<hr>';

  $total = 0;
  $i = 1;

  while ($i <= 100) {
    echo $i . ' + ';
    $total += $i;
    $i++;
  }
  echo $total;
  echo '<hr>';

  $total = 0;
  $i = 1;
  do {
    echo $i . ' + ';
    $total += $i;
    $i++;
  } while ($i <= 100);
  echo $total;
  echo '<hr>';

  // 1~100的奇數

  $total = 0;

  for ($i = 1; $i <= 100; $i += 2) {
    echo $i . ' + ';
    $total += $i;
  }
  echo $total;
  echo '<hr>';

  $total = 0;

  for ($i = 2; $i <= 100; $i += 2) {
    echo $i . ' + ';
    $total += $i;
  }
  echo $total;
  echo '<hr>';


  $total = 0;
  $i = 7;
  $result = '';
  $last = 1000; //停止條件
  $step = 7;

  for ($i; $i < $last; $i += $step) {
    if ($i <=  $step * 3) {
      $result .= $i . ' + ';
    }

    if ($i > $last - $step) {
      $result .= '... + ' . $i . '=';
    }

    $total += $i;
  }

  echo $result . $total;


  ?>
</body>

</html>