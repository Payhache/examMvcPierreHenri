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

    public function postOneCar(Car $car) {
        $marque = $car->getMarque();
        $modele = $car->getModele();
        $energy = $car->getEnergy();
        $isAuto = $car->getIsAuto();
        $picture = $car->getPicture();
        $sqlPostCar = $this->bddConnection->prepare('INSERT INTO cars (marque, modele, energy, isAuto, picture) VALUE (?,?,?,?,?)');
        $sqlPostCar->bindParam(1, $marque);
        $sqlPostCar->bindParam(2, $modele);
        $sqlPostCar->bindParam(3, $energy);
        $sqlPostCar->bindParam(4, $isAuto);
        $sqlPostCar->bindParam(5, $picture);
        $sqlPostCar->execute();
        $car->setId($this->bddConnection->lastInsertId());
    }

    public function deleteOneCar($id) {
        $sqlDeleteCar = $this->bddConnection->prepare('DELETE FROM cars WHERE id=?');
        $sqlDeleteCar->bindParam(1, $id);
        $sqlDeleteCar->execute();
    }

    public function getOneCar($id) {
        $sqlGetoneCar = $this->bddConnection->prepare('SELECT * FROM cars WHERE id=?');
        $sqlGetoneCar->bindParam(1,$id);
        $sqlGetoneCar->execute();
        $resultSql = $sqlGetoneCar->fetch();
        $car = new Car($resultSql['marque'], $resultSql['modele'], $resultSql['energy'], $resultSql['isAuto'], $resultSql['id'], $resultSql['picture']);
        
        return $car;

    }
}