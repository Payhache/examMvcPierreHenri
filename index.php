<?php

require_once('includes.php');
$carController = new CarController();

if (empty($_GET)) {
    $carController->listAllCars();


} else if ($_GET['controller'] === 'car' && $_GET['action'] === 'addCar') {
    $carController->addCar();

} else if ($_GET['controller'] === 'car' && $_GET['action'] === 'postCar') {
    $carController->postCar();

} else if ($_GET['controller'] === 'car' && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $carController->deleteCar($_GET['id']);

} else if ($_GET['controller'] === 'car' && $_GET['action'] === 'detail' && isset($_GET['id'])) {
    $carController->detailCar($_GET['id']);

}




