<?php
//Kiểm tra xem người dùng có nhấn nút submit chưa
if (isset($_POST['btn_gui'])) {
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];

    if ($hoten == '') {
        $err['hoten'] = "bạn chưa nhập họ tên!";
    }
    if ($email == '') {
        $err['email'] = "bạn chưa nhập email";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý dữ liệu form</title>
</head>

<body>
    <form action="form.php" method="post">
        <label for="">Họ tên</label>
        <input type="text" name="hoten" value="<?= isset($hoten) ? $hoten : '' ?>">
        <span style="color: red;">
            <?= isset($err['hoten']) ? $err['hoten'] : '' ?>
        </span>

        <br>
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <span style="color: red;">
            <?= isset($err['email']) ? $err['email'] : '' ?>
        </span>
        <br>
        <button type="submit" name="btn_gui">Gửi</button>
    </form>
    <?php if (isset($hoten)) : ?>
        <h2>Họ tên: <?php echo $hoten ?></h2>
        <h2>Email: <?= $email ?></h2>
    <?php endif ?>
</body>

</html>