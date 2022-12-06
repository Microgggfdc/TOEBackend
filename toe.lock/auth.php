<?
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

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
    <title>Form Authorization</title>
</head>
<body>
    <main>
        <div class="circle"></div>
        <div class="register-form-container">
            <h1 class="form-title">
                Авторизация
            </h1>
            <form class="form-fields" action="vendor/signin.php" method="post">
                <div class="form-field">
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="form-field">
                    <input type="text" name="password" placeholder="Пароль">
                </div>
                <button type="submit" class="button">Авторизация</button>
            </form>
            <div class="form-buttons">
                
                <div class="divider">или</div>
                <a href="registration.php" class="button button-auth">Регистрация</a>
            </div>
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </div>
    </main>
</body>
</html>