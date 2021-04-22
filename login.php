<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="color: white;">
	<div  class="image" style ="
		background-image: url('images/image4.jpg');
		background-size: cover;
		background-attachment: fixed;
		
		height: 700px;
		">
<div class="container" style="width: 50%; opacity: 90%;">
<form class="login" action="" method="POST">
	<br><h1><center>LOGIN</center></h1>

	<div class="form-group">
		<label><strong>E-mail</strong></label><br>
		<input type="text" class="form-control" name="email" placeholder="E-mail Address"><br>
	</div>
	<div class="form-group">
		<label><strong>Password</strong></label><br>
		<input type="password" class="form-control" name="pwd" placeholder="Password"><br>
	</div>
	<input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Login">
	
</form>
</div>
</div>
</body>
</html>

<?php
	
	include 'includes/dbh.php';
	session_start();
	
	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		$query = "SELECT * FROM record WHERE email = '$email' && pwd = '$pwd'";

		$data = mysqli_query($conn, $query);

		$total = mysqli_num_rows($data);


		if ($total == 1){

			$_SESSION['user_name'] = $pwd;
			header('location:index.php');

		}
		else 
			{	echo "<script>alert('Failed to login. Try again.')</script>";	}
	}
	
	?>