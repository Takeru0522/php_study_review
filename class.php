<?php 

require_once('function.php');

// sayHello();
// isEven(99);

class Robot {
    // アクセス修飾子　/ プロパティ
    private $name;
    private $food;

    // コンストラクター
    public function __construct($name, $food) {
        echo 'インスタンスが作成されました';
        $this->name = $name;
        $this->food = $food;
    }
    public function greeting() {
        echo '僕' . $this->name . 'です。';
    }
}

$dora = new Robot('ドラえもん', 'どら焼き');
// $dora->name = 'ドラミちゃん';
$dora->greeting();

class nextRobot extends Robot {

}

$atom = new nextRobot('アトム', '電気');










?>