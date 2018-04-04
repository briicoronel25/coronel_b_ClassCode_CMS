<?php

	function editUser($id, $fname, $username, $password, $email) {
		INCLUDE('connect.php');

		$updatestring = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$username}', user_pass = '{$password}', user_email = '{$email}'  WHERE user_id = {$id}";
		echo $updatestring;

		$updatequery = mysqli_query($link, $updatestring);
		if($updatequery){ 
			redirect_to("admin_index.php");
		}else{
			$message = "There was a problem changing your information, please fix it.";
			return $message;
		}

		mysql_close($link);
	}
	
?>