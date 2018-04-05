<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	// echo $id;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
			countLogins($id);

		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel='stylesheet' href='../css/bootstrap.min.css' />
<link rel='stylesheet' href='../css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='../css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='../css/style.css' />
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
	<?php include('../includes/header.html');?>

	<div id="loginPage">
	<div class="loginCon">
		<h1 id="title">Welcome To MovReviews<br> Admin Site</h1>
		
		<?php if(!empty($message)){echo "<p class=\"message\">$message<p>";} ?>
		
		<form action="login.php" method="post">
			<label><h2>Username:</h2></label>
			<input class="inputLog" type="text" name="username" value="">
			<br>
			<label><h2>Password:</h2></label>
			<input class="inputLog" type="password" name="password" value="">
			<br>
			<input class="SubBtn" type="submit" name="submit" value="Log in">
		</form>
	
		<a id="createUser" href="./users/createuser.php">Create New Account Here</a>
	</div>
	</div>
	<?php include('../includes/footer.html');?>

</body>
</html>