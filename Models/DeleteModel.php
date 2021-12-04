<?php

if($api_type == 'user'){
	$user = mysqli_query($connect, "SELECT * FROM users WHERE Id = '$obj_id'");
	$user = mysqli_fetch_assoc($user);
	$userId = $user['Id'];

	if(isset($_POST['delete'])){
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		mysqli_query($connect, "DELETE FROM users WHERE Id = '$userId'");
		header("Location: /main");
	}

	include_once './Templates/delete.php';
}

if($api_type == 'film'){
	$film = mysqli_query($connect, "SELECT * FROM film WHERE Id = '$obj_id'");
	$film = mysqli_fetch_assoc($film);
	$filmId = $film['Id'];

	if(isset($_POST['delete'])){
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		mysqli_query($connect, "DELETE FROM films WHERE Id = '$filmId'");
		header("Location: /main");
	}

	include_once './Templates/delete.php';
}

?>