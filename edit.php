<?php
	require("connection.php");
	extract($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$q= "SELECT * FROM sanjay WHERE id = '$id'";
	$q1 = mysqli_query($con, $q);
	$data = mysqli_fetch_array($q1);
?>
<form action="updated.php" method="POST">
	<input type="hidden" name="editID" value="<?php echo $id; ?>"><br>
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="tname" value="<?php echo $data['name'];?>"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="tmail" value="<?php echo $data['email'];?>"></td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" name="tno" value="<?php echo $data['phone'];?>"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
<input type="radio" name="tgen" value="Male" <?php if($data['gender']=="Male"){ echo "checked";}?>/>Male
<input type="radio" name="tgen" value="female" <?php if($data['gender']=="female"){ echo "checked";}?>/>Female
			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><textarea cols="20" name="tadd">
				<?php echo trim($data['address']);?>
			</textarea></td>
		</tr>
		<tr>
			<td>Country:</td>
			<td><select name="tcon">
				<option value="<?php echo $data['country'];?>"><?php echo $data['country'];?></option>
				<option value="India">India</option>
				<option value="USA">USA</option>
				<option value="Australia">Australia</option>
				<option value="Canada">Canada</option>
			</select></td>
		</tr>
		<tr>
			<td>Interest:</td>
			<td>
				<?php $chk=$data['interest'];
					  $in=explode(",",$chk);
				?>
				<input <?php if(in_array("cricket",$in)){echo "checked";}?> type="checkbox" name="in[]" value="cricket">cricket
				<input <?php if(in_array("comp",$in)){echo "checked";}?> type="checkbox" name="in[]" value="comp">comp
				<input <?php if(in_array("onetwothree",$in)){echo "checked";}?> type="checkbox" name="in[]" value="onetwothree">onetwothree
				
		</tr>
		<tr>
			<td><input type="submit" name="btnUpdate" value="Submit"></td>
			<td><input type="reset" name="reset" value="Reset"></td>
		</tr>
</form>
</body>
</html>