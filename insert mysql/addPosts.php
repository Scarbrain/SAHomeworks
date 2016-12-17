<?php

$serverHost = 'localhost';
$database = 'forum';
$username = 'root';
$password = '';
$connectionString = "mysql:host=$serverHost;dbname=$database";

try {
    $connection = new PDO($connectionString, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO posts (post, user_id)
            VALUES ('post1', (SELECT id FROM users WHERE id = 1))";
    $sql2 = "INSERT INTO posts (post, user_id)
            VALUES ('post2', (SELECT id FROM users WHERE id = 2))";
    $sql3 = "INSERT INTO posts (post, user_id)
            VALUES ('post3', (SELECT id FROM users WHERE id = 3))";

    $connection->exec($sql);
    $connection->exec($sql2);
    $connection->exec($sql3);



    echo 'check';
} catch (PDOException $ex) {
    echo $sql . "<br/>" . $ex->getMessage();
}

$connection = null;