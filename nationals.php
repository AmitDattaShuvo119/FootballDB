<?php

include_once('config.php');
$query="select * from nationals";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>nationals table</title>
<body>
	    <table align="center" border="1px" style="width: 800; line-height: 40px;">
	    	<tr>
	    		<th colspan="10"><h2>nationals</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> national_id </th>
	    		    <th> national_name </th>
                <th> stadium_id </th>
                <th> major_trophies </th>
                <th> region </th>

            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['national_id']; ?></td>
                 	<td><?php echo $row['national_name']; ?></td>
                 	<td><?php echo $row['stadium_id']; ?></td>
                 	<td><?php echo $row['major_trophies']; ?></td>
                 	<td><?php echo $row['region']; ?></td>
                 	
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>