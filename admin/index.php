<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link rel='stylesheet' href='../css/bootstrap.min.css' />
<link rel='stylesheet' href='../css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='../css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='../css/style.css' />
<link rel="stylesheet" href="./css/index.css">
</head>
<body>
	<?php include('../includes/header.html');?>
	
	<h1 class='title'>Index Page of Admin Site</h1>
	<?php echo "<h2>Welcome back, {$_SESSION['user_name']}</h2>"; ?>
	
	<h3> User menu </h3>
	<a href='users/createuser.php'>Create User</a>
	<a href='users/edituser.php'>Edit User</a>
	<a href='users/deleteuser.php'>Delete User</a>

	<br><br>
	<h3> Movies menu </h3>
	<a href='movies/createmovie.php'>Add Movie</a>
	<a href='movies/editmovie.php'>Edit Movie Info</a>
	<a href='movies/deletemovie.php'>Delete Movie</a>
	<br><br>
	<a href='phpscripts/caller.php?caller_id=logout'>Sign Out</a>

	
	<?php include('../includes/footer.html');?>
</body>
</html>