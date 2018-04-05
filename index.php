<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['filter'])){
		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = $_GET['filter'];
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
		
		echo "<h2> Welcome To MovReviews</h2>";
		echo "<h4> Listing movies...</h4>";
		if(!is_string($getMovies)){
			while($row = mysqli_fetch_array($getMovies)){
				echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
					<h2 class=\"title\">{$row['movies_title']}</h2>
					<p class=\"p_year\">{$row['movies_year']}</p>
					<a class=\"a_details\" href=\"details.php?id={$row['movies_id']}\">More Details...</a>
					<br><br>";
			}
		}else{
			echo "<p class=\"error\">{$getMovies}</p>";
		}

		include('includes/footer.html');
	?>
</body>
</html>