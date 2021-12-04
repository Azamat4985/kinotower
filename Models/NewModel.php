<?php
date_default_timezone_set('Asia/Almaty');

if($api_type == 'user'){
	if(isset($_POST['reg'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$fio = $_POST['fio'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		$now = date("Y-m-d H:i:s");
	
		// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$query = "INSERT into `users` (Fio, birthday, gender_id, Email, password, created_at, deleted_at) VALUES ('$fio', '$birthday', '$gender', '$email', '$password', '$now', NULL)";
		if(mysqli_query($connect, $query)){
			header("Location: /main");
		} else {
			echo 'Что-то пошло не так';
		};
	
	}
	include_once './Templates/newUser.php';
}
if($api_type == 'film'){
	if(isset($_POST['newFilm'])){
		$filmName = $_POST['filmName'];
		$country_id = $_POST['country_id'];
		$duration = $_POST['duration'];
		$link_img = $_POST['link_img'];
		$link_video = $_POST['link_video'];
		$age = $_POST['age'];
		$year_of_issue = $_POST['year_of_issue'];
		$now = date("Y-m-d H:i:s");

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		mysqli_query($connect, "INSERT INTO films (Name, country_id, duration, link_img, link_video, year_of_issue, age, created_at) VALUES ('$filmName', '$country_id', '$duration', '$link_img', '$link_video', '$year_of_issue', '$age', '$now')");
		header("Location: /main");
	}
	include_once './Templates/newFilm.php';
}





?>