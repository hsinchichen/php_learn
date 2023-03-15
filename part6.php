<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>陣列案例</title>
</head>

<body>
  <?php

  $result = [];
  for ($i = 1; $i <= 10; $i++) {
    $num = rand(1, 10);
    echo '抽到' . $num . '、';

    if (!in_array($num, $result)) {
      array_push($result, $num);
    } else {
      $i--;
    }
  }
  echo '<hr>';
  print_r($result);
  echo '<hr>';

  asort($result);

  print_r($result);

  echo '<hr>';

  $new_result = [];

  foreach ($result as $key => $value) {
    array_push($new_result, $value);
  }
  print_r($new_result);

  ?>
</body>

</html>