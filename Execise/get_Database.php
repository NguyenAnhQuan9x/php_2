<?php
    require_once 'Connect_Database.php';
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
?>