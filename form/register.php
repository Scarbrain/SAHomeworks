<?php
//include_once('register2.php');
session_start();

$_SESSION['LoggedIn'] = false;

if (!empty($_POST) && isset($_POST['submit'])) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $_SESSION['LoggedIn'] = true;
    header('Location: login.php');
    exit();

}
?>