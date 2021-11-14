<!DOCTYPE HTML>
<html>
<head>
	<title>Образование в Швейцарии</title>
	<!-- Кодировка страницы -->
	<meta-charset= "utf-8">
	<!-- Настройка viewport -->
	<meta name="viewport" content="width=device-width, initial-scale= 1">
	<!-- Bootstrap CSS -->
	<link href= "<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/bootstrap/js/bootstrap.bundle.min.js"></script>
	<link href="<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/style/style.css" rel="stylesheet">
	<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/jquery-3.6.0.min.js"></script>
	<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/js/dropDownMenu.js"></script>
	<script src="<?php $_SERVER["DOCUMENT_ROOT"] ?>/assets/styles/js/deleteconfirm.js"></script>
</head>
<body>
<!-- Шапка страницы -->
<div class="header">
	<div class="nav-logo">
		<div class="container">
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-1">
					<a class="navbar-brand" href="#">
						<img class="logo" src="/img/others/logo-F.png">
					</a>
				</div>
				<div class="col-sm-4"></div>
				<!-- Боковое меню -->
				<div class="col-sm-2">
					<div class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
					     aria-controls="offcanvasRight">
						<img src="/img/others/baseline_menu_white_24dp.png" height="38px" width="38px">
					</div>

					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
					     aria-labelledby="offcanvasRightLabel">
						<div class="offcanvas-header">
							<h5 id="offcanvasRightLabel"></h5>
							<div type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
							     aria-label="Закрыть"></div>
						</div>
						<div class="offcanvas-body" style="margin-top: -20px">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<a href="#" class="nav-link">СПЕЦПРОЕКТ</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Об образовании в Швейцарии</a>
								</li>
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
									   data-bs-toggle="dropdown" aria-expanded="false">
										Среднее образование в швейцарии
									</a>
									<ul id="firstcontent" class="dropdown-menu justify-content-end"
									    aria-labelledby="dropdownMenuLink" style="display: none">
										<li><a class="nav-link" href="#">Как выбрать школу</a></li>
										<li><a class="nav-link" href="#">Escole Lemania</a></li>
										<li><a class="nav-link" href="#">Leysin American School</a></li>
										<li><a class="nav-link" href="#">Montreux International School</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
									   data-bs-toggle="dropdown" aria-expanded="false">
										Высшее образование в Швейцарии
									</a>
									<ul id="secondcontent" class="dropdown-menu justify-content-end"
									    aria-labelledby="dropdownMenuLink1" style="display: none">
										<li><a class="nav-link" href="#">Особенности высшего образования</a></li>
										<li><a class="nav-link" href="#">Личный опыт выпускников</a></li>
										<li><a class="nav-link" href="#">Частное высшее образование</a></li>
										<li><a class="nav-link" href="#">Государственные вузы</a></li>
										<li><a class="nav-link" href="#">Федеральные стипендии</a></li>
										<li><a class="nav-link" href="#">Business School Laussane</a></li>
										<li><a class="nav-link" href="#">ETH Zurich</a></li>
										<li><a class="nav-link" href="#">EPFL</a></li>
										<li><a class="nav-link" href="#">EU Business School</a></li>
										<li><a class="nav-link" href="#">IMD</a></li>
										<li><a class="nav-link" href="#">IMI</a></li>
										<li><a class="nav-link" href="#">Geneva Business School</a></li>
										<li><a class="nav-link" href="#">Swiss School Higher Education</a></li>
										<li><a class="nav-link" href="#">Webster University Geneva</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">10 важных вопросов о швейцарских визах</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Обращение Посла Швейцарии в России</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="line"></div>
	<!-- Постер -->
	<div class="poster">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="container-left-plus">
						<div class="quadro"></div>
						<div class="horizontal-line"></div>
						<div class="quadro"></div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="container-title">
						<div class="title">
							ОБРАЗОВАНИЕ
							<br>
							В ШВЕЙЦАРИИ
						</div>
						<div class="sub-title">
							специальный проект Forbes Education
						</div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="container-right-plus" style="margin-top: 250px">
						<div class="quadro"></div>
						<div class="horizontal-line"></div>
						<div class="quadro"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="line"></div>
	</div>
	<!-- Основные ссылки -->
	<div class="nav-lower">
		<div class="container">
			<div class="line-ref">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="/courses/show">НАПРАВЛЕНИЯ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/groups/show">ГРУППЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/students/show">СТУДЕНТЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/lessons/show">ПРЕДМЕТЫ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/marks/show">ОЦЕНКИ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/diplomas/show">ДИПЛОМЫ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
