<?php
require 'tpl/navbar.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TOE</title>

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
	
				<a href=".php" target="_blank" class="callback">Кабинет</a>
			</div>
		</div>
	</nav> -->

	<header class="header">
		<div class="down">
			<h1>Theory of Everything</h1>
			<p1>Маленькая казалось бы 2D игра, но с ГРОМАДНЫМИ <br>возможностями! Следи за процессом создания на данном сайте!</p1>
			<pre></pre>
			<button onclick="window.location.href = 'https://drive.google.com/drive/u/0/folders/1iApfRRslAdZpylpkbCugGcNcAFobhOOI';" class="btn-main">Download</button>
		</div>

		
	</header>


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
	<script src="index.js"></script>
	
</body>
</html>