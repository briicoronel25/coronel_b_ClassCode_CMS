<?php

	function updateMovie($id,$title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre) {

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
        $updateString="UPDATE tbl_movies SET movies_title='{$title}', movies_year='{$year}', movies_runtime='{$runtime}', movies_storyline='{$storyline}', movies_release='{$release}' ";
        if($_FILES['cover']['name']){
            $updateString.= ", movies_cover='{$_FILES['cover']['name']}' ";
        }
        if($_FILES['trailer']['name']){
            $updateString.= ", movies_trailer='{$_FILES['trailer']['name']}' ";
        }
        $updateString.="WHERE movies_id='{$id}'";
		
		$updateresult= mysqli_query($link, $updateString);

		if($updateresult){
            // echo $lastID;
            if($genre){
			    $genstring = "UPDATE tbl_mov_genre SET genre_id='{$genre}' WHERE movies_id='{$id}'";
			    $genresult = mysqli_query($link, $genstring); //this is running our query, V important
            }
			$message= "Your movie entry was successfuly updated!";
			return $message;
		}
		else{
			$message= "There was an error on you request, please try again!";
			return $message;
		}
		
		mysqli_close($link);
	}

?>