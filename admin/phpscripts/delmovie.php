<?php
    function deleteMovie($id) {
		// echo $id;
		include('connect.php');
		$delstring = "DELETE FROM tbl_movies WHERE movies_id = {$id}";
		$delquery = mysqli_query($link, $delstring);
		if($delquery){
            $message= "The movie has been succesfuly deleted.";
            return $message;
		}else{
			$message = "There was a problem on your request. Please try again later.";
			return $message;
		}

		mysqli_close($link);
	}


?>