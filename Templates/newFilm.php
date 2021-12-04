<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<title>Новый фильм</title>
</head>
<body>
	<div class="container d-flex align-items-center justify-content-center registation-form-wrap">
		<form method="post" class="registation-form d-flex flex-column" style="width: 500px;">
			<h1 class="text-center">Новый фильм</h1>
			<label for="link_img">Укажите ссылку на обложку</label>
			<input class="form-control mb-3" type="text" name="link_img" id="link_img">
			<label for="filmName">Название фильма</label>
			<input class="form-control mb-3" type="text" name="filmName" placeholder="Название фильма">
			<label for="duration">Укажите продолжительность(в часах)</label>
			<input class="form-control mb-3" type="number" name="duration" placeholder="Продолжительность(в часах)">
			<p class="mb-1">Укажите страну выпуска</p>
			<select name="country_id" class="form-select mb-3">
				<option value="1">Казахстан</option>
				<option value="2">США</option>
			</select>
			<label for="year_of_issue">Укажите год выпуска</label>
			<input class="form-control mb-3" type="number" name="year_of_issue" placeholder="Продолжительность(в часах)">
			<label for="age">Разрешенный возраст для просмотра</label>
			<input class="form-control mb-3" type="number" name="age" placeholder="Разрешенный возраст для просмотра">
			<label for="link_video">Укажите ссылку на фильм</label>
			<input class="form-control mb-3" type="text" name="link_video" id="link_video">
			<input class="btn btn-primary mb-3" type="submit" value="Добавить" name="newFilm">
			<a href="/main" style="text-decoration: underline!important;">Назад</a>
		</form>
	</div>
</body>
</html>