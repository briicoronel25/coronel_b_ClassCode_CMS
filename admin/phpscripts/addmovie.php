<?php

	function addMovie($title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre) {

		if($_FILES['cover']['type'] == "image/jpeg" || $_FILES['cover']['type'] == "image/jpg"){  //check what the file is first and allow only photo files. || means "or"	
			$target = "../../images/{$cover['name']}";
			if(!move_uploaded_file($_FILES['cover']['tmp_name'], $target)){
				$message= "There was an error storing your cover file, please try again.";
				return $message;
				//$orig = $target;
				//$th_copy = "../images/{TH_{$cover['name']}";
				//if(!copy($orig, $th_copy)){
				//	echo "failed to copy";
				//}
				
			}
		}
		else if($_FILES['cover']['name']){
			$message= "You should have to upload cover files with jpeg or jpg extension.  ";
			return $message;
		}
		
		if($_FILES['trailer']['type']== "video/mp4" || substr($_FILES['trailer']['name'], -3) === "mp4"){
			$target = "../../videos/{$_FILES['trailer']['name']}";
			if(!move_uploaded_file($_FILES['trailer']['tmp_name'], $target)){
				$message= "There was an error storing your video file or your file is too big, please try again. ";
				return $message;
			}
		}
		else if($_FILES['trailer']['name']){
			$message= "You should have to upload trailer video files with mp4 extension. ";
			return $message;
		}
		
		//$size = getimagesize($orig);
		include('connect.php');
		$addString = "INSERT INTO tbl_movies VALUES( NULL, '{$cover['name']}', '{$title}', '{$year}', '{$runtime}', '{$storyline}', '{$_FILES['trailer']['name']}', '{$release}', CURRENT_TIMESTAMP )";
		// echo $addString;

		$addresult= mysqli_query($link, $addString);

		if($addresult){
			$qstring = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
			$lastmovie = mysqli_query($link, $qstring);
			$row = mysqli_fetch_array($lastmovie);
			$lastID = $row['movies_id'];
			// echo $lastID;
			$genstring = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
			$genresult = mysqli_query($link, $genstring); //this is running our query, V important

			$message= "Your movie entry was successfuly added!";
			return $message;
		}
		else{
			$message= "There was an error on you request, please try again!";
			return $message;
		}
		
		mysqli_close($link);
	}

?>