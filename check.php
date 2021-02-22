<?php
header("Content-type:application/json");

$email = $_POST["email"];
$password = $_POST["password"];

//開始判斷
if($email == "" || $password == "" ){
  $a = "empty";
  echo $a;
}
else if($email == "ainimal@123" && $password == "123123"){
  $b ="success";
  echo $b;
}
else {
  $c = "fail";
  echo $c;
}

?>
