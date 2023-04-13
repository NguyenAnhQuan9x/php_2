<?php
   require_once 'Connect_Database.php';
       $sql = "INSERT INTO productinfor (name,price,description,Unit,Cate,anhSP)
       VALUES ('$productName',$productPrice,'$productDes',$productUnit,'$productCate','$productImgName')";
       $conn->exec($sql);
?>