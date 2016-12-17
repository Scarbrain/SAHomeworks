<?php

$serverHost = 'localhost';
$database = 'forum';
$username = 'root';
$password = '';
$connectionString = "mysql:host=$serverHost;dbname=$database";

try {
    $connection = new PDO($connectionString, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT posts.post, comments.comment, users.first_name, users.last_name
            FROM users, posts, comments
            WHERE comments.post_id=posts.id
            ORDER BY posts.post";
    $result = $connection->query($sql);

    foreach ($result as $row) {
        echo $row['post'] .
            ', ' .
            $row['comment'] .
            ', ' .
            $row['first_name'] .
            ', ' .
            $row['last_name'] .
            '<br />';
    }

} catch (PDOException $ex) {
    echo $sql . "<br/>" . $ex->getMessage();
}

$connection = null;