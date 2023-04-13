<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        /* var_dump($_FILES['file']); */
        //Lấy file
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        //Lấy đuôi mử rộng của file
        $ext = pathinfo($fileName,PATHINFO_EXTENSION);
        //Tạo mảng đuôi cho phép
        $imgs = ['img','jpg','png','jpe'];
        //Kiểm tra định dạng file
        if(!in_array($ext,$imgs)){
            $errors['type'] = "Bạn cần tải file ảnh";
        }
        //Check Upload file < 3mp
        if($file['size'] <= 0 && $file['size'] >3000000){
            $errors['file'] = "Bạn chưa thêm file hoặc file quá lớn";
        }
        //Thư mục để upload
        $dir_file = "../images/";
        //Di chuyển file đến thư mục đã tạo
        if(empty($errors)){
            move_uploaded_file($file['tmp_name'], $dir_file.$fileName);
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
</head>
<body>
    <form action="" method = "POST" enctype = "multipart/form-data">
        <input type="file" name="file" id=""><br>
        <span style = "color:red;"><?= isset($errors['type'])?$errors['type'] :''?></span><br>
        <input type="submit" name="" id="" value = "Upload">
    </form>
</body>
</html>