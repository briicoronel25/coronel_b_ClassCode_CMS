<?php
	require_once('../phpscripts/config.php');
	
	if(!confirm_logged_in()){
        redirect_to("../login.php");
    }
	
	$id = $_SESSION['user_id'];

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$result= editUser($id, $fname, $username, $email);
		$message = $result;
	}
	// echo $id;
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	// echo $found_user;


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
	<h1 class='title'>Edit your info</h1>
	
	<?php if(!empty($message)){echo "<p class=\"message\">$message<p>";} ?>
	<!-- change the action -->
	<form action="edituser.php" method="post"> 
	<label><h2>First Name:</h2></label>
	<input class="inputLog" required type="text" name="fname" value="<?php echo $found_user['user_fname']; ?>"><br><br>
	
	<label><h2>Username:</h2></label>
	<input class="inputLog" required type="text" name="username" value="<?php echo $found_user['user_name']; ?>"><br><br>

	<label><h2>Email:</h2></label>
	<input class="inputLog" required type="email" name="email" value="<?php echo $found_user['user_email']; ?>"><br><br>

	<input class="SubBtn" type="submit" name="submit" value="Update info">
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