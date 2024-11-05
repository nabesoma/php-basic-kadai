<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>PHP 課題16</title>
    <meta charset="utf-8">
  </head>
  <body>

    <?php
    class Food{
      // プロパティを定義する
      private $name;
      private $price;
      // メソッドを定義する
      public function show_price(){
        echo $this->price.'<br>';
      }
      // コンストラクターを定義する
      public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
      }
    }

    class Animal{
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;
      // メソッドを定義する
      public function show_height(){
        echo $this->height.'<br>';
      }
      // コンストラクターを定義する
      public function __construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化する
    $pizza=new Food('ピザ',2000);
    // インスタンス化する
    $lion=new Animal('ライオン',150,250);

    // インスタンス$Foodの各プロパティの値を出力する
    print_r($pizza);
    echo '<br>';
    // インスタンス$Animalの各プロパティの値を出力する
    print_r($lion);
    echo '<br>';

    // メソッドにアクセスして実行する
    $pizza->show_price();
    // メソッドにアクセスして実行する
    $lion->show_height();
    ?>

  </body>
</html>