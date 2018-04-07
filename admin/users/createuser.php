<?php
	require_once('../phpscripts/config.php');
	require('../phpscripts/connect.php');
	include ('../phpscripts/PHPMailer.php');
	include ('../phpscripts/SMTP.php');
	include ('../phpscripts/OAuth.php');
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		//$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		
		//validating unique username
		$query = "SELECT * FROM tbl_user WHERE user_name = '{$username}'";
		$user_set = mysqli_query($link, $query);
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}
		else if(mysqli_num_rows($user_set)){
			$message = "Actual username is in use. Please enter another username.";
		}
		else{
			$pass = createUser($fname, $username, $email, $userlvl);
			if($pass!="Error"){
				$result= sendMail($fname,$username,$pass,$email);
				if($result=="Message sent successful!"){
					$message= "The account has been created. Please check your email to get your credentials.";
				}
				else{
					$message="There was a problem sending your credentials to your mail. Try again later.";
				}
			}
			else{
				$message="There was a problem setting up this user. Try again later.";
			}
		}
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link rel='stylesheet' href='../../css/bootstrap.min.css' />
<link rel='stylesheet' href='../../css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='../../css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='../../css/style.css' />
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<?php include('../../includes/header.html');?>
	
	<div id="loginPage">
	<div class="loginCon">
	<h1 class="title">Create an Account</h1>
	<?php if(!empty($message)){echo "<p class=\"message\">$message<p>";} ?>
	
	<form action="createuser.php" method="post">
	<label><h2>Name:</h2></label>
	<input class="inputLog" type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>" required><br><br>
	
	<label><h2>Username:</h2></label>
	<input class="inputLog" type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>" required><br><br>

	<label><h2>Email:</h2></label>
	<input class="inputLog" required type="email" name="email" value="<?php if(!empty($email)){echo $email;} ?>" required><br><br>

	<label><h2>User Level:</h2></label>
	<select required name="userlvl">
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</opton>
	</select><br><br>

	<input class="SubBtn" type="submit" name="submit" value="Create User">
	</form>

	<?php 
		if(confirm_logged_in()){
			echo "<a class='back' href='../index.php'> Back to Index </a>";
		}
		else{
			echo "<a class='back' href='../login.php'> Back to Login </a>";
		}
	?>

	</div>
	</div>
	
	<?php include('../../includes/footer.html');?>
</body>
</html>