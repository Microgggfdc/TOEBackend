<?php

    $connect = mysqli_connect('localhost', 'root', '', 'toebd');

    if (!$connect) {
        die('Error connect to DataBase');
        echo "Error connect to BD!";
    }
    else {
        echo "Connect to BD!";
    }

?>