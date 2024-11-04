<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP基礎編</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
  
    function sort_2way($array,$order){
      
      if($order==='昇順'){
        // 昇順にソート
        sort($array);
      }else{
        // 降順にソート
        rsort($array);
      }
      return $array;

    }

    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];

    // 昇順にソート
    echo '昇順にソートします<br>';
    $sorted_nums_asc=sort_2way($nums,'昇順');
    foreach($sorted_nums_asc as $num){
      echo $num.'<br>';
    };

    // 降順にソート
    echo '降順にソートします<br>';
    $sorted_nums_desc=sort_2way($nums,'降順');
    foreach($sorted_nums_desc as $num){
      echo $num.'<br>';
    };

    ?>

  </body>
</html>