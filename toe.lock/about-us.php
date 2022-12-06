<?php
require 'tpl/navbar.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOE</title>

	<!-- Bootstrap reboot -->
	<link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

	<!-- Bootstrap сетка -->
	<link rel="stylesheet" href="libs/bootstrap-grid.min.css">

	<!-- Шрифты с Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


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

    <header class="header">
        <div class="container">
            <div class="row">

                    <div class="col-lg-6 offset-lg-3 header-content">
                        <h1>Поддержи нас!</h1>
                        <h4>Вы можете задонанить нам немного денег. 80% всех ваших донатов идут Разработчику Игры, а остальное идёт на подержание сайта (хостинг, домен и т.д.)</h4>
                        <table>
                            <colgroup>
                              <!--Цвета для таблицы-->
                            </colgroup>
                            <tr>
                              <th></th>
                              <th>Премиум</th>
                              <th>ВИП</th>
                            </tr>
                            <tr>
                              <td>При покупке от 1 месяца до 5 месяцев включительно</td>
                              <td>100 руб./месяц</td>
                              <td>250 руб./месяц</td>
                            </tr>
                            <tr>
                              <td>При покупке от 6 до 11 месяцев включительно</td>
                              <td>60 руб./месяц</td>
                              <td>140 руб./месяц</td>
                            </tr>
                            <tr>
                            <td>При покупке от 12 месяцев</td>
                            <td>25 руб./месяц</td>
                            <td>60 руб./месяц</td>
                            </tr>
                          </table>
                          <pre></pre>
                          <button onclick="window.location.href = 'https://www.donationalerts.com/r/artemkrsv';" class="btn-main">Поддержать</button>
                          <pre></pre>
                          <p1><br>ВНИМАНИЕ! НЕ ПРИСЫЛАЙТЕ ДЕНЬГИ, УСЛУГИ ОТКЛЮЧЕНЫ!</p1>
                    </div>

            </div>
        </div>
        
        <!--<div class="overlay"></div> -->
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

</body>
</html>