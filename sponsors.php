<?php

include_once('config.php');
$query="select * from sponsors";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>sponsors table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>sponsors</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> player_id </th>
	    		    <th> sponsor_name </th>
                <th> sponsor_id </th>
                <th> duration_of_contract </th>
                
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['player_id']; ?></td>
                 	<td><?php echo $row['sponsor_name']; ?></td>
                 	
                 	<td><?php echo $row['sponsor_id']; ?></td>
                 	<td><?php echo $row['duration_of_contract']; ?></td>

            
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>