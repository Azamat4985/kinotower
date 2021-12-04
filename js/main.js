document.addEventListener("DOMContentLoaded", () => {
  let menuLinks = document.getElementsByClassName("nav-link");
  let contentTitle = document.querySelector(".content__title");
  getMe();

  async function getMe(){
	let me_res = await fetch('http://aizhan/get/me');
	let me = await me_res.json();
	const header_me = document.getElementById('header_me');
	header_me.textContent = 'Привет, ' + me;
  }

  openUsersTab();

  for (const menuLink of menuLinks) {
    menuLink.addEventListener("click", () => {
      disableMenuLinks();
      menuLink.classList.add("active");
      if (menuLink.id == "users") {
        openUsersTab();
      }
      if (menuLink.id == "films") {
        openFilmsTab();
      }
    });
  }

  function disableMenuLinks() {
    for (const menuLink of menuLinks) {
      menuLink.classList.remove("active");
    }
  }

  async function openUsersTab() {
    contentTitle.textContent = "Пользователи";
    let res = await fetch("http://aizhan/get/users");
    let users = await res.json();
    document.querySelector(".content-wrap").innerHTML = `
			<a href="/new/user" class="btn btn-primary mb-3">Добавить нового пользователя</a>
			<div class="content">
			
			</div>
			`;

    for (const user of users) {
      let genderName;
      if (user.gender_id == "1") {
        genderName = "Мужской";
      } else {
        genderName = "Женский";
      }
      document.querySelector(".content").innerHTML += `
					<div class="userBlock me-5">
						<h2 class="user__fio mb-3">${user.Fio}</h2>
						<div class="d-flex">
							<p>Дата рождения: </p>
							<p class="ps-2"	>${user.birthday}</p>					
						</div>
						<div class="d-flex">
							<p>Электронная почта: </p>
							<p class="ps-2"	>${user.Email}</p>					
						</div>
						<div class="d-flex">
							<p>Пол: </p>
							<p class="ps-2"	>${genderName}</p>					
						</div>
						<div class="d-flex justify-content-end">
							<a href="/edit/user/${user.Id}" class="btn btn-success me-3" id="userEdit">Редактировать</a>			
							<a href="/delete/user/${user.Id}" class="btn btn-danger" id="userDelete">Удалить</a>			
						</div>
					</div>
				
				`;
    }
  }

  async function openFilmsTab() {
    contentTitle.textContent = "Фильмы";
    let res = await fetch("http://aizhan/get/films");
    let films = await res.json();
    document.querySelector(".content-wrap").innerHTML = "";
    document.querySelector(".content-wrap").innerHTML = `
			<a href="/new/film" class="btn btn-primary mb-3">Добавить новый фильм</a>
			<div class="content">
			
			</div>
	`;

    for (const film of films) {
      let country;
      if (film.country_id == 1) {
        country = "Казахстан";
      } else if(film.country_id == 2){
        country = "США";
	  }
      document.querySelector(".content").innerHTML += `
					<div class="userBlock me-5">
						<div class="film-banner mb-3" style="background-image: url(${film.link_img})"></div>
						<h2 class="user__fio mb-3">${film.Name}</h2>
						<div class="d-flex">
							<p>Страна: </p>
							<p class="ps-2"	>${country}</p>					
						</div>
						<div class="d-flex">
							<p>Продолжительность(в часах): </p>
							<p class="ps-2"	>${film.duration}</p>					
						</div>
						<div class="d-flex">
							<p>Год выхода: </p>
							<p class="ps-2"	>${film.year_of_issue}</p>					
						</div>
						<div class="d-flex">
							<p>Разрешенный возраст для просмотра: </p>
							<p class="ps-2"	>${film.Age}</p>					
						</div>
						<div class="d-flex">
							<a href="${film.link_video}">Ссылка на фильм</p>					
						</div>
						<div class="d-flex justify-content-end">
							<a href="/edit/film/${film.Id}" class="btn btn-success me-3" id="userEdit">Редактировать</a>			
							<a href="/delete/film/${film.Id}" class="btn btn-danger" id="userDelete">Удалить</a>			
						</div>
					</div>
				
				`;
    }
  }
});
