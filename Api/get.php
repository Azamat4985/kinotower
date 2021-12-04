<?php 

header('Content-type: json/application');

if($api_type == 'users'){
	$users = mysqli_query($connect, "SELECT * FROM `users`");
	$userList = [];

	while ($user = mysqli_fetch_assoc($users)) {
		$userList[] = $user;
	}
		
	echo(json_encode($userList));
}
if($api_type == 'films'){
	$films = mysqli_query($connect, "SELECT * FROM `films`");
	$filmsList = [];

	while ($film = mysqli_fetch_assoc($films)) {
		$filmsList[] = $film;
	}
		
	echo(json_encode($filmsList));
}

if($api_type == 'me'){
	echo(json_encode($_COOKIE['Fio']));
}