<?php

date_default_timezone_set('Asia/Almaty');

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
		echo 'ok';
		header("Location: /login");
	} else {
		echo 'Что-то пошло не так';
	};

}



?>