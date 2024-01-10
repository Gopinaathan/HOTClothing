<?php session_start();
 if(!isset($_SESSION["username"])){
	header('location:AdminLogin.php');
 }

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Advertisement</title>
	<link rel="stylesheet" href="CSS/style.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <style>

	header{
			z-index:1000 ;
		}
		.last {
			position:relative;
			margin-top:20%;
			/**height between nav and form**/
			left: 50%;
			transform: translate(-50%, -50%);
			width: 500px;
			background: #d1d1d9;
			border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(0 0 0 /90%);
			
		}


		.txt_feild {
			position: relative;
			border-bottom: 2px solid black;
			margin: 30px 0;
		}

		.txt_feild input {
			width: 100%;
			padding: 0 5px;
			height: 40px;
			font-size: 16px;
			border: none;
			background: none;
			outline: none;
		}

		.txt_feild label {
			position: absolute;
			top: 50%;
			left: 5px;
			color: black;
			transform: translateY(-50%);
			font-size: 16px;
			pointer-events: none;
			transition: .5s;
		}

		.txt_feild span::before {
			content: '';
			position: absolute;
			top: 40px;
			left: 0;
			width: 100%;
			height: 2px;
			background: black;
			/*linecolor*/
			transition: .5s;
		}

		::placeholder {
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}

		.pass {
			margin: -5px 0 20px 5px;
			color:black;
		}

		.pass:hover a {
			color: #000000;
			text-decoration: none;
		}

		.pass a {
			color: #047F80;
			text-decoration: none;

		}

		.button {
			width: 100%;
			height: 50px;
			border: 1px solid;
			background: #87B4B5;
			border-radius: 25px;
			font-size: 18px;
			color: darkblue;
			font-weight: 700;
			cursor: pointer;
			outline: none;
		}

		.button:hover {
			background: #047F80;
		}

		* {
			margin: 0;
			padding: 0;
		}

		.waveimg{
	width: 100%;
	position: absolute;
	display: block;
	top: 28%;
	z-index: -1;
	opacity: 0.3;
}

.btnSubmit
{
    color: #87B4B5 ;
}
    </style>
</head>

<body>
<section id = "header" >
        <a href="#"><img src="img/logo.png" width="200" height="200" class = "logo"></a>
        <div>
            <ul id = "navbar">
				<li><a href="Adminadd.php">Add Product</a></li>
                <li><a href="Adminview.php">View Product</a></li>
                
				<li><a href="AdminLogin.php"><i class="fa-solid fa-user-lock" title="Admin"></i></a></li>

            </ul>
        </div>
	</section>
 
          
    <div class="form-style-5">
    <form action="Adminadd.php" method="post" enctype="multipart/form-data">
    <div class="last">
	<p><h1>&nbsp;Product Info</h1></p>
                
				<div class="txt_feild">
					<input type="text" name="adname" id="adname" placeholder="Product Name">
					<span></span>
				</div>
				<div class="txt_feild">
					<input type="textfeild" name="Price" id="Price" placeholder="Price">
					<span></span>
				</div>
                <div class="txt_feild">
                <input type="file" name="imageFile" id="imageFile" placeholder="Upload a Picture" required>
                <span></span>
                </div>
					<p>
					<label for="chkPublish">Publish the Advertisement :
                      <input type="checkbox" name="chkPublish">
					</label><br><br><br>
  				
				 
		
                <?php
	if(isset($_POST["btnSubmit"])){
		$productName = $_POST["adname"];
		$Price = $_POST["Price"];
		
		if(isset($_POST["chkPublish"])){
			$status = 1;
		}
		else{
			$status = 0;
		}
		
		$Image = "Uploads/".basename($_FILES["imageFile"]["name"]);
		move_uploaded_file($_FILES["imageFile"]["tmp_name"], $Image);
		
		//Connect database
		$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
	
		//Error handling
		if(!$con){
			die("Sorry, We are facing a technical issue");
		}
		//Sql Query
		$sql = "INSERT INTO `product` (`pid`, `pname`, `price`, `path`, `published`) VALUES (Null, '".$productName."', '".$Price."', '".$Image."', '".$status."')";

		//Execute the query against the database
		 if(mysqli_query($con, $sql)){
			 echo "Product was Added successfully.";
		 }
		else{
			echo "Oops, something went wrong, Please try again.";
		}
	}
?>
	<input type="submit" value="Add Post" name="btnSubmit" class="button"/>					
</form>
</div>
	</div>
</body>
</html>