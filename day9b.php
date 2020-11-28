<?php
 require("connection.php");
 extract($_POST);

 if(isset($txtsubmit))
 {
 	$name=mysqli_real_escape_string($con,$tname);
 	$Email=mysqli_real_escape_string($con,$tmail);
 	$Phone=mysqli_real_escape_string($con,$tno);
 	$Gender=$tgen;
 	$Address=stripcslashes($tadd);
 	$Country=$tcon;
 	$interest=implode(',',$_POST["in"]);
 	//print_r($_POST);
 	//exit();
 	$q="INSERT INTO sanjay (name,email,phone,gender,address,country,interest)VALUES('$tname','$tmail','$tno','$tgen','$tadd','$tcon','$interest')";
 	$data=mysqli_query($con,$q);
 	print_r($data);
 	exit();
 }
 ?>