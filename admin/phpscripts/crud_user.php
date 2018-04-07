<?php
	
	function createUser($fname, $username, $email, $userlvl) {
		include('connect.php');

		$user_password = randomPassword();
		$enc_password= password_hash($user_password,PASSWORD_BCRYPT); //This function uses BCRYPT ALGORITHM TO ENCRYPT THE PASSWORD
		$userString = "INSERT INTO tbl_user VALUES(NULL,'{$fname}', '{$username}', '{$enc_password}', '{$email}', CURRENT_TIMESTAMP, '{$userlvl}', 'no', 0, 0, 0)";
		//echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			mysqli_close($link);
			$message= $user_password;
			return $message;
		}else{
			mysqli_close($link);
			$message = "Error";
			return $message;
		}
	}

	function editUser($id, $fname, $username, $email) {
		INCLUDE('connect.php');

		$updatestring = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$username}', user_email = '{$email}'  WHERE user_id = {$id}";
		$updatequery = mysqli_query($link, $updatestring);
		if($updatequery){ 
			$message="Your changes was successfuly stored!";
			return $message;
		}
		else{
			$message = "There was a problem changing your information, please try later.";
			return $message;
		}

	}

	function deleteUser($id) {
		// echo $id;
		include('connect.php');
		$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
		$delquery = mysqli_query($link, $delstring);
		if($delquery){
			redirect_to("../users/deleteuser.php");
		}else{
			$message = "Some problems was encountered!";
			return $message;
		}

		mysqli_close($link);
	}




?>