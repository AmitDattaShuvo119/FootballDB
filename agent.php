<?php

include_once('config.php');
$query="select * from agent";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>agent table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>agent</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> player_id </th>
	    		    <th> agent_name </th>
                <th> agent_id </th>
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['player_id']; ?></td>
                 	<td><?php echo $row['agent_name']; ?></td>
                 	<td><?php echo $row['agent_id']; ?></td>
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>