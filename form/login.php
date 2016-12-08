<?php
//include_once('register.php');

session_start();

$_SESSION['LoggedIn'] = false;

if (!empty($_POST) && isset($_POST['submit2'])) {
    $_SESSION['logusername'] = $_POST['logusername'];
    $_SESSION['logpassword'] = $_POST['logpassword'];

    if ($_SESSION['username'] ===  $_SESSION['logusername'] &&
        $_SESSION['password'] === $_SESSION['logpassword']) {
        $_SESSION['LoggedIn'] = true;
        header('Location: secret.php');
        exit;
    }
}
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Username:
    <input type="text" name="logusername" />
    <br />
    Password:
    <input type="password" name="logpassword" />
    <br/>
    <input type="submit" name="submit2" value="submit" />
</form>
</body>
</html>

