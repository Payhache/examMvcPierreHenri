<?php 
class CarsManager extends DbManager {

    public function __construct() {
        parent::__construct();
    }

    public function selectAllCars() {
        $cars = [];
        $requestCars = 'SELECT * FROM cars ';
        foreach($this->bddConnection->query($requestCars) as $car) {
            $cars[] = new Car($car['marque'], $car['modele'], $car['energy'], $car['isAuto'],  $car['id'], $car['picture']);
        } return $cars;
    }
}