<?php 

session_start();
	
if (isset($_POST["btnSubmit"])){
	
		$pname = $_POST["adname"];
		$price = $_POST["Price"];
		
		if(isset($_POST["chkPublish"])){
			$status = 1;
		}
		else{
			$status = 0;
		}
		
	if(!file_exists($_FILES["imageFile"]["tmp_name"]) || !is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
		
		$Image = $_SESSION["path"];
	}
	else{
		$Image = "Uploads/".basename($_FILES["imageFile"]["name"]);
		move_uploaded_file($_FILES["imageFile"]["tmp_name"], $Image);
	}
	
	//DB Connection
	$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
	if(!$con)
	{
		die("Sorry, We are facing a technical issue");
	}
	
	$sql = "UPDATE `product` SET `pname`='".$pname."',`price`='".$price."',`path`='".$Image."',`published`='".$status."' WHERE `product`.`pid`='".$_SESSION["pid"]."'";
	
	if(mysqli_query($con, $sql)){
		header('location:Adminview.php');
	}
	 
}
?>