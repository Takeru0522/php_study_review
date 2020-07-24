<?php 

echo 'Hello';

echo 10 / 2;
echo 100 % 3;

// if
$num = 10;
if($num == 10) {
    echo 'numは10';
} elseif($num == 0) {
    echo 'numは0';
} else {
    echo '不明です';
}
// '10' == 10 // true
// '10' === 10 // false

echo '<br>';

// for(初期値; 条件式; 変化式)
for($i = 0; $i <= 10; $i++) {
    echo $i . '<br>';
}

// 配列（array）
$artists = array('TWICE', '嵐', '髭男', 'ONE OK ROCK');

var_dump($artists);
echo $artists[3];
echo '<br>';

// 配列の繰り返し文（foreach）
foreach($artists as $artist) {
    echo $artist . '<br>';
}

// 連想配列 / key => value
$user = array(
    'name' => 'Takeru',
    'email' => 'takeru@gmail.com'
);
echo $user['name']; // Takeru

echo '<br>';
// 連想配列の繰り返し文
foreach($user as $key => $value) {
    // echo $key;
    // echo $value;
    // echo $key . '：' . $value . '<br>';
    echo "${key}：${value}<br>";
}
// 配列の中に連想配列　

// $tasks = [ [連想配列], [連想配列] ];
$tasks = [
    [
        'id' => 1,
        'title' => '宿題',
        'content' => 'プログラミング'
    ],
    [
        'id' => 2,
        'title' => '子育て',
        'content' => 'お風呂'
    ]
];
echo '<br>';
var_dump($tasks[0]);
echo '<br>';
var_dump($tasks);
echo '<br>';

foreach($tasks as $task) {
    echo $task['title'] . '<br>';
    echo $task['content'] . '<br>';
}








?>