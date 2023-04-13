<?php

//Hàm ẩn danh
$message = function ($a) {
    echo $a;
};

//gọi hàm
$message('hello world');

//Callback
function my_caller($callback)
{
    $callback();
}

//Gọi hàm
my_caller(function () {
    echo "<br>Xin chào ";
});


//Áp dụng
$arr = [1, 3, 4, 10, 5, 7, 9, 6, 8];

//Lấy ra 1 hàm có các phần tử có giá * 2
function nhan($n)
{
    return $n * 2;
}
//Sử dụng array_map
$arr2 = array_map('nhan', $arr);
echo "<pre>";
print_r($arr2);

//Lọc các số chẵn
$arr3 = array_filter($arr, function ($n) {
    return $n % 2 == 0;
});
print_r($arr3);
