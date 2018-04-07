<?php
	
function logIn($username, $password, $ip) {
	require_once('connect.php');
	$username = mysqli_real_escape_string($link, $username);
	$password = mysqli_real_escape_string($link, $password);
	$loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}'";
	$user_set = mysqli_query($link, $loginstring);
	if(mysqli_num_rows($user_set)){
		$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
		if($found_user['user_attempts']>=3){
			$message = "You have tried more than 3 invalid attempts. Contact with Admin Support to solve this problem";
			return $message;
		}
		else{
			$user_pass=$found_user['user_pass'];
			if(password_verify($password,$user_pass)){
				$id = $found_user['user_id'];
				$_SESSION['user_id'] = $id;
				$_SESSION['user_date'] = $found_user['user_date'];
				$_SESSION['user_name'] = $found_user['user_fname'];
				if(mysqli_query($link, $loginstring)){
					$updatestring = "UPDATE tbl_user SET user_ip = '$ip' WHERE user_id={$id}";
					$updatequery = mysqli_query($link, $updatestring);
				}
				$message="success";
				return $message;
			}
			else{
				increaseAttempt($found_user['user-id']);
				$message= "Password is incorrect.<br>Please try again.";
				return $message;
			}

		}
	}
	else{
		$message = "Username is incorrect.<br>Please try again.";
		return $message;
	}
		mysqli_close($link);
}

function countLogins($id) {
	include('connect.php');

	$updateLogin = "UPDATE tbl_user SET user_logins = user_logins + 1, user_attempts=0 WHERE user_id = {$id}";

	
	$updateLoginQuery = mysqli_query($link, $updateLogin);
	if($updateLoginQuery) {
		return($updateLoginQuery);
	}

	else{

	}

	mysql_close($link);
}

function increaseAttempt($id){
	include('connect.php');

	$updateAttempt = "UPDATE tbl_user SET user_attempts= user_attempts + 1 WHERE user_id = {$id}";

	$updateAttemptQuery = mysqli_query($link, $updateAttempt);
	if($updateAttemptQuery) {
		return($updateAttemptQuery);
	}

	else{
		return null;
	}

	mysql_close($link);
}

?>