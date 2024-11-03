<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP基礎編</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
  
    function sort_2way($order){

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10 ];
      
      if($order==='昇順'){
        // 昇順にソート
        echo '昇順にソートします<br>';
        sort($nums);
        foreach($nums as $num){
          echo $num.'<br>';
        };
      }else{
        // 降順にソート
        echo '降順にソートします<br>';
        rsort($nums);
        foreach($nums as $num){
          echo $num.'<br>';
        };
      }
    }

    sort_2way('昇順');
    sort_2way('降順');
    ?>

  </body>
</html>