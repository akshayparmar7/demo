<!DOCTYPE html>
<html>
<body>

<?php  
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// function myFunction() {
//   echo "I come from a function!";
// }

// $myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction());

// $myArr["message"]();
define ("SECRETKEY", "d]inttt$`Ngw(4p)a#kXmd.~@/F5{");

$akshay = "vqXTw66AGCOm6kgH6v9hvA==";
$plain= openssl_decrypt($akshay, "AES-128-ECB",SECRETKEY);
print_r($plain);die();
?>  

</body>
</html>
