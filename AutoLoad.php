<?php 

spl_autoload_register(function ($class) {
    var_dump($class);
});


$obGato = new Gato();

$obGato->fazerBarulho();



?>