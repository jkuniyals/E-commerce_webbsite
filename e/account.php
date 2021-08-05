<?php 
include('db.php');
include('authentication.php');
// print_r($_POST);

// session_start();

// if(!isset($_SESSION['uname'])) {
// 	if(isset($_REQUEST['username1']) || isset($_REQUEST['password1'])) {
// 	$uname = $_REQUEST['username1'];
// 	$pass = $_REQUEST['password1'];
// 	$_SESSION['uname'] = $uname;
// 	$_SESSION['pass'] = $pass;
	
	
// 	$q = " SELECT * FROM user WHERE username = '$uname' $$ pass = '$pass'";
	
// 	$result = mysqli_query($con, $q);
	
// 	$num = mysqli_num_rows($result);

// 	if($num == 1) {
// 	header('location:Ecom.php');
// 	}
// 	else {
// 		header('location:account.php');
// 		echo "Wrong user name and password";
// 	}}
// }else {
// 	header('location:Ecom.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name= "viewport" content="width=device-width, initial-scale=1.0">
	<title>Account Details</title>
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

<!----------------------- account page---------------->
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="images/zain.png" width="100%">
			</div>
			
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>
					
					<form id="LoginForm" method="post" action="">
						<input type="email" required name="email" placeholder="Email">
						<?php echo isset($message['login_email']) && !empty($message['login_email']) ? '<label>'.$message['login_email'].'</label>' : '' ; ?>
						<input type="password" required name="password" placeholder="Password">
						<?php echo isset($message['login_password']) && !empty($message['login_password']) ? '<label>'.$message['login_password'].'</label>' : '' ; ?>
						<button type="submit" name="submit" value="login-form" class="btn">Login</button>
						<?php echo isset($message['not_exists']) && !empty($message['not_exists']) ? '<label>'.$message['not_exists'].'</label>' : '' ; ?>
						<a href="">Forgot password</a>
					</form>
					<form id="RegForm"  method="post" action="">
						<input type="text" name="username" placeholder="Username">
						<?php echo isset($message['username']) && !empty($message['username']) ? '<label>'.$message['username'].'</label>' : '' ; ?>
						<input type="email" name="email" placeholder="Email">
						<?php echo isset($message['email']) && !empty($message['email']) ? '<labelp>'.$message['email'].'</label>'  : '' ; ?>
						<input type="password" name="password" placeholder="Password">
						<?php echo isset($message['password']) && !empty($message['password']) ? '<label>'.$message['password'].'</label>'  : '' ; ?>
						<button type="submit"  name="submit" value="register-form" class="btn">Login</button>
						<a href="">Forgot password</a>
						<?php echo isset($message['success']) && !empty($message['success']) ? '<label>'.$message['success'].'</label>'  : '' ; ?>
						<?php echo isset($message['failed']) && !empty($message['failed']) ? '<label>'.$message['failed'].'</label>'  : '' ; ?>
						<?php echo isset($message['exists']) && !empty($message['exists']) ? '<label>'.$message['exists'].'</label>'  : '' ; ?>
						
					</form>
				</div>
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

<!-------------- js for toggol form----------------->

<script>
	var LoginForm = document.getElementById("LoginForm");
	var RegForm = document.getElementById("RegForm");
	var Indicator = document.getElementById("Indicator");
	
	function register(){
	
		RegForm.style.transform = "translateX(0px)"
		LoginForm.style.transform = "translateX(0px)"
		Indicator.style.transform = "translateX(100px)"
	}
	
	function login(){
	
		RegForm.style.transform = "translateX(300px)"
		LoginForm.style.transform = "translateX(300px)"
		Indicator.style.transform = "translateX(0px)"
	}
	
</script>
</body>
</html>