<html>
	<head>
		<title>Football Database</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body style="background-color: #20CB70">

<?php

	$stadium_id = $_GET["stadium_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM stadiums WHERE stadium_id=$stadium_id" )

		or die("Can not execute query");



	echo "<p style= 'text-align:center; color:white;font-size: 3rem; line-height: 1' >Record deleted<br></body></p>";



	echo "<p style= 'margin: 10px 0 0 0;' ><a href=read_stadiums.php><button class='ui inverted button'>Read all records</button></a></p>";


?>

</body>
</html>