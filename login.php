<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>login regisration form</title>
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<br/>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>

		<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<br/>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>