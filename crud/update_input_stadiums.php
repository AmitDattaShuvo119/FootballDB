<html>	<head>		<title>Football Database</title>		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	</head>	<body style="background-color: #20CB70"><?php	$stadium_id = $_GET["stadium_id"];	$stadium_name = $_GET["stadium_name"];		$seat = $_GET["seat"];		$established_date = $_GET["established_date"];		$block_number = $_GET["block_number"];		$street_number = $_GET["street_number"];		$city = $_GET["city"];?><h1 style="text-align: center; color: white; font-size: 3rem; line-height: 1">Update Stadium's Record</h1><form class="ui form" style="max-width: 500px; margin: 0 auto;" action=update_result_stadiums.php>	<input type="hidden" name=stadium_id value='<?php echo $stadium_id; ?>'>  <div class="field">    <label>Stadium Name</label>    <input type="text" name="stadium_name" value='<?php echo $stadium_name; ?>' placeholder="Stadium Name">  </div>  <div class="field">    <label>Seat</label>    <input type=text name="seat" value='<?php echo $seat; ?>' placeholder="Last name">  </div>  <div class="field">    <label>Established date</label>    <input type=text name="established_date" value='<?php echo $established_date; ?>' placeholder="Established Date">  </div>  <div class="field">    <label>Block Number</label>    <input type=text name="block_number" value='<?php echo $block_number; ?>' placeholder="Block Number">  </div>  <div class="field">    <label>Street Number</label>    <input type=text name="street_number" value='<?php echo $street_number; ?>' placeholder="Street Number">  </div>  <div class="field">    <label>City</label>    <input type=text name="city" value='<?php echo $city; ?>' placeholder="City">  </div> 		<button class="ui inverted button" type="submit">Update</button></form></body></html>