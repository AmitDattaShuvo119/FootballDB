<?php

include_once('config.php');
$query="select * from club_state";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
   <title>club_state table</title>
<body>
	    <table align="center" border="1px" style="width:1200; line-height: 30px;">
	    	<tr>
	    		<th colspan="15"><h2>club_state</h2></th>
	    	</tr>
	    	<tr>
	    		    <th> player_id </th>
	    		    <th> club_name </th>
                <th> club_id </th>
                <th> goals </th>
                <th> assists </th>
                <th> clean_sheets </th>
                <th> debut </th>
                <th> match_played </th>
                <th> mvp </th>
                <th> goal_ratio </th>
                <th> red_card </th>
                <th> yellow_card</th>
                <th> trophy </th>
                <th> position </th>
                <th> kit_number</th>
            </tr>
          <?php
          while($row=$result->fetch_assoc())
          {
          ?>   
                 <tr>
                 	<td><?php echo $row['player_id']; ?></td>
                 	<td><?php echo $row['club_name']; ?></td>
                  <td><?php echo $row['club_id']; ?></td>
                 	<td><?php echo $row['goals']; ?></td>
                 	<td><?php echo $row['assists']; ?></td>
                 	<td><?php echo $row['clean_sheets']; ?></td>
                 	<td><?php echo $row['debut']; ?></td>
                 	<td><?php echo $row['match_played']; ?></td>
                 	<td><?php echo $row['mvp']; ?></td>
                  <td><?php echo $row['goal_ratio']; ?></td>
                  <td><?php echo $row['red_card']; ?></td>
                  <td><?php echo $row['yellow_card']; ?></td>
                  <td><?php echo $row['trophy']; ?></td>
                  <td><?php echo $row['position']; ?></td>
                  <td><?php echo $row['kit_number']; ?></td>
                  
                 </tr>
            <?php
             }
            ?>


         </table>
</body>

</html>