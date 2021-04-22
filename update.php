<?php

session_start();
$user = $_SESSION['user_name'];
if($user == true){
	
}
else {
	header('location:login.php');
}
	
	error_reporting(0);
	include 'includes/dbh.php';
	include 'player_record.php';

	$sn = $_GET['id'];
	$fn = $_GET['fn'];
	$ln = $_GET['ln'];
	$pp = $_GET['pp'];
	$a = $_GET['a'];
	$h = $_GET['h'];
	$email = $_GET['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<br>
	<form action="" method="GET" style="padding: 14px;">

		<div class="form-group"><label><strong>Firstname</strong></label><br>
			<input type="text" name="firstname" placeholder="First Name" value="<?php echo "$fn";?>">
		</div>

		<div class="form-group"><label><strong>Lastname</strong></label><br>
			<input type="text" name="lastname" placeholder="Last Name" value="<?php echo "$ln";?>">
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
			<input type="number" name="age" placeholder="Age" value="<?php echo $a; ?>">
		</div>

		<div class="form-group"><label><strong>Height</strong></label><br>
			<input type="number" name="height" placeholder="Height" value="<?php echo "$h";?>">
		</div>

		<div class="form-group"><label><strong>E-mail</strong></label><br>
			<input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
		</div>

		<input type="submit" name= "submit" class="btn btn-primary"></input>
	</form>
 
</body>
</html>

<?php
	
	if($_GET['submit']){

	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$player_position = $_GET['player_position'];
	$age = $_GET['age'];
	$height = $_GET['height'];
	$email = $_GET['email'];


	$query = " UPDATE record SET firstname='$firstname', lastname='$lastname', player_position='$player_position', age='$age', height='$height', email = '$email' WHERE firstname = '$firstname'";

	$data = mysqli_query($conn, $query);

	if ($data) {
	
	echo "<script>alert('Record Updated.')</script>";
	?>

	<META HTTP-EQUIV="Refresh" CONTENT="0; URL = http://localhost/Project1/player_record.php">

	<?php
	}
	else
	{
		echo "<script>alert('Failed to update record.')</script>";
		}
	}


?>

