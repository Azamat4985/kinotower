<?php 

$q = $_GET['q'];
$params = explode('/', $q);

$path = $params[0];
if(isset($params[1])){
	$api_type = $params[1];
}
if(isset($params[2])){
	$obj_id = $params[2];
}
$method = $_SERVER['REQUEST_METHOD'];
$isLoggedIn = $_COOKIE['isLoggedIn'];



if($path == 'registration' && !$isLoggedIn){
	require_once './Models/RegistrationModel.php';
	require_once './Templates/registration.php';
}

if($path == 'login' && !$isLoggedIn){
	require_once './Models/LoginModel.php';
	require_once './Templates/login.php';
}

if($path == 'main' || $path == ''){
	require_once './Templates/main.php';
}

if($path == 'logout'){
	require_once './Models/LogoutModel.php';
}

if($path == 'get'){
	if($method == 'GET'){
		require_once './Api/get.php';
	}
}

if($path == 'edit'){
	require_once './Models/EditModel.php';
}

if($path == 'new'){
	require_once './Models/NewModel.php';
}

if($path == 'delete'){
	require_once './Models/DeleteModel.php';
}