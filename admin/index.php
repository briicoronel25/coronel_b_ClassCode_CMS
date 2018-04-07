<?php
	require_once('phpscripts/config.php');
	if(!confirm_logged_in()){
        redirect_to("login.php");
	}
	
	$userQuery= getSingle("tbl_user","user_id",$_SESSION['user_id']);
	$row = mysqli_fetch_array($userQuery);
	$user_lvl= $row['user_level'];
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
	<?php 
		if($user_lvl==2 || $user_lvl=="2"){
			echo "<a href='users/createuser.php'>Create User</a>";
			echo "<a href='users/deleteuser.php'>Delete User</a>";
		}
	?>
	<a href='users/edituser.php'>Edit User</a>

	<br><br>
	<h3> Movies menu </h3>
	<a href='movies/createmovie.php'>Add Movie</a>
	<a href='movies/selectmovie.php'>Edit Movie Info</a>
	<a href='movies/deletemovie.php'>Delete Movie</a>
	<br><br>
	<a href='phpscripts/caller.php?caller_id=logout'>Sign Out</a>

	
	<?php include('../includes/footer.html');?>
</body>
</html>