<?php
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo "<pre>";
        print_r($_GET);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "get">
        <label for="">Nhập họ tên</label><br>
        <input type="text" name="name" id=""><br>
        <label for="">Nhập Email</label><br>
        <input type="text" name="email" id=""><br>
        <input type="submit" id="">
    </form>
</body>
</html>