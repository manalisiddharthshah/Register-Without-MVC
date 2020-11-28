<?php 
	require ("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View_Database</title>
</head>
<body>
<table border="1px">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Country</th>
		<th>Interst</th>
		<th>Action</th>
	</thead>
	<tbody><?
		$result = mysql_query("SELECT * FROM sanjay");
    while ($row = mysql_fetch_array($result)) {
      echo strip_tags($row);
      echo "\n";
    }?>
		<?php 
			$q = "SELECT * FROM sanjay";
			$data = mysqli_query($con , $q);
			$I = 0;
			while ($result = mysqli_fetch_array($data)) {
					$I++;
							
		?>

		<tr>
			<td><?php echo $I; ?></td>
			<td><?php echo $result['name']; ?></td>
			<td><?php echo $result['email']; ?></td>
			<td><?php echo $result['phone']; ?></td>
			<td><?php echo $result['address']; ?></td>
			<td><?php echo $result['gender']; ?></td>
			<td><?php echo $result['country']; ?></td>
			<td><?php echo $result['interest']; ?></td>	
			<td><a href="edit.php?id=<?php echo $result['id'];?>">Edit</a>
				<a href="delete.php?id=<?php echo $result['id'];?>">DELETE</a></td>				
		</tr>
		<?php 
			}
		?>	
	</tbody>

</table>
<p><a href="delete_multiple.php">Multi delete</a><br><a href="day9.php">want add more data then click here</a></p>

</body>
</html>