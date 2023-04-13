<?php
   echo 'Hello World';
   echo '</br>';
   print ("I am Quan");
   //Khai báo biến
   $message = "Cao đẳng FPT";
   echo '<br>',$message;
   //Kiểu dữ liệu
   $myInt = 3443;
   //Kiểu float
   $myFloat = 2.3;
   echo "<br>Đây là biến kiểu Float: $myFloat";
   //Toán tử
   $a = 5;
   $b = 12.5;
   $c = 3;
   echo "<br> Phép cộng: a + b = ". $a + $b;
   echo "<br> Phép nhân:  a * b = ".$a * $b;
   echo "<br> Phép chia lấy số dư: a %b = ". $a%$b;
   echo "<br> Lũy thừa:  a^c = ". $a**$c;
   $d = $a + ++$b;
   echo "<br> $d<br>";
   $string = (string)$a;
   $int = (int)$b;
   if(is_int($int)){
      echo "Là int";
      echo "<br>$int";
   }else{
      echo "Không ";
   }
?>