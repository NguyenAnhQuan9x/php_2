<?php
    require_once'Unit5.php';
    $sql = "SELECT * FROM productinfor";
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
</head>
<body>
    <table border = "1">
        <tr>
            <th>Mã SP</th>
            <th>Tên SP</th>
            <th>Mô tả SP</th>
            <th>Giá SP</th>
            <th>Số lượng SP</th>
            <th>Danh mục</th>
            <th>Ảnh sản phẩm</th>
            <th>Hành động</th>
        </tr>
    <?php foreach($result as $sp) : ?>
        <tr>
            <td><?= $sp['id'] ?></td>
            <td><?= $sp['name'] ?></td>
            <td><?= $sp['description'] ?></td>
            <td><?= $sp['price'] ?></td>
            <td><?= $sp['Unit'] ?></td>
            <td><?= $sp['Cate'] ?></td>
            <td><img src="Unit5_images/<?= $sp['anhSp']?>" alt="" while="100px" height="200px"></td>
            <td><a href="#">Xóa</a></td>
        </tr>
    <?php endforeach ?>
    </table>
</body>
</html>