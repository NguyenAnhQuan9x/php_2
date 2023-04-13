<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "<pre>";
        print_r( $_POST['list']);
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
    <form action="" method = "POST">
        <select name="list[]" size = "3" id="">
            <option value="vn">VietNam</option>
            <option value="cn">China</option>
            <option value="jp">Japan</option>
            <option value = "us">United</option>
        </select>
        <button>Gửi</button>
    </form>
</body>
</html>