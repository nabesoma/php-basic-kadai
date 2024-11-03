<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP基礎編</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];

    // 昇順にソート
    echo '昇順にソートします<br>';
    sort($nums);
    foreach($nums as $num){
      echo $num.'<br>';
    };

    // 降順にソート
    echo '降順にソートします<br>';
    rsort($nums);
    foreach($nums as $num){
      echo $num.'<br>';
    };

    ?>

  </body>
</html>