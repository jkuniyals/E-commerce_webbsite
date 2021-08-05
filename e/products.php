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
	<title>All Products - RedStore | Products</title>
	<link rel="stylesheet" href = "style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
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
	</div>


<div class= "small-container">
		
		<div class="row row-2">
		<div class ="row">
			<h2>All Products</h2>
			<select>
				<option>Default Shorting</option>
				<option>Short by price</option>
				<option>Short by popularity</option>
				<option>Short by rating</option>
				<option>Short by sale</option>
			</select>
		</div>

		
		
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
		
		<div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
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