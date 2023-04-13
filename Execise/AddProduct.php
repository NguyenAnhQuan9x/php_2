<?php
require_once 'get_Database.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $errors = [];
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDes = $_POST['productDes'];
        $productUnit = $_POST['productUnit'];
        $productCate = $_POST['productCate'];
        $file = $_FILES['file'];
        $productImgName = $file['name'];
        $productImgSize = $file['size'];
        $productImgType = pathinfo($productImgName,PATHINFO_EXTENSION);
        $ext = ['jpg','jpeg','png'];
        $div_file = 'Ex_images/';
        if($productName == ''){
            $errors['productName'] = "Bạn chưa nhâp tên sản phẩm";
        }
        if($productPrice == ''){
            $errors['productPrice'] = "Bạn chưa nhâp giá sản phẩm";
        }
        if($productDes == ''){
            $errors['productDes'] = "Bạn chưa nhâp mô tả sản phẩm";
        }
        if($productCate ==''){
            $errors['productCate'] = "Bạn chưa chọn loại sản phẩm";
        }
        if($productUnit == ''){
            $errors['productUnit'] = "Bạn chưa nhâp số lượng sản phẩm";
        }
        if(!in_array($productImgType,$ext) || empty($file) || $productImgSize > 3000000){
            $errors['file'] = "Bạn chưa tải ảnh hoặc không đúng định dạng";
        }
        if(empty($errors)){
            move_uploaded_file($file['tmp_name'],$div_file.$productImgName);
            require_once 'Process_Data.php';
            header('location: ShowProduct.php?message = "Thêm dữ liệu thành công"');
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
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <h1>Nhập thông tin sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm</label><br>
            <input type="text" name="productName" id=""><br>
            <span><?= isset($errors['productName']) ? $errors['productName']:''?></span><br>
            <label for="">Nhập giá </label><br>
            <input type="number" min=1 step=0.1 name="productPrice" id=""><br>
            <span><?= isset($errors['productPrice']) ? $errors['productPrice']:''?></span><br>
            <label for="">Nhâp mô tả</label><br>
            <input type="text" name="productDes" id=""><br>
            <span><?= isset($errors['productDes']) ? $errors['productDes']:''?></span><br>
            <label for="">Nhập số lượng</label><br>
            <input type="number" name="productUnit" id=""><br>
            <span><?= isset($errors['productUnit']) ? $errors['productUnit']:''?></span><br>
            <label for="">Lựa chọn danh mục</label><br>
            <select name="productCate" id="">
                <?php foreach($result as $dm):?>
                <option value="<?=$dm['TenDM']?>"><?=$dm['TenDM']?></option>
                <?php endforeach ?>
            </select><br>
            <span><?= isset($errors['productCate']) ? $errors['productCate']:''?></span><br>
            <label for="">Ảnh sản phẩm</label><br>
            <input type="file" name="file" id=""><br>
            <span><?= isset($errors['file']) ? $errors['file']:''?></span><br>
            <input type="submit" name="sub" id="" value="Thêm sản phẩm">
        </form>
    </div>
</body>

</html>