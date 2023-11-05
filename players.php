<?php

include_once('config.php');
$query="select * from players";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>players table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>players</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> player_id </th>
	    		    <th> first_name </th>
                <th> last_name </th>
                <th> birthdate </th>
                <th> gender </th>
                <th> preferred_foot </th>
                <th> club_id </th>
                <th> national_id </th>
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['player_id']; ?></td>
                 	<td><?php echo $row['first_name']; ?></td>
                 	<td><?php echo $row['last_name']; ?></td>
                 	<td><?php echo $row['birthdate']; ?></td>
                 	<td><?php echo $row['gender']; ?></td>
                 	<td><?php echo $row['preferred_foot']; ?></td>
                 	<td><?php echo $row['club_id']; ?></td>
                 	<td><?php echo $row['national_id']; ?></td>
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>