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
	<title>About Us</title>
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
	
<!----------------- About Us page------------------------------------>
<div class="header">
<div class="about-section">
	<div class="inner-container">
		<div class="ab"><h1>About Us</h1></div>
		<p class="text">An e-commerce website, by definition, is a website that allows you to buy and sell tangible goods, digital products or services online. Trade, be it barter exchange or buying and selling of goods and services has been prevalent for centuries. No one can be self-sufficient. And this brings out the need for demand and supply of goods and services. Transactions have been going on all over the world for centuries, locally, and across locations. Keeping the same concept in mind, now think electronic. However, also bear in mind that with the whole world going online, data privacy laws have become increasingly stringent. And before you begin, an eCommerce venture you should be aware of all the legal policies required for your eCommerce website.</p>
		<div class="skills">
			<span>web Design</span>
			<span>Photoshop & Illustrator</span>
			<span>Coding</span>
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