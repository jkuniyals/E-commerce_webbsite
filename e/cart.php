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
	<title>Cart Details</title>
	<link rel="stylesheet" href = "style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;300;500;600&display=swap" rel="stylesheet">
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
	

<!------------- cart items details--------------->

<div class="small-container cart-page">
	
	<table>
		<tr>
			<th>Product</th>
			<th>Quality</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/buy-1.jpg">
					<div>
						<p>Red Printed T-shirt</p>
						<small>Price: Rs400</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" value="1" onclick="this.parentNode.querySelector('input[type=number]').stepDown
			()" class="minus"</td>
			<td>Rs400</td>
		</tr>
		
		
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/buy-2.jpg">
					<div>
						<p>Black Spark Shoes</p>
						<small>Price: Rs1500</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" value="1"></td>
			<td>Rs1500</td>
		</tr>
		
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/buy-3.jpg">
					<div>
						<p>Puma Black Paint</p>
						<small>Price: Rs800</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" value="1"></td>
			<td>Rs800</td>
		</tr>	
	</table>
	
	<div class="total-price">
	<table>
		<tr>
			<td>Subtotal</td>
			<td>Rs.2700</td>
		</tr>
		<tr>
			<td>Tax</td>
			<td>Rs.30</td>
		</tr>
		<tr>
			<td>Total</td>
			<td>Rs.2730</td>
		</tr>
	</table>
	
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