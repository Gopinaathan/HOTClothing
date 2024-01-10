<?php session_start();    		//start new session
if(isset($_POST["btnLogin"]))
{
	//Reading the value and
	$email = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	
	//Connect database
	$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
	//Error handling
	if(!$con){
		die("Sorry, We are facing a technical issue");
	}
	
	//Sql Query
	$sql = "SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."'";
	
	//Execute the query against the database
	 $results = mysqli_query($con, $sql);
}

if(mysqli_num_rows($results) > 0){
		$_SESSION["username"] = $email;
		header('location:index.php');
	}

else{
	header('location:login.php');
}
?>