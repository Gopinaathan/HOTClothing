<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>HOT|AdminLogin</title>
    <link rel="stylesheet" href="CSS/style.css">
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

	
		<section id="login-details">
        <form action="AdminLoginHandler.php" method="post">
            <h2>Log-In</h2>
            <input type="text" placeholder="Admin Name" id="adminName" name="adminName">
            <input type="password" placeholder="Password" id="adminPass" name="adminPass">
			
            <button type="submit" name="btnSubmit" class="but">Log-In</button>
        </form>
		</section>
</body>
</html>
