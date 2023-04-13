<?php
   if(isset($_POST['sub'])){
    $error = [];
    if(strlen($_POST['productName']) <5){
        $error['productName'] = "Bạn chưa nhập productName hoặc nhập đúng số ký tự";
    }
    if(strlen($_POST['Description'])<5){
        $error['Description'] = "Bạn chưa nhập Description hoặc nhập đúng số ký tự";
    }
    if($_POST['Price'] == ''){
        $error['Price'] = "Bạn chưa nhập Price";
    }
    if($_POST['cate'] == ''){
        $error['cate'] = "Bạn chưa chọn Category";
    }
    if($_POST['Unit'] == ''){
        $error['Unit'] = "Bạn chưa nhập Unit";
    }
    $file = $_FILES['file'];
    $fileNameimg = $file['name'];
    $div_file = "Unit5_images/";
    move_uploaded_file($file['tmp_name'],$div_file.$fileNameimg);
    /* if(empty($error)){
        require_once'Unit5.php';
    } */
    $productName = $_POST['productName'];
    $productDes = $_POST['Description'];
    $productPrice = $_POST['Price'];
    $productUnit = $_POST['Unit'];
    $productCate = $_POST['cate'];
    require_once'Unit5.php';
    $sqlinsert = "INSERT INTO productinfor(name,price,description,Unit,Cate,anhSp)
    VALUES ('$productName',$productPrice,'$productDes','$productUnit','$productCate','$fileNameimg')";
    $conn->exec($sqlinsert);
}
require_once'Unit5.php';
    $sql = "SELECT * FROM danhmuc";
    $smt = $conn->prepare($sql);
    $smt->execute();
    $result = $smt->fetchAll(PDO::FETCH_ASSOC);
/*     echo "<pre>";
    print_r($result); */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input,select{
            border: 1px solid blue;
            width: 30%;
            height:30px;
        }
        input[type="file"]{
            border:none;
        }
        #submit{
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
    <form action="" method ="POST" enctype = "multipart/form-data">
        <label for="">Product Name</label><br>
        <input type="text" name="productName" id=""><br>
        <span style = "color:red;"><?=isset($error['productName'])? $error['productName'] :''?></span><br>
        <label for="">Description</label><br>
        <input type="text" name="Description" id=""><br>
        <span style = "color:red;"><?=isset($error['Description'])? $error['Description'] :''?></span><br>
        <label for="">Price</label><br>
        <input type="number" name="Price" id="" min=0; step = 0.1><br>
        <span style = "color:red;"><?=isset($error['Price'])? $error['Price'] :''?></span><br>
        <label for="">Unit</label><br>
        <input type="number" name="Unit" id=""><br>
        <span style = "color:red;"><?=isset($error['Unit'])? $error['Unit'] :''?></span><br>
        <label for="">Category</label><br>
        <select name="cate" id="">
            <?php foreach($result as $dm):?>
            <option value="<?= $dm['TenDM']?>"><?= $dm['TenDM'] ?></option>
            <?php endforeach ?>
        </select><br>
        <span style = "color:red;"><?=isset($error['cate'])? $error['cate'] :''?></span><br>
        <input type="file" name="file" id=""><br>
        <input type="submit" name="sub" id="submit" value = "Save">
        <?php if (empty($error) && isset($_POST['sub'])) :?>
            <h4>Đã thêm thành công</h4>
    <?php endif ?>
    </form>
</body>
</html>