<?php 
header("Location: /login");
setcookie('isLoggedIn',"",time()-3600,"/");
$userInfoArr = array('Fio', 'birthday', 'gender_id', 'Email', 'password');
foreach ($userInfoArr as $key) {
	setcookie($key,"",time()-3600,"/");
} ?>
