<html>	<head>		<title>Football Database</title>		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	</head>	<body style="background-color: #20CB70"><?php	$player_id = $_GET["player_id"];	$national_id = $_GET["national_id"];		$national_name = $_GET["national_name"];		$goals = $_GET["goals"];		$assists = $_GET["assists"];	$clean_sheets = $_GET["clean_sheets"];		$debut = $_GET["debut"];		$match_played = $_GET["match_played"];		$mvp = $_GET["mvp"];	$goal_ratio = $_GET["goal_ratio"];		$red_card = $_GET["red_card"];		$yellow_card = $_GET["yellow_card"];		$position = $_GET["position"];	$kit_number = $_GET["kit_number"];		$trophy = $_GET["trophy"];			require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");	mysqli_query( $connect, "INSERT INTO national_state VALUES ( NULL, '$player_id', '$national_id', '$national_name', '$goals', '$assists', '$clean_sheets', '$debut', '$match_played', '$mvp', '$goal_ratio', '$red_card', '$yellow_card', '$position', '$kit_number', '$trophy' )" )		or die("Can not execute query");	echo "<p style= 'text-align:left; color:white;font-size: 1rem; line-height: 1'>Record inserted:<br> Player ID = $player_id <br> National ID = $national_id <br> National Name = $national_name <br> Goals = $goals <br> Assists = $assists <br> Clean Sheets = $clean_sheets <br> Debut = $debut <br> Match Played = $match_played <br> MVP = $mvp <br> Goal Ratio = $goal_ratio <br> Red Card = $red_card <br> Yellow Card = $yellow_card <br> Position = $position <br> Kit Number = $kit_number <br> Trophy = $trophy ";	echo "<p style= 'margin: 10px 0 0 0;'><a href=read_nationals_state.php><button class='ui inverted button'>READ all records</button></a>";?></body></html>