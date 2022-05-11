<?php

require_once __DIR__ . '/classes/food.php';
require_once __DIR__ . '/classes/user.php';

$cuccia = new Product('Cuccia','Cuccia per cani da casa fatta in stoffa e gomma lunga 90cm','$50');
var_dump($cuccia);
$croccantini = new Food('Croccantini per cani', 'Croccantini di carne per il tuo cane utili anche per la cura dei denti del tuo cane', '$12','500gr','carne, verdura, gelatina', 'umido');
var_dump($croccantini);
$marco = new User('marco', 'marco@email.it', true, 10);
var_dump($marco);
?>