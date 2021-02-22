<?php
header("Content-Type: text/html; charset=utf8");

$email = $_POST["email"];
$password = $_POST["password"];

//開始判斷
if($email == "" || $password == "" ) echo "empty";
else if($email == "ainimal@123" && $password == "123123") echo "success";
else  echo "fail";

?>
