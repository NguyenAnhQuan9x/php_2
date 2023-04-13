<?php
$servername = "localhost:3366";
$username = "root";
$password = "";
$dbname = 'products';
/* $productName = $_POST['productName'];
$productDes = $_POST['Description'];
$productPrice = $_POST['Price'];
$productUnit = $_POST['Unit'];
$productCate = $_POST['cate'];
$productImg = $fileNameimg; */
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /* $sql = "INSERT INTO productinfor(name,price,description,Unit,Cate,anhSp)
  VALUES ('$productName',$productPrice,'$productDes',$productUnit,'','IphoneX.jpg')";
  $conn->exec($sql); 
   echo "Connected successfully"; */
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>