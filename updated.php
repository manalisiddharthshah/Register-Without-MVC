<?php
	require("connection.php");
	extract($_POST);

	if(isset($btnUpdate)){
		$hobby = implode(',',$_POST["in"]);
		$q = "UPDATE sanjay SET
				name = '$tname',
				email = '$tmail',
				phone = '$tno',
				gender = '$tgen',
				address = '$tadd',
				country = '$tcon',
				interest = '$hobby' WHERE id = '$editID'";
		$q1 = mysqli_query($con, $q);
		if($q1>0){
			header("Location:Database_view.php");
		}else
		{
			echo "Data is not Updated.";
		}
	}
?>