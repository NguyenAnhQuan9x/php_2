<?php
    $array = array(1,2,3,4,5);
    echo "<pre>";
    var_dump($array);
    //Mảng nhiều chiều
    $array2 = [
        [1,2,3],
        [4,5,6]
    ];
    echo "<br>". $array2[0][0];
    //Phân 2
    //1.Mảng có key và value
    $array3 = [
        "mot"=> "Hello",
        "hai"=> "World",
        "ba"=> "My name is Quan"
    ];
    var_dump($array3);
    echo "<br>".$array3['hai'];
    //2.Khai báo hằng
    const pi = 3.14;
    define('name','Quan');
    echo "<br>".pi;
    echo "<br>".name;
    //Cách khai báo không cần phân biệt in hoa hay in thường
    define('address','HaNam',true);
    echo "<br>".address;
    //Cách khai báo hằng là một mảng
    define("firstName",['Quan','Nam','Dung']);
    echo "<pre>";
    var_dump (firstName);
    //3.Khai báo Switch ...case
    $x = 1;
    //Cách 1
    switch($x){
        case 0:
            echo "Bạn đã chọn 0";
            break;
        case 1:
            echo "Bạn đã chọn 1";
            break;
        case 2:
            echo "Bạn đã chọn 2";
            break;
        default:
        echo "Bạn không chọn case nào";
    }
    //Cách 2 : thường sử dụng nhúng trong HTML
    switch($x):
        case 0:
            echo "Bạn đã chọn 0";
            break;
        case 1:
            echo "Bạn đã chọn 1";
            break;
        case 2:
            echo "Bạn đã chọn 2";
            break;
        default:
        echo "Bạn không chọn case nào";
        endswitch;
    //4. Vòng lặp
    // Vòng lặp while
    //Cách khai báo khác
    $a = 0;
    while($a < 5):
        echo "Cách khai báo khác của  vòng lặp while $a <br>";
        $a++;
    endwhile;
    //Vòng lặp foreach
    $array4 = [
        'name'=>'Quan',
        'age' => 24,
        'address' =>'HaNam'
    ];
    foreach($array4 as $value){
        echo "<br>$value";

    }
    //Cách khai lặp foreach 2
    foreach($array4 as $value):
        echo"<br>$value";
    endforeach;
    $string = 'Quan';
?>