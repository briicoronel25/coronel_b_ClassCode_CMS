<?php

	require_once('../phpscripts/config.php');

	if(!confirm_logged_in()){
        redirect_to("../login.php");
    }
	// $ip = $_SERVER['REMOTE_ADDR'];
	// echo $id;
	$tbl="tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
        $id= $_POST['id'];
		$title = $_POST['title'];
		$cover = $_FILES['cover'];
		$year = $_POST['year'];
		$runtime = $_POST['runtime'];
		$storyline = $_POST['storyline'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];
		$uploadMovie = updateMovie($id,$title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre);
		$message = $uploadMovie;
    }
    
    $id= $_GET['id'];
    $movQuery=getSingle("tbl_movies","movies_id",$id);
    if($res = mysqli_fetch_array($movQuery)){
        $movieTitle= $res['movies_title'];
        $movieYear= $res['movies_year'];
        $movieRelease= $res['movies_release'];
        $movieRunTime= $res['movies_runtime'];
        $movieStoryline= $res['movies_storyline'];
    }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel='stylesheet' href='../../css/bootstrap.min.css' />
<link rel='stylesheet' href='../../css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='../../css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='../../css/style.css' />
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/movie.css">
</head>
<body>

    <?php include('../../includes/header.html');?>

    <div id="loginPage">
	<div class="loginCon">

	<h1 class="title">Add Movie Entry</h1>
    
    <?php if(!empty($message)){echo "<p class=\"message\">$message<p>";} ?>
    
    <form action="editmovie.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value='<?php echo $id ?>'>
		<label><h2>Movie Title:</h2></label>
		<input class="inputLog" required type="text" name="title" value="<?php if(!empty($movieTitle)){echo $movieTitle;} ?>"><br><br>
		<label><h2>Movie Cover Img:</h2></label>
		<input type="file" accept="image/*" name="cover" value="<?php if(!empty($movieCoverImg)){echo $movieCoverImg;} ?>"><br><br>
		<label><h2>Movie Year:</h2></label>
		<input class="inputLog" required type="text" name="year" value="<?php if(!empty($movieYear)){echo $movieYear;} ?>"><br><br>
		<label><h2>Movie Runtime:</h2></label>
		<input class="inputLog" required type="text" name="runtime" value="<?php if(!empty($movieRunTime)){echo $movieRunTime;} ?>"><br><br>
		<label><h2>Movie Storyline:</h2></label>
		<input class="inputLog" required type="text" name="storyline" value="<?php if(!empty($movieStoryline)){echo $movieStoryline;} ?>"><br><br>
		<label><h2>Movie Trailer:</h2></label>
		<input type="file" accept="video/mp4" name="trailer" value="<?php if(!empty($movieTrailer)){echo $movieTrailer;} ?>"><br><br>
		<label><h2>Movie Release:</h2></label>
		<input class="inputLog" required type="text" name="release" value="<?php if(!empty($movieRelease)){echo $movieRelease;} ?>"><br><br>
        <label><h2>Genre:</h2></label>
        <select name="genList">
			<option value="">Please Select a genre</option>
		<?php
			while($row = mysqli_fetch_array($genQuery)){
				echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
			}
		?>
		</select><br><br><br>
		<input type="submit" name="submit" value="update movie">
    </form>
    
    <?php 
		if(confirm_logged_in()){
			echo "<a class='back' href='../index.php'> Back to Index </a>";
		}
		else{
			echo "<a class='back' href='../login.php'> Back to Login </a>";
		}
	?>

    </div>
    </div>


    <?php include('../../includes/footer.html');?>
</body>
</html>