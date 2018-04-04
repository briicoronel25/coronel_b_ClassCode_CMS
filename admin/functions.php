<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	function redirect_to($location) {
		if($location !=NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function multiReturns($value) { //this function is for our multiple return, getting back multiple values
		$addPassed = $value;
		$newResult = 7 + $addPassed;
		$newResult2 = $value * 12;
		// echo $newResult;
		return array($newResult, $newResult2);
	} 

?>

