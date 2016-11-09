<?php

$name = 'Johnny';
$address = 'Knoxville';
$phone_number = 1234567890;

echo $name;
echo '<br/>';
echo $address;
echo '<br/>';
echo $phone_number;
echo '<br/>';


echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo '<br/>';
echo 'Current PHP version: ' . phpversion();
echo '<br/>';

$file = 'phpHomework1.php';
if (file_exists($file)) {
    echo "$file was last modified: " . date ("F d Y H:i:s.", filemtime($file));
}

