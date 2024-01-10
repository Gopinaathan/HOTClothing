<?php 

	session_start();

//Connect database
 $con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
	if(!$con)
	{
		die("Sorry, We are facing a technical issue");
	}
	
	$sql = "DELETE FROM `product` WHERE `product`.`pid` = ".$_GET["id"]."";
	
	if(mysqli_query($con, $sql)){
		header('location:Adminview.php');
	}
?>