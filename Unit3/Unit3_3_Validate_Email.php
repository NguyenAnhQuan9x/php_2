<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Bạn nhập không đúng định dạng email";
        }
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
    <form action="" method="post">
        <label for="">Nhập email</label>
        <input type="text" name="email" id=""><br>
        <span style = "color:red;"><?= $errors['email']?? '' ?></span><br>
        <input type="submit" name="" id="" value="Xác thực email">
    </form>
</body>
</html>