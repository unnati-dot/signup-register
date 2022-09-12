<?php
session_start();
header('location:index.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userlogin');

$name = $_POST['name'];
$pass = $_POST['password'];
$s = "select * from user where name ='$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
	header('location:err.php');
}else{
	$reg = "insert into user(Name,Password) values('$name','$pass')";
	mysqli_query($con,$reg);
	header('location:success.php');
}




?>