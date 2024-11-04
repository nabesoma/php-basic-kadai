<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP基礎編</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php

      // ソート関数を定義する
      function sort_2way($array, $order){
        
        if($order===TRUE){
          // 昇順にソート
          echo '昇順にソートします<br>';
          sort($array);
          foreach($array as $num){
            echo $num.'<br>';
          }
        }else{
          // 降順にソート
          echo '降順にソートします<br>';
          rsort($array);
          foreach($array as $num){
            echo $num.'<br>';
          }
        }

      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10 ];

      // ソート関数を呼び出す
      echo sort_2way($nums,TRUE);
      echo sort_2way($nums,FALSE);

    ?>

  </body>
</html>
