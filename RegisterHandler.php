<?php session_start();    		//start new session
if(isset($_POST["btnRegister"]))
{
	//Reading the value and
	$name = $_POST["user_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	// $contactnumber = $_POST["txtContact"];
	
	//Connect database
	$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
	//Error handling
	if(!$con){
		die("Sorry, We are facing a technical issue");
	}
	
	//Sql Query
	$sql = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('".$name."','".$email."','".$password."')";
	//Execute the query against the database
	 $results = mysqli_query($con, $sql);

	header('location:login.php');
}

?>