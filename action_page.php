<?php

$con =mysqli_connect('localhost','root');

if($con){
  echo "Connection succesfull";

}else{
  echo "No connection";
}
mysqli_select_db($con, 'userinfodata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "insert into actionpage (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comment')";

echo "$query";
mysqli_query($con,$query);

header('location:index7.php');


?>