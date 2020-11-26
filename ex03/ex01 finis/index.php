<?php
include_once('FoodFactory.php');

$asian = new AsianFoodFactory();

$door = $asian->makeFood();
$expert = $asian->makeExpert();

$door->getDescription(); 
$expert->getDescription();

// Idem pour le Factory de porte en fer
$french = new FrenchFoodFactory();

$door = $french->makeFood();
$expert = $french->makeExpert();

$door->getDescription(); 
$expert->getDescription();