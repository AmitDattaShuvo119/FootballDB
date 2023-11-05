<?php

include_once('config.php');
$query="select * from stadiums";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>stadiums table</title>
<body>
	    <table align="center" border="1px" style="width: 1200; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>stadium</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> stadium_id </th>
	    		    <th> stadium_name </th>
                <th> seat </th>
                <th> established_date </th>
                <th> block_number </th>
                <th> street_number </th>
                <th> city </th>
                
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['stadium_id']; ?></td>
                 	<td><?php echo $row['stadium_name']; ?></td>
                 	
                 	<td><?php echo $row['seat']; ?></td>
                 	<td><?php echo $row['established_date']; ?></td>

                 	<td><?php echo $row['block_number']; ?></td>
                 	<td><?php echo $row['street_number']; ?></td>
                  <td><?php echo $row['city']; ?></td>
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>