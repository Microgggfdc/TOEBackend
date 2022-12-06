<?php
require 'tpl/navbar.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TOE Mods</title>

	<!-- Bootstrap reboot (для сброса стилей) -->
	<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

	<!-- Bootstrap сетка -->
	<link rel="stylesheet" href="libs/bootstrap-grid.min.css">

	<!-- Шрифты с Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

	<!-- Стили сайта -->
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<!--<nav class="navbar">
		<div class="container">
			<a href="#" class="navbar-brand">Theory of Everything</a>

			<div class="navbar-wrap">
				<ul class="navbar-menu">
					<li><a href="index.php">Главная</a></li>
					<li><a href="news.php">Новости</a></li>
					<li><a href="mods.php">Моды</a></li>
					<li><a href="about-us.php">О нас</a></li>
				</ul>
	
				<a href="registration.php" target="_blank" class="callback">Кабинет</a>
			</div>
		</div>
	</nav>-->

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-3">
				<div class="product">
					<div class="image">
						<img src="/uploads/modsimg/fpsmod.png" alt="">
					</div>

					<div class="info">
						<h3>№22. FPS Mod</h3>
						
						<div class="info-mod">
							<span class="author">Author:<small>ХЛЕБОСОБАКА#0265</small></span>
							
							<button class="download" onclick="window.location.href = 'https://drive.google.com/file/d/11ATGi-JwvKmYTWVGVQhCbXw5yVrN6_iy/view';"><ion-icon name="download-outline"></ion-icon></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="product">
					<div class="image">
						<img src="/uploads/modsimg/microhack1.2.png" alt="">
					</div>

					<div class="info">
						<h3>№37. Micro Hack 1.2</h3>
						
						<div class="info-mod">
							<span class="author">Author:<small>Cookie#3236</small></span>
							
							<button class="download" onclick="window.location.href = 'https://drive.google.com/file/d/1jy6mA6SDxSzyyvXtb-0EJIUuRawPqYjN/view';"><ion-icon name="download-outline"></ion-icon></button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<footer>
		<div id="social">
			<a href="https://discord.gg/qsqnAztVpp" title="Discord" target="_blank">
				<img src="img/logo-discord.svg" alt="Discord" title="Discrod">
			</a>
			<a href="https://vk.com/public208677380" title="VK" target="_blank">
				<img src="img/logo-vk.svg" alt="VK" title="VK">
			</a>
			<a href="https://www.youtube.com/@TheoryofEverything2021" title="YouTube" target="_blank">
				<img src="img/logo-youtube.svg" alt="YouTube" title="YouTube">
			</a>
		</div>
		<div id="rights">
			Все права защищены &copy; 2023.
		</div>
	</footer>
	
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>