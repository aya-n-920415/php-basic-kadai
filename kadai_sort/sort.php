<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          function sortSyozyun($array) {
          sort($array);
  
          echo "昇順にソートします。";
          echo "<br>";
  
          foreach ($array as $value) {
             echo $value;
             echo "<br>";
          }
        }
         function sortKozyun($array) {
          rsort($array);
  
          echo "降順にソートします。";
          echo "<br>";
  
          foreach ($array as $value) {
             echo $value;
             echo "<br>";
          }
        }

        $nums = [15, 4, 18, 23, 10];

        sortSyozyun($nums);
        sortKozyun($nums);
        ?>
    </p>
</body>

</html>