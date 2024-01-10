<?php session_start();
if(!isset($_SESSION["username"]))
{
	header ('location:AdminLogin.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pick-a-Book|Admin View</title>
<link rel="stylesheet" href="CSS/style.css">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
	
	<section id ="product1" class="section-p1">
			<div class = "pro-container">
			<?php
				//Connect database
				$con = mysqli_connect("localhost:3306", "root", "" ,"gopi");
				//Error handling
				if(!$con){
					die("Sorry, We are facing a technical issue");
				}
				
				$sql = "SELECT * FROM `product` WHERE `published` = 1";

				$result = mysqli_query($con, $sql);

				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result))
					
					{
			?>
	
			
			
				<div class="pro">
					<img src="<?php echo $row["path"]?>" alt="">
					<div class="des">
						<span>HOT</span>
						<h5><?php echo $row['pname'];?></h5>
						<div class="star">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<h4><?php echo $row['price'];?></h4>
						<a href="edit.php? id=<?php echo $row["pid"];?>">Edit</a> | 
						<a href="Deletehandler.php?id=<?php echo $row["pid"];?>">Delete</a>
					</div>
				</div>
            
					
			<?php
					}
				}
				
				mysqli_close($con);

			?>
			</div>
			</section>

</body>  
</html>