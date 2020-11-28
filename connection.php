<?php
 $l="localhost";
 $r="root";
 $p="";
 $db="myfirstdb";

$con=mysqli_connect($l,$r,$p,$db);

if($con==true){
	echo "success";
}
else
{
	echo "nai thayu";
}
?>