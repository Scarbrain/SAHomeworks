<?php
include('register.php');
//session_start();

?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <form action="login.php" method="post">
        Username:
        <input type="text" name="username" required/>
        <br />
        Password:
        <input type="password" name="password" required/>
        <br/>
        Firstname:
        <input type="text" name="firstname" required/>
        <br />
        Lastname:
        <input type="text" name="lastname" required/>
        <br />
        <input type="submit" name="submit1" value="submit" />
    </form>
</body>
</html>