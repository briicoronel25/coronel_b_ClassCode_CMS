<?php
	session_start();

	function confirm_logged_in() {
		if(isset($_SESSION['user_id'])){
			return true;
		}
		else{
			return false;
		}
	}

	function logged_out() {
		session_destroy();
		$_SESSION = [];
		redirect_to("../login.php");
	}


?>