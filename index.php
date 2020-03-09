<?php

namespace Pattern\Factory;

require 'Drink.php';
require 'DrinkFactory.php';
require 'CubaLibre.php';
require 'CubaLibreFactory.php';


$factory = new CubaLibreFactory();
$drink = $factory->makeADrink();

echo ('Alkohol:</br>');
foreach ($drink->getAlcohol() as $alcohol) {
    echo ($alcohol . '<br>');
}
echo ('</br>Szklanka:</br>');
echo ($drink->getGlass() . '<br>');
echo ('</br>Sposób mieszania:</br>');
echo ($drink->getMixing() . '<br>');
echo ('</br>Sposób podania:</br>');
echo ($drink->getWayOfPresenting() . '<br>');
