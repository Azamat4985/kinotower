<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<title>Регистрация</title>
</head>
<body>
	<div class="container d-flex align-items-center justify-content-center registation-form-wrap">
		<form method="post" class="registation-form d-flex flex-column">
			<h1 class="text-center mb-3">Новый пользователь</h1>
			<input class="form-control mb-3" type="email" name="email" placeholder="E-mail">
			<input class="form-control mb-3" type="password" name="password" placeholder="Пароль">
			<input class="form-control mb-3" type="text" name="fio" placeholder="ФИО">
			<p class="mb-1">Укажите Ваш пол</p>
			<select name="gender" class="form-select mb-3">
				<option value="1">Мужской</option>
				<option value="2">Женский</option>
			</select>
			<label for="birthday">Укажите дату рождения</label>
			<input class="form-control mb-3" type="date" name="birthday" id="birthday">
			<input class="btn btn-primary mb-3" type="submit" value="Регистрация" name="reg">
			<a href="/login" style="text-decoration: underline!important;">Войти в аккаунт</a>
		</form>
	</div>
</body>
</html>