<?php
    $username = "admin";
    $password = "123";
    $isAdmin = false;

    if ($username == "admin" && $password == "123") {
        if ($isAdmin) {
            echo"Selamat datang Administrator";
        } else {
            echo"Selamat datang User";
        }
    } else {
        echo"Maaf Username dan Password salah";
    }
?>