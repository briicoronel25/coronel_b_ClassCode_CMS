<?php

	require_once('../phpscripts/config.php');

	$tbl="tbl_movies";
	$movQuery = getAll($tbl);

	if(isset($_GET['submit'])){
        $movie = $_GET['movie'];
        $movieQuery= getSingle($tbl,"movies_id",$movie);
        if($row = mysqli_fetch_array($movieQuery)){
            $html="
            <img class='img-mov-delete' src='../../images/{$row['movies_cover']}'>
            <h3 class='name-mov-delete'>{$row['movies_title']}</h3>
            <form action='deletemovie.php' method='post'>
                <input type='hidden' name='id' value={$row['movies_id']}>
                <input type='submit' name='submit' value='Delete Movie'>
            </form>
            ";
        }
        else{
            $message="There was an error on your request. Please try again later.";
        }
    }
    
    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $message= deleteMovie($id);
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
</head>
<body>

    <?php include('../../includes/header.html');?>

    <div id="loginPage">
	<div class="loginCon">
        <h1 class="title">Delete Movies</h1>
        
        <?php if(!empty($message)){echo "<p class=\"message\">$message<p>";} ?>

        <form action="deletemovie.php" method="get">
            <label><h2>Select a Movie: </h2></label>
            <select required name="movie">
                <option value="">Please Select a Movie</option>
            <?php
                while($row = mysqli_fetch_array($movQuery)){
                    echo "<option value=\"{$row['movies_id']}\">{$row['movies_title']}</option>";
                }
            ?>
            </select><br><br><br>
            <input type="submit" name="submit" value="Select Movie">
        </form>
        
        <?php if(!empty($html)){echo $html;}?>

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