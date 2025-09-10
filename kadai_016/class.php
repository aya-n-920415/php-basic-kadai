<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        // Foodクラスを定義
        class Food
        {
            // プロパティをpublicに定義
            public $name;
            public $price;

            // コンストラクタ
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // Animalクラスを定義
        class Animal
        {
            // プロパティをpublicに定義
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // Foodクラスのインスタンスを作成
        $food = new Food('potato', 250);

        // Animalクラスのインスタンスを作成
        $animal = new Animal('dog', 60, 5000);

        // インスタンスをprint_rで出力
        print_r($food);
        echo "<br>"; // 改行
        print_r($animal);
        echo "<br>"; // 改行
        
        // プロパティの値を出力
        echo $food->price;
        echo "<br>"; // 改行
        echo $animal->height;

        ?>
    </p>
</body>

</html>