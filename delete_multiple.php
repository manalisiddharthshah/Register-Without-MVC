<?php
	require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		table,tr,td{
			border: 1px solid black;
				}
		</style>
</head>
<body>
	<table>
			<thead>
				<tr>
					<td>#</td>
					<td>No.</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Gender</td>
					<td>Address</td>
					<td>Country</td>
					<td>Hobby</td>
				</tr>
			</thead>
			<form action="" method="POST">
			<tbody>
				<?php
					$q = "SELECT * FROM sanjay";
					$data = mysqli_query($con,$q);
					$i = 0;
					while($result = mysqli_fetch_array($data)){
						$i++;
					// print_r($data);
					// exit();
				?>
				<tr>
					<td align="center" bgcolor="#FFFFFF">
						<input name="chk[]" type="checkbox" id="cbox" value="<?php echo $result['id']; ?>"></td>
					<td><?php echo $i;?></td>
					<td><?php echo $result['name'];?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $result['phone'];?></td>
					<td><?php echo $result['gender'];?></td>
					<td><?php echo $result['address'];?></td>
					<td><?php echo $result['country'];?></td>
					<td><?php echo $result['interest'];?></td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="9"><input type="submit" name="add" id="delete1" value="Delete"></td>
				</tr>
			</tbody>
			</form>
			<?php
				if(isset($_POST['add'])){
					
					$cnt = array();
					$cnt = count($_POST['chk']);
					if($cnt > 0){
						for($i=0;$i<$cnt;$i++)
						{
	 						$row_no=$_POST['chk'][$i];
	 						
	 						$q="DELETE FROM sanjay WHERE id=".$row_no;
	 						mysqli_query($con,$q);
	 						header("Location:delete_multiple.php");
						}
					}else
					{
						echo "There is no data for deletion.";
					}
				}
				?>
	</table>
</body>
</html>