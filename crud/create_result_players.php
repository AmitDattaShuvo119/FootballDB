<html>	<head>		<title>Football Database</title>		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	</head>	<body style="background-color: #20CB70"><?php	$first_name = $_GET["first_name"];	$last_name = $_GET["last_name"];		$birthdate = $_GET["birthdate"];		$gender = $_GET["gender"];		$preferred_foot = $_GET["preferred_foot"];		$club_id = $_GET["club_id"];		$national_id= $_GET["national_id"];	require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");	mysqli_query( $connect, "INSERT INTO players VALUES ( NULL, '$first_name', '$last_name', '$birthdate', '$gender', '$preferred_foot', '$club_id', '$national_id' )" )		or die("Can not execute query");	echo "<p style= 'text-align:left; color:white;font-size: 1rem; line-height: 1'>Record inserted:<br> First Name = $first_name <br> Last Name = $last_name <br> Birthdate = $birthdate <br> Gender = $gender <br> Preffered Foot = $preferred_foot <br> Club ID = $club_id <br> National ID = $national_id";	echo "<p style= 'margin: 10px 0 0 0;' ><a href=read_players.php><button class='ui inverted button'>Read all records</button></a></p>";?></body></html>