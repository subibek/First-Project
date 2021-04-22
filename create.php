<?php

session_start();
$user = $_SESSION['user_name'];
if($user == true){
	
}
else {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style ="
		background-image: url('images/image4.jpg');
		background-size: cover;
		background-attachment: fixed;
		
		height: 700px;
		">

	<?php include 'nav.php';
	?>

	<form action="includes/insert.php" method="POST" style="padding: 4px; opacity: 90%;">

		<div class="form-group"><label><strong>Firstname</strong></label><br>
			<input type="text" name="firstname" placeholder="First Name">
		</div>

		<div class="form-group"><label><strong>Lastname</strong></label><br>
			<input type="text" name="lastname" placeholder="Last Name">
		</div>

		<div class="form-group"><label><strong>Position</strong></label><br>
			<select class="form-control" name="player_position"> 
				<option>Forward</option>
				<option>Midfield</option>
				<option>Defence</option>
				<option>Goalkeeper</option>
			</select>
		</div>

		<div class="form-group"><label><strong>Age</strong></label><br>
			<input type="number" name="age" placeholder="Age">
		</div>

		<div class="form-group"><label><strong>Height</strong></label><br>
			<input type="number" name="height" placeholder="Height">
		</div>

		<div class="form-group"><label><strong>E-mail</strong></label><br>
			<input type="text" name="email" placeholder="E-mail">
		</div>

		<div class="form-group"><label><strong>Password</strong></label><br>
			<input type="password" name="pwd" placeholder="Password">
		</div>
	</strong>
		<input type="submit" name="submit" class="btn btn-primary"></input>
	</form>
 
</body>
</html>