<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
        <p>Здраствуйте! Вы вошли в свой аккаунт!</p>
        <a href="/index.php">Перейти на сайт</a>
        
    </form>


</body>
</html>