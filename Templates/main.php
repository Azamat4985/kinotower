<?php

$isLoggedIn = $_COOKIE['isLoggedIn'];
if(!$isLoggedIn){
	header("Location: /login");
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="../js/main.js"></script>
	<title>Document</title>
</head>

<body>
	<?php include_once './Templates/header.php' ?>

	<main class="d-flex">
		<?php include_once './Templates/menu.php' ?>
		<div class="content__container">
			<h1 class="content__title mb-3">Пользователи</h1>
			<div class="content-wrap">
					
			</div>
		</div>
	</main>


</body>

</html>