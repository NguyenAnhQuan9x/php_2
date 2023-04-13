<?php
      if(/* $_SERVER['REQUEST_METHOD'] == 'POST' */isset($_POST['sub'])){
        $error = [];
        $Email = $_POST['email'];
        $PassWord = $_POST['password'];
        if(empty(trim($Email))){
          $error['email'] =  "Bạn chưa nhập email";
        }
        if(empty(trim($PassWord))){
          $error['password'] =  "Bạn chưa nhập password";
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
        <form action="LayDuLieu_POST1.php" method = "POST">
          <label for="">Email</label><br>
          <input type="email" name ="email" value = "<?= isset($Email)? $Email: ''?>"><br>
          <span style = "color:red;">
            <?= (!empty($error['email']))? $error['email']: ''?>
          </span><br>
          <label for="">Password</label><br>
          <input type="password" name="password" id="" value = "<?= isset($PassWord)? $PassWord: ''?>"><br>
          <span style = "color:red;">
            <?= (!empty($error['password']))? $error['password']: ''?>
          </span><br>
          <input type="submit" name="sub" id="">
        </form>
          <?php
          if(isset($Email) && isset($PassWord)&& empty($error)):
          ?>
          <h2>Email: <?php echo $Email?></h2>
          <h2>Password: <?php echo $PassWord?></h2>
          <?php
          endif
          ?>
    </body>
</html>