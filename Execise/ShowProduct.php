<?php
    require_once 'Connect_Database.php';
    $sql = "SELECT * FROM productinfor";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>Danh sách sản phẩm</h1>
    <table border="1">
        <tr>
            <th>Mã sản phẩm</th>
            <th>MTên sản phẩm</th>
            <th>Giá </th>
            <th>Mô tả</th>
            <th>Danh mục</th>
            <th>Số lượng</th>
            <th>Ảnh sản phẩm</th>
            <th colspan="2">Tùy chọn</th>
        </tr>
        <?php foreach($result as $sp):?>
        <tr>
            <td><?= $sp['id']?></td>
            <td><?= $sp['name']?></td>
            <td><?= $sp['price']?></td>
            <td><?= $sp['description']?></td>
            <td><?= $sp['Cate']?></td>
            <td><?= $sp['Unit']?></td>
            <td><img src="Ex_images/<?= $sp['anhSp']?>" alt="" width="120px" height="150px"></td>
            <td><a href="ChangeProduct.php?id=<?= $sp['id']?>">Sửa</a></td>
            <td><a onclick="return confirm('Bạn có chắc muốn xóa không')" href="Remove.php?id=<?= $sp['id'] ?>">Xóa</a></td>
            <?php endforeach?>
        </tr>
    </table>
</body>
</html>