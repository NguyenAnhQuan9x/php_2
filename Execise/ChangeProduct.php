<?php
require_once 'get_Database.php';
require_once 'Connect_Database.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = [];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDes = $_POST['productDes'];
        $productUnit = $_POST['productUnit'];
        $productCate = $_POST['productCate'];
        $file = $_FILES['file'];
        $productImgName = $_POST['file'];
        $productImgSize = $file['size'];
        $productImgType = pathinfo($productImgName,PATHINFO_EXTENSION);
        $ext = ['jpg','jpeg','png'];
        $div_file = 'Ex_images/';
            move_uploaded_file($file['tmp_name'],$div_file.$productImgName);
            $masp = $_GET['id'];
    $sql = "UPDATE productinfor SET name = '$productName',price=$productPrice,description = '$productDes',
    Cate = '$productCate',Unit=$productUnit,anhSp = '$productImgName' WHERE id = $masp";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location: ShowProduct.php');
    }
    $masp = $_GET['id'];
    $sql = "SELECT * FROM productinfor WHERE id=$masp";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sanpham =$stmt->fetch(PDO::FETCH_ASSOC);
    //Update Data
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <form action="ChangeProduct.php?id=<?= $sanpham['id']?>" method="POST" enctype="multipart/form-data">
            <input type="text" name="productName" value="<?=$sanpham['name']?>" id=""><br>
            <input type="number" min=1 step=0.1 name="productPrice" id="" value="<?=$sanpham['price']?>"><br>
            <input type="text" name="productDes" id="" value="<?=$sanpham['description']?>"><br>
            <input type="number" name="productUnit" id="" value="<?=$sanpham['Unit']?>"><br>
            <select name="productCate" id="">
                <?php foreach($result as $dm):?>
                <?php if($dm['TenDM'] == $sanpham['Cate']):?>
                    <option value="<?=$dm['TenDM']?>" selected><?=$dm['TenDM']?></option>
                    <?php else: ?>
                    <option value="<?=$dm['TenDM']?>"><?=$dm['TenDM']?></option>
                    <?php endif?>
                <?php endforeach ?>
            </select><br>
            <input type="file" name="file" id=""><br>
            <img src="Ex_images/<?=$sanpham['anhSp']?>" alt="">
            <input type="hidden" name="file" id="" value="<?= $sanpham['anhSp']?>"><br>
            <input type="submit" name="sub" id="" value="Thêm sản phẩm">
        </form>
    </div>
</body>

</html>