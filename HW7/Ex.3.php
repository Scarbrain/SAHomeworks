<?php
$cards = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A');
$character = 'J';

if (in_array($character, $cards)) {
    echo 'yes';
}
else {
    echo 'no';
}