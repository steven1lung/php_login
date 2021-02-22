<?php
header("Content-Type: text/html; charset=utf8");

$email = $_POST["email"];
$password = $_POST["password"];

//開始判斷
if($email == "" || $password == "" ){
  $a = "empty";
  echo $a;
}
else if($email == "ainimal@123" && $password == "123123"){
  $b ="success";
  header("refresh:0;url=https://reurl.cc/kVXDdG");
  echo $b;
}
else {
  $c = "fail";
  echo $c;
}

?>
