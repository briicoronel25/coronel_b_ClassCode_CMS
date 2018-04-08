<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MovReviews - Details</title>
<link rel='stylesheet' href='./css/bootstrap.min.css' />
<link rel='stylesheet' href='./css/bootstrap-grid.min.css' />
<link rel='stylesheet' href='./css/bootstrap-reboot.min.css' />
<link rel='stylesheet' href='./css/style.css' />
<link rel='stylesheet' href='./css/details_style.css' />
</head>
<body>
	<?php
		include('includes/header.html');


		if(!is_string($getSingle)){
			$row = mysqli_fetch_array($getSingle);
			echo "<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
				<h2 class=\"title\">{$row['movies_title']}</h2>
				<h5 class=\"title\"> Year </h5>
				<p class=\"p_year\">{$row['movies_year']}</p>
				<h5 class=\"title\"> Runtime </h5>
				<p class=\"p_details\">{$row['movies_runtime']}</p>
				<h5 class=\"title\"> Release </h5>
				<p class=\"p_details\">{$row['movies_release']}</p>
				<h5 class=\"title\"> StoryLine </h5>
				<p class=\"p_story\">{$row['movies_storyline']}</p>
				";
			
			if($row['movies_trailer']!=null && $row['movies_trailer']!="trailer_default.jpg" && $row['movies_trailer']!=""){
				echo "<div id=\"video-container\">
						<h4> Trailer </h4>
						<video width=\"480\" height=\"320\" controls >
							<source src=\"./videos/{$row['movies_trailer']}\" type=\"video/mp4\">
						</video>
					</div>";
			}
			echo "<p class='last_edit'> Last edited on: {$row['last_edit']}</p>";
			echo "<a class=\"back\" href=\"index.php\">Back to home...</a>";
		}else{
			echo "<p class=\"error\">{$getSingle}</p>";
		}

		include('includes/footer.html');
	?>
</body>
</html>