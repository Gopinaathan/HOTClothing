<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>Shop</title>
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

    <section id="page-header">
        
        <h2>#Stayhome</h2>
        
        <p>Save more with coupons & up to 70% off!</p>
        
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
            <div class="pro" onclick="window.location.href = 'product1.html'">
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
                        </div>
                <a href="cart.html"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <!-- <div class="pro">
                <img src="img2/c18.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear Double Pkt L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2,499.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c19.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear Check L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 2,499.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c20.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5> Detailed Double Pkt L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c21.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear Check L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c22.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear Check L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c23.jpg" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5> Detailed Fannel L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c24.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>
        
            <div class="pro">
                <img src="img2/c25.jpg" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 4,995.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c5.webp">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c6.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c7.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rs 3,295.00</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c8.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c9.jpg" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c10.webp" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div>

            <div class="pro">
                <img src="img2/c11.jpg" alt="">
                <div class="des">
                    <span>HOT</span>
                    <h5>Casual Wear L/S Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-sharp fa-solid fa-cart-shopping cart"></i></a>
            </div> -->

            <?php
					}
				}
				
				mysqli_close($con);

			?>
        </div>
    </section>

    <!-- <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></i></a>
    </section> -->
 

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletters</h4>
            <p>Get E-mail updates about our lastest shop and <span>special offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button>Subscribe</button>
        </div>

    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="" width="200" height="200">
            
           
        </div>

        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong> SLIIT Malabe Campus, New Kandy Rd, Malabe 10115</p>
            <p><strong>Phone:</strong> +9475470470</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        </div>

        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
        

        <div class="col">
            <h4>About</h4>
            <a href="login.html">Login</a>
            <a href="about.html">About us</a>
            <a href="contact.html">Contact us</a>
            <a href="privacy.html">Privacy Policy</a>
        </div>

        <!-- <div class="col">
            <h4>My Account</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div> -->

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
            <img src="img1/pay/app.jpg" alt="">
            <img src="img1/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="img1/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>©2023 HOT Clothing All rights reserved. Website Design by: Gopi</p>
        </div>
    </footer>

    
    <script src="script.js"></script>
</body>
</html>