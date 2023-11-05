<?php

include_once('config.php');
$query="select * from clubs";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>clubs table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>clubs</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> club_id </th>
	    		    <th> club_name </th>
                <th> stadium_id </th>
                <th> established_date </th>
                <th> market_worth </th>
                <th> location </th>
         </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
               <tr>
                 	<td><?php echo $row['club_id']; ?></td>
                 	<td><?php echo $row['club_name']; ?></td>
                 	<td><?php echo $row['stadium_id']; ?></td>
                 	<td><?php echo $row['established_date']; ?></td>
                 	<td><?php echo $row['market_worth']; ?></td>
                 	<td><?php echo $row['location']; ?></td>
               </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>