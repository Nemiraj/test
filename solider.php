<?php

$con =mysqli_connect('localhost','root');

if($con){
  echo "Connection succesfull";

}else{
  echo "No connection";
}
mysqli_select_db($con, 'myweb1');

$FirstName = $_POST['FirstName'];
$password = $_POST['password'];



$query = "insert into solider(FirstName, password)
values ('$FirstName','$password')";

echo "$query";
mysqli_query($con,$query);

header('location:index7.php');


?>