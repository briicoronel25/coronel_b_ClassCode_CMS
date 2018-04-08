<?php

	require_once('admin/phpscripts/config.php');

	$tbl="tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_GET['filter']) && $_GET['genList']!="all"){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['genList'];
		$getMovies = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='./css/bootstrap.min.css' />
<link rel='stylesheet' href='./css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='./css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='./css/style.css' />
<link rel="stylesheet" href="./css/index_style.css">
<title>MovReviews</title>
</head>
<body>
	<?php
		include('includes/header.html');
		
		if(isset($_GET['filter']) && $_GET['genList'] !="all"){
			$genre= "Listing movies from ".$_GET['genList'];
		}
		else{
			$genre="Listing all movies";
		}

		echo "<h2> Welcome To MovReviews</h2>";
		echo 
		"<div>
			<div class='filter-title'>
				<h4>$genre</h4>
			</div>
			<div class='filter-form'>
				<form action='index.php' method='get'>
				<select required name='genList'>
				<option value=''>Please Select a genre</option>
				<option value='all'> All </option>";
		while($row = mysqli_fetch_array($genQuery)){
			echo "<option value=\"{$row['genre_name']}\">{$row['genre_name']}</option>";
		};
		echo "
				</select>
				<input type='submit' name='filter' value='filter movies'>
				</form>
			</div>
		 </div>";
		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
					<h2 class=\"title\">{$row['movies_title']}</h2>
					<p class=\"p_year\">{$row['movies_year']}</p>
					<a class=\"a_details\" href=\"details.php?id={$row['movies_id']}\">More Details...</a>
					<br><br>";
			}
			if(mysqli_num_rows($getMovies)<=0){
				echo"<div>
						<h3 class='no_results'> No Results Where found! </h3>
					</div>";
			}
		}
		else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}

		include('includes/footer.html');
	?>
</body>
</html>