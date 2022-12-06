<?php 



?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Form Registration</title>
</head>
<body>
    <main>
        <div class="circle"></div>
        <div class="register-form-container">
            <h1 class="form-title">
                Регистрация
            </h1>
            <form action="vendor/signup.php" class="form-fields" method="POST">
                <div class="form-field">
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="form-field">
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div class="form-field">
                    <input type="text" name="email" placeholder="Почта">
                </div>
	            <button class="button" type="submit" name="submit">Регистрация</button>
	        </form>
            <div class="form-buttons">
                
                <div class="divider">или</div>
                <a href="" class="button button-google">Google</a>
                <a href="auth.php" class="button button-auth">Авторизация</a>
            </div>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }   
                unset($_SESSION['message']);
            ?>
            <!--<form class="form-fields" method="POST" action="">
                <div class="form-field">
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="form-field">
                    <input type="text" placeholder="Почта">
                </div>
                <div class="form-field">
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div class="form-field">
                    <input type="text" name="password2" placeholder="Потвердите пароль">
                </div>
            </form>-->
            
        </div>
    </main>
</body>
</html>