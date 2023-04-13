<?php
    //Thiết lập múi giờ
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    //time()
    echo time()."<br>";
    //date()
    $date = date("Y-m-d H:i:s", time());
    echo $date ."<br>";
    //Hàm empty()
    $a = '';
    if(empty($a)){
        echo "a không có giá trị";
    }else{
        echo "a có tồn tại giá trị";
    }
    //Xóa biến sử dụng unset()
    $a = "Hello";
    unset($a);
    echo $a;
    $d = 9;
    ?>