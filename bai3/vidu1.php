<?php
//Tạo hàm
function message()
{
    echo "Hello world.";
}

//Gọi hàm
message();

//Tạo hàm có giá trị trả về
function tinhtong($a, $b)
{
    return $a + $b;
}

//gọi hàm
$tong = tinhtong(10, 5);
echo "<br>tổng = $tong";

$a = 10;
$b = 12;
//Biến toàn cục
function tinhtong2()
{
    global $a, $b;
    return $a + $b;
}
echo "<br>Tổng 2 = " . tinhtong2();

//Hàm có tham số có giá trị mặc định
function message2($name, $email = 'ngocbq3@fe.edu.vn')
{
    echo "<br>Tên: $name ";
    echo "<br>Email: $email";
}

//Sử dụng
message2('Nguyễn Văn Nam', 'namnv@fe.edu.vn');
message2('bùi quang ngọc');

//Hàm tự nhận tham số không biết trước
function view()
{
    //Lấy các tham số của hàm
    $arr = func_get_args();
    foreach ($arr as $a) {
        echo $a . "<br>";
    }
}
//Gọi hàm
echo "<pre>";
view(12, 32, 'ngocbq', 32, '15', 'product');

//Cách 2
function view2(...$pre)
{
    foreach ($pre as $p) {
        echo "$p<br>";
    }
}
view2(12, 32, 'ngocbq', 32, '15', 'product');
