<?php

class CarController {

    public function listAllCars() {
        $carsManager = new CarsManager();
        $cars = $carsManager->selectAllCars();
        require_once('view\home_view.php');
    }
}