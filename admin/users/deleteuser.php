<?php
	
	require_once('../phpscripts/config.php');
	
	if(!confirm_logged_in()){
        redirect_to("../login.php");
    }

	$tbl = "tbl_user";
	$users = getAll($tbl);
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

	<h1 class="delete_title">Delete Users</h1>
	<?php
		while($row = mysqli_fetch_array($users)) {
			echo "<h3 class='delete_name'>{$row['user_fname']}</h3>
			<a class='delete_link' href=\"../phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
		}
	?>
	
	<?php 
		if(confirm_logged_in()){
			echo "<a class='back' href='../index.php'> Back to Index </a>";
		}
		else{
			echo "<a class='back' href='../login.php'> Back to Login </a>";
		}
	?>
	<?php include('../../includes/footer.html');?>
</body>
</html>