<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <title>HOT</title>
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

    <section id="page-header" class="about-header cart-header">
        
        <h2>#Grab your favourites</h2>
        
        <p> BUY IT, GET OFFs</p>
        
    </section>

    <section id="cart" class="section-p1">
        <table width ="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Product</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img2/c1.webp" alt=""></td>
                    <td>Casual Wear L/S Shirt</td>
                    <td>Rs 2,499.00</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs 2,499.00</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img2/c4.webp" alt=""></td>
                    <td>Casual Wear S/S Shirt</td>
                    <td>Rs 2,499.00</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs 2,499.00</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img2/t1.webp" alt=""></td>
                    <td>Denim Pant (Light Wash)</td>
                    <td>Rs 7,990.00</td>
                    <td><input type="number" value="1"></td>
                    <td>Rs 7,990.00</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply coupon</h3>
            <div>
                <input type="text" placeholder="Enter the Coupon">
                <button class="but">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Rs 12,988.00</td>
                </tr>
                <tr>
                    <td>Delivery fee</td>
                    <td>Rs 240.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>Rs 13,228.00</strong></td>
                </tr>
            </table>
            <button class="but">Proceed to checkout</button>
        </div>
    </section>

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