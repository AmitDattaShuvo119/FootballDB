<?php

include_once('config.php');
$query="select * from manager";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>manager table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>manager</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> team_id </th>
	    		    <th> manager_name </th>
                <th> birthdate </th>
                <th> gender </th>
                <th> trophy </th>
                <th> nationality </th>
                
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['team_id']; ?></td>
                 	<td><?php echo $row['manager_name']; ?></td>
                 	
                 	<td><?php echo $row['birthdate']; ?></td>
                 	<td><?php echo $row['gender']; ?></td>

                 	<td><?php echo $row['trophy']; ?></td>
                 	<td><?php echo $row['nationality']; ?></td>
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>