<?php 

$message = array();
if(isset($_POST['submit']) && $_POST['submit']=='login-form'){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$erro = 0 ;
		if(isset($email) && empty($email)){
			$message['loin_email'] = 'Email field is rquired';
			$error = 1;
		} else if(!empty($email)){
			// echo "select count(*) as usercount from users where email ='$email'";
			$result = mysqli_query($con, "select * from users where email ='$email'");
			$num = mysqli_num_rows($result);
			if($num==1){
				$error=0;
			}else{
				$message['not_exists'] = 'Email not exists ! please register and try again';
				$error=1;
			}
		}
		if(isset($password) && empty($password)){
			$message['login_password'] = 'Password field is rquired';
			$error = 1;
		}
		if($error==0){
			session_start();
			$result = mysqli_query($con, "select username,email,id from users where email ='$email'");
			$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
			// echo "<pre>";
			// print_r($user);die;
			$_SESSION['user'] = $user;
			header('location:Ecom.php');
		}
}
// print_r($mysqli);
if(isset($_POST['submit']) && $_POST['submit']=='register-form'){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if(isset($username) && empty($username)){
			$message['username'] = 'Username field is rquired';
			$error = 1;
		}
		if(isset($email) && empty($email)){
			$message['email'] = 'Email field is rquired';
			$error = 1;
		}else if(!empty($email)){
			// echo "select count(*) as usercount from users where email ='$email'";
			$result = mysqli_query($con, "select * from users where email ='$email'");
			$num = mysqli_num_rows($result);
			if($num>0){
			$message['exists'] = "User already exists";
				$error=1;
			}else{
				$error=0;
			}
		}
		if(isset($password) && empty($password)){
			$message['password'] = 'Password field is rquired';
			$error = 1;
		}
		if($error==0){
		$q = "insert into users(username, email, pass) values ('$username' , '$email',md5($password))";
		$result = mysqli_query($con, $q);
		if($result){
			$message['success'] = 'You are successfully registered';
		}else{
			$message['failed'] = 'not registered';
		}
		}

	// $num = mysqli_num_rows($result);	
}
// print_r($message);


?>