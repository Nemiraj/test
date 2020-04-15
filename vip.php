<?php

$con =mysqli_connect('localhost','root');

if($con){
  echo "Connection succesfull";

}else{
  echo "No connection";
}
mysqli_select_db($con, 'mywebsite22');

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

$query = "insert into vip(FirstName, LastName, Email, password, password1)
values ('$FirstName','$LastName','$Email', '$password','$password1')";

echo "$query";
mysqli_query($con,$query);

header('location:login12.php');


?>