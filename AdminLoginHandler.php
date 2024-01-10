<?php session_start();    		//start new session
if(isset($_POST["btnSubmit"]))
{
	//Reading the value and
	$username = $_POST["adminName"];
	$password = $_POST["adminPass"];
	
	//Connect database
	$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
	//Error handling
	if(!$con){
		die("Sorry, We are facing a technical issue");
	}
	
	//Sql Query
	$sql = "SELECT * FROM `admin` WHERE `email` = '".$username."' AND `password` = '".$password."'";
	
	//Execute the query against the database
	 $results = mysqli_query($con, $sql);
}

if(mysqli_num_rows($results) > 0){
		$_SESSION["username"] = $username;
		header('location:Admin.php');
	}

else{
	header('location:AdminLogin.php');
}
?>