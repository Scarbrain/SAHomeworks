<?php
session_start();

$_SESSION['LoggedIn'] = false;
if (!$_SESSION['LoggedIn']) {
    header('Location: login.php');
    exit();
}
else {
    if ($_SESSION['username'] === $_SESSION['logusername'] &&
        $_SESSION['password'] === $_SESSION['logpassword'] && $_SESSION['LoggedIn'] = true) {
        echo 'This is the secret area!';
    }

    else {
        echo 'FOOCK!';
    }
}