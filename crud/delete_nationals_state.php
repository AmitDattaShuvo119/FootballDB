<html>
	<head>
		<title>Football Database</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body style="background-color: #20CB70">

<?php

	$index_no = $_GET["index_no"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM national_state WHERE index_no=$index_no" )

		or die("Can not execute query");



	echo "<p style= 'text-align:center; color:white;font-size: 2rem; line-height: 1' >Record deleted<br></body></p>";



	echo "<p style= 'margin: 10px 0 0 0;' ><a href=read_nationals_state.php><button class='ui inverted button'>Read all records</button></a></p>";


?>

</body>
</html>