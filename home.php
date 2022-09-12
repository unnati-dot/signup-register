<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Home page</title>
</head>
<body>
	<div class="container">
	
	<br/>
    <h1 style="background-color:greenyellow; color:white;">welcome <?php echo $_SESSION['username']; ?>🌼</h1>
    <a class="floatright" href="logout.php">LOGOUT</a>
</body>
</html>