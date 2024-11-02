<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP 課題11</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>
      <?php
      // 商品の情報
      $products=['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];
      //連想配列から情報を取り出し出力する 
      foreach($products as $key => $value){
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>
