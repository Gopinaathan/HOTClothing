<?php session_start();
if(!isset($_SESSION["username"]))
{
	header ('location:AdminLogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>HOT|AdminLogin</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <section id = "header" >
        <a href="#"><img src="img/logo.png" width="200" height="200" class = "logo"></a>
        <div>
            <ul id = "navbar">
				<li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping" title="Cart"></i></a></li>
				<li><a href="AdminLogin.php"><i class="fa-solid fa-user-lock" title="Admin"></i></a></li>

            </ul>
        </div>
	</section>

    <!--Admin page-->
	<table width="1200" height="500" align="center">
  <tbody>
    <tr>
      <td width="900">
	 <div class="main-section">
      <div class="dashbord dashbord-green">
        <div class="icon-section"> <br />
          <img src="img/add.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="Adminadd.php">Add Products </a> </div>
      </div>
		  
      <div class="dashbord dashbord-blue">
        <div class="icon-section"> <br />
          <img src="img/view.png" alt="" width="87" height="90" />
          <p>&nbsp;</p>
        </div>
        <div class="detail-section"> <a href="Adminview.php">View Products</a> </div>
      </div>
     
     
    </div>
	</td>
    </tr>
  </tbody>
</table>
	

</body>
</html>