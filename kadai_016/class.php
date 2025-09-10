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
            // プロパティを定義
            public $name;
            public $price;

            // コンストラクタ
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティの値を出力するメソッド
            public function show_price()
            {
                echo $this->price;
            }
        }

        // Animalクラスを定義
        class Animal
        {
            // プロパティを定義
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

            // heightプロパティの値を出力するメソッド
            public function show_height()
            {
                echo $this->height;
            }
        }

        // Foodクラスのインスタンスを作成
        $food = new Food('potato', 250);

        // Animalクラスのインスタンスを作成
        $animal = new Animal('dog', 60, 5000);

        // インスタンスをprint_rで出力
        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";

        // Foodオブジェクトのshow_priceメソッドを呼び出し
        $food->show_price();
        echo "<br>";

        // Animalオブジェクトのshow_heightメソッドを呼び出し
        $animal->show_height();
        ?>
    </p>
</body>

</html>