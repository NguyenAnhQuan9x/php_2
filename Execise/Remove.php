<?php
require 'Connect_Database.php';
    if(isset($_GET['id'])){
        $masp = $_GET['id'];
        $sql = "DELETE FROM productinfor WHERE id = $masp";
        $conn->exec($sql);
        header('location: ShowProduct.php?message = Xóa dữ liệu thành công');
        die;
    }
?>