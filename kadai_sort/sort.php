<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
<?php

function sort_2way($array, $order) {
  if ($order === TRUE) {
    echo "昇順にソートします。<br>";
    // 配列を直接ソート
    sort($array);
  } else {
    echo "降順にソートします。<br>";
    // 配列を直接ソート
    rsort($array);
  }
  
  // ソートされた配列のデータを1行ずつ表示する
  foreach ($array as $value) {
    echo $value . "<br>";
  }
}

$nums = [15, 4, 18, 23, 10];

sort_2way($nums, TRUE);

echo "<br>";

sort_2way($nums, FALSE);

?>
    </p>
</body>

</html>