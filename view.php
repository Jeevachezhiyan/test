<?php
include('connect.php');

$sql = 'SELECT * FROM `kutty_gomu` WHERE `firstname` = "kuttyjeeva"';

$result = mysqli_query($conn, $sql);// To connect db with quey


if (mysqli_num_rows($result) > 0) { // To fetch the count of the rows


	?><table style="width:100%">
  	<tr>
    	<th>ID</th>
    	<th>Firstname</th> 
    	<th>Lastname</th>
  	</tr>
  	<?php
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) { // To fetch the associative array
       ?> 
  	<tr>
    	<td><?php echo $row['id'];?></td>
    	<td><?php echo $row['firstname'];?></td>
    	<td><?php echo $row['lastname'];?></td>
  	</tr>
  <?php	

    }
    ?></table><?php
} else {
    echo "0 results";
}




?>

<style>
table, th, td {
  border: 1px solid black;
}
</style>