<html>	<head>		<title>Football Database</title>		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	</head>	<body style="background-color: #20CB70"><h1 style="text-align: center; color: white; font-size: 3rem; line-height: 1">Stadium info</h1><?php	require_once('db_connect.php');	$connect = mysqli_connect( HOST, USER, PASS, DB )		or die("Can not connect");	$results = mysqli_query( $connect, "SELECT * FROM stadiums" )		or die("Can not execute query");	echo "<table class='ui inverted green table'style='margin: 0 auto;'> \n";	echo "<th>Stadium ID</th> <th>Stadium Name</th> <th>Seat</th> <th>Established Date</th> <th>Block number</th> <th>Street Number</th> <th>City</th> <th>Delete</th> <th>Update</th> \n";	while( $rows = mysqli_fetch_array( $results ) ) {		extract( $rows );		echo "<tr>";		echo "<td> $stadium_id </td>";		echo "<td> $stadium_name </td>";		echo "<td> $seat</td>";		echo "<td> $established_date </td>";		echo "<td> $block_number </td>";		echo "<td> $street_number </td>";		echo "<td> $city </td>";		echo "<td> <a href = 'delete_stadiums.php?stadium_id=$stadium_id'> <button class='ui inverted button'>Delete </button></a> </td>";		echo "<td> <a href = 'update_input_stadiums.php?stadium_id=$stadium_id&stadium_name=$stadium_name&seat=$seat&established_date=$established_date&block_number=$block_number&street_number=$street_number&city=$city'><button class='ui inverted button'> Update </button></a> </td>";		echo "</tr> \n";	}	echo "</table> \n";		echo "<p style= 'margin: 10px 0 0 1270px;' ><a href=create_input_stadiums.php><button class='ui inverted button'>Add new Stadium's info</button></a></p>";?></body></html>