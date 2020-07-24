<?php 
// 関数

function sayHello() {
    echo 'Hello';
}
// sayHello();

// isEven ６は偶数(even)、５は奇数(odd)
function isEven($num) {
    if($num % 2 == 0) {
        echo $num . 'は偶数';
    } else {
        echo $num . 'は奇数';
    }
}
// isEven(11);

?>