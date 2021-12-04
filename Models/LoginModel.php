<?php 

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$emails = mysqli_query($connect, "SELECT Email FROM `users`");
	$emailList = [];

	while ($emailItem = mysqli_fetch_assoc($emails)) {
		$emailList[] = $emailItem['Email'];
	}
	foreach($emailList as $emailItem){
		if($emailItem == $email){
			$passwordDb = mysqli_query($connect, "SELECT password FROM users WHERE Email = '$emailItem'");
			$passwordDb = mysqli_fetch_assoc($passwordDb);
			if($password == $passwordDb['password']){
				header("Location: /main");
				setcookie('isLoggedIn', true);
				$userInfoArr = array('Fio', 'birthday', 'gender_id', 'Email', 'password');
				foreach ($userInfoArr as $key) {
					$valueDb = mysqli_query($connect, "SELECT * FROM users WHERE Email = '$emailItem'");
					$valueDb = mysqli_fetch_assoc($valueDb);
					// echo $valueDb[$key];				
					setcookie($key, $valueDb[$key]);
					// print $_COOKIE['Fio'];
				}
			} else {
				echo 'password incorrect';
			}
		} else {
			echo 'Email не найден';
		}
	}
}

echo $_COOKIE['Email'];
