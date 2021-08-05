<?php 
session_start();
if(!isset($_SESSION['user'])) {
header('location:account.php');
} else{
	echo "Hi " . ucwords($_SESSION['user']['username']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1.0">
	<title>RedStore | Ecommerce Website Design</title>
	<link rel="stylesheet" href = "style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;300;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div class = "header">
	<div class="container">
		<div class="navbar">
		<div class = "logo">
			<a href="Ecom.php"><img src="images/logo.png" width = "125px"></a>
		</div>
			<nav>
				<ul id="MenuItems">
					<li><a href = "Ecom.php">Home</a></li>
					<li><a href = "products.php">Products</a></li>
					<li><a href = "about.php">About</a></li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href = "account.php">Account</a></li>
				</ul>
			</nav>
			<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>  
	<div class="row">
		<div class="col-2">
			<h1>Choose your fashion<br>We have latest collection</h1>
			<p>Success isn't always about greatness. It's about consistency hard work gain sucess. Greatness will come</p>
			<a href="" class="btn">Explore Now &#8594</a>
		</div>
	<div class="col-2">
		<img src="images/zain.png">
			</div>
		</div>
	</div>
</div>
<!------ featured categories ------------>

<div class= "categories">
	<div class="small-container"> 
		<div class="row">
		<div class="col-3">
		<img src="images/category-1.jpg">
	</div>
		<div class="col-3">
			<img src="images/category-2.jpg">
		</div>
		<div class="col-3">
			<img src="images/category-3.jpg">
			</div>
		</div>

</div>
	</div>
	
<!------ featured product ------------>
<div class= "small-container">
	<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="products-details.php"><img src="images/product-1.jpg"></a>
				<a href="products-details.php"><h4>Red Printed T-shirt</h4></a>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 400.00</p>
			</div>
				<div class="col-4">
				<img src="images/product-2.jpg">
				<h4>Black Spark Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs 1500.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-3.jpg">
				<h4>Puma Black paint</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 800.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-4.jpg">
				<h4>Puma Blue T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 550.00</p>
			</div>
			<div class="col-4">
				<img src="images/mannew1.jpg">
				<h4>Puma White T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 467.00</p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/product-5.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 400.00</p>
			</div>
				<div class="col-4">
				<img src="images/product-6.jpg">
				<h4>Black Spark Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs 1500.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-7.jpg">
				<h4>Puma Black paint</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 800.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-8.jpg">
				<h4>Puma Blue T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 550.00</p>
			</div>
			<div class="col-4">
				<img src="images/mannew2.jpg">
				<h4>Puma White T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 467.00</p>
			</div>
		</div>
		<!-------------------- Dusra---------------->
		
		<div class="row">
			<div class="col-4">
				<img src="images/product-9.jpg">
				<h4>Red Printed T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 400.00</p>
			</div>
				<div class="col-4">
				<img src="images/product-10.jpg">
				<h4>Black Spark Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
				</div>
				<p>Rs 1500.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-11.jpg">
				<h4>Puma Black paint</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 800.00</p>
			</div>
			<div class="col-4">
				<img src="images/product-12.jpg">
				<h4>Puma Blue T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 550.00</p>
			</div>
			<div class="col-4">
				<img src="images/mannew3.jpg">
				<h4>Puma White T-shirt</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class=" fa fa-star"></i>
					<i class="fa fa-star-half-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rs 467.00</p>
			</div>
		</div>
	</div>
<!---------------offer ---------->

	<div class="offer">
		<div class="smaller-container">
			<div class="row">
				<div class="col-2">
					<img src="images/exclusive.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusive Offer Availabel on RedStore</p>
					<h1>Smart Band 4</h4>
					<small>The Mi smart Band4 Feature a 39.9% larger (then mi band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
					<p></p>
					<a href="" class="btn">Buy Now &#8594</a>
				</div>
			</div>
		</div>
	</div>
	<!----------------testimonial--------------->
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text every</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-1.png">
					<h3>Scan Parker</h3>
 				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text every</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-2.png">
					<h3>Will Smith</h3>
 				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text every</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-3.png">
					<h3>Mabel Joe</h3>
 				</div>
			</div>
		</div>
	</div>
	
	<!------------brands--------------->
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-godrej.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
			</div>
		</div>	
	</div>
	<!---------Footer------------->
<div class="footer">
	<div class="container">
		<div class="row">

			<div class="footer-col-1">
				<h3>Download Our App</h3>
					<p>Dowonload App for Android and ios mobile phone.</p>
				<div class="app-logo">
					<img src="images/play-store.png">
					<img src="images/app-store.png">
				</div>
			</div>

	<div class="footer-col-2">
		<img src="images/logo-white.png">
		<p>Our Purpose Is To Sustainably Make the Pleasure and benefits of Sports Accessible to the many.</p>
	</div>

<div class="footer-col-3">
	<h3>Useful Links</h3>
		<ul>
			<li>Coupans</li>
			<li>Blog Post</li>
			<li>Return Policy</li>
			<li>Join Affiliate</li>
		</ul>
</div>

		<div class="footer-col-4">
			<h3>Follow us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>YouTube</li>
				</ul>
			</div>
		</div>
	<hr>
	<p class="copyright">Copyright 2020 - Mini Project</p>
	</div>
</div>
<!----------------js for toggle menu------------->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";
		
		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px") 
			{
				MenuItems.style.maxHeight = "200px";
			}
			else
			{
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>
</body>
</html>