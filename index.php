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
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include 'nav.php' ?>

	<div style ="background-image: url('images/image7.jpg');background-size: cover; 
				background-attachment: fixed;">
	
	<div class="container" style="opacity: 90%">
		<br><h1>Real Madrid C.F</h1>
		<br>
		<p>Founded on 6 March 1902 as Madrid Football Club, the club has traditionally worn a white home kit since inception. The word real is Spanish for "royal" and was bestowed to the club by King Alfonso XIII in 1920 together with the royal crown in the emblem. The team has played its home matches in the 81,044-capacity Santiago Bernabéu Stadium in downtown Madrid since 1947. Unlike most European sporting entities, Real Madrid's members (socios) have owned and operated the club throughout its history.<br>

		<br>The club was estimated to be worth €3.8 billion ($4.2 billion) in 2019, and it was the second highest-earning football club in the world, with an annual revenue of €757.3 million in 2019. The club is one of the most widely supported teams in the world. Real Madrid is one of three founding members of La Liga that have never been relegated from the top division since its inception in 1929, along with Athletic Bilbao and Barcelona. The club holds many long-standing rivalries, most notably El Clásico with Barcelona and El Derbi with Atlético Madrid.<br>

		<br>Real Madrid established itself as a major force in both Spanish and European football during the 1950s, winning five consecutive European Cups and reaching the final seven times. This success was replicated in the league, which the club won five times in the space of seven years. This team, which consisted of players Alfredo Di Stéfano, Ferenc Puskás, Francisco Gento, and Raymond Kopa, is considered by some in the sport to be the greatest team of all time.
		<br>

		<br>In domestic football, the club has won 66 trophies; a record 34 La Liga titles, 19 Copa del Rey, 11 Supercopa de España, a Copa Eva Duarte, and a Copa de la Liga. In European and worldwide competitions, Real Madrid have won a record 26 trophies; a record 13 European Cup/UEFA Champions League titles, two UEFA Cups and four UEFA Super Cups. In international football, they have achieved a record seven club world championships.<br>

		<br>Real Madrid was recognised as the FIFA Club of the 20th Century on 11 December 2000 with 42.35% of the vote, and received the FIFA Centennial Order of Merit on 20 May 2004.The club was also awarded Best European Club of the 20th Century by the IFFHS on 11 May 2010. In June 2017, the team succeeded in becoming the first club to win consecutive Champions League titles, then made it three in a row and four in five seasons in May 2018, extending their lead atop the UEFA club rankings. As of 2020, Real Madrid are ranked third behind Bayern Munich and Barcelona.</p>
		
	</div>	

</body>
</html>