<?php

$serverHost = 'localhost';
$database = 'forum';
$username = 'root';
$password = '';
$connectionString = "mysql:host=$serverHost;dbname=$database";

try {
    $connection = new PDO($connectionString, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (username, password, email, first_name, last_name)
            VALUES ('Homie', 'password', 'Homie@example.com', 'Homer', 'Simpson')";

    $connection->exec($sql);

    $sql = "INSERT INTO users (username, password, email, first_name, last_name)
            VALUES ('Bugsy', 'carrot', 'Bugsy@example.com', 'Bugs', 'Bunny')";

    $connection->exec($sql);

    $sql = "INSERT INTO users (username, password, email, first_name, last_name)
            VALUES ('Scoob', 'snack', 'Scooby@example.com', 'Scooby', 'Doo')";

    $connection->exec($sql);
    echo 'check';
} catch (PDOException $ex) {
    echo $sql . "<br/>" . $ex->getMessage();
}

$connection = null;