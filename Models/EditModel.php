<?php

if($api_type == 'user'){
	$user = mysqli_query($connect, "SELECT * FROM users WHERE Id = '$obj_id'");
	$user = mysqli_fetch_assoc($user);

	if(isset($_POST['updateUser'])){
		$email = $_POST['email'];
		$fio = $_POST['fio'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		mysqli_query($connect, "UPDATE users SET Fio='$fio', gender_id='$gender', birthday='$birthday', Email='$email' WHERE Id = '$obj_id'");
		header("Location: /main");
	}

	include_once './Templates/editUser.php';
}
if($api_type == 'film'){
	$film = mysqli_query($connect, "SELECT * FROM films WHERE Id = '$obj_id'");
	$film = mysqli_fetch_assoc($film);

	if(isset($_POST['updateFilm'])){
		$filmName = $_POST['filmName'];
		$country_id = $_POST['country_id'];
		$duration = $_POST['duration'];
		$link_img = $_POST['link_img'];
		$link_video = $_POST['link_video'];
		$age = $_POST['age'];
		$year_of_issue = $_POST['year_of_issue'];

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		mysqli_query($connect, "UPDATE films SET Name='$filmName', country_id='$country_id', duration='$duration', link_img='$link_img', year_of_issue='$year_of_issue', link_video='$link_video', age='$age' WHERE Id = '$obj_id'");
		header("Location: /main");
	}

	include_once './Templates/editFilm.php';
}

?>