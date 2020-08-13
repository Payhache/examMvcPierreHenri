<?php

require_once('includes.php');

$cars = new CarsManager();
$cars = $cars->selectAllCars();
var_dump($cars);