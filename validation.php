<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userlogin');

$name = $_POST['name'];
$pass = $_POST['password'];
$s = "select * from user where name ='$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['username']=$name;
	header('location:home.php');
}else{
	header('location:index.php');
}




?>