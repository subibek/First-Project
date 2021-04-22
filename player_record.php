<?php

session_start();
$user = $_SESSION['user_name'];
if($user == true){
	
}
else {
	header('location:login.php');
}
?>
<html>
<head>
	<title>Player Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head> 
<body>
<div style ="
		background-image: url('images/image6.jpg');
		background-size: cover;
		background-attachment: fixed;
		
		height: 1000px;
		">
	<?php 

	include 'nav.php';
	include 'includes/dbh.php';

	?>
	<br>
	<table class="center" style="opacity: 90%;">
		
		<tr>
			<th>ID</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Position</th>
			<th>Age</th>
			<th>Height</th>
			<th>E-mail</th>
			<th colspan="2">Actions</th>
		</tr>

	<?php 

	$query = "select * from record";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);

	if ($total != 0){

		while ($result = mysqli_fetch_assoc($data)){

			echo " 
					<tr>
						<td>".$result['id']."</td>
						<td>".$result['firstname']."</td>
						<td>".$result['lastname']."</td>
						<td>".$result['player_position']."</td>
						<td>".$result['age']."</td>
						<td>".$result['height']."</td>
						<td>".$result['email']."</td>
						<td><a href = 'update.php?id=$result[id] & fn=$result[firstname] & ln=$result[lastname] & pp=$result[player_position] & a=$result[age] & h=$result[height] & email= $result[email]'><input type ='submit' value='Edit' class ='btn btn-primary'></a>
							</td>
						<td><a href = 'delete.php?id=$result[id]'><input type ='submit' value='Delete' class ='btn btn-primary'></a></td>
					</tr>
					";
		}
	}

	else
		echo 'No data to show.';

	?>
</table>
</body>
</html>