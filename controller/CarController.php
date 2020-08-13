<?php

class CarController {

    public function listAllCars() {
        $carsManager = new CarsManager();
        $cars = $carsManager->selectAllCars();
        require_once('view\home_view.php');
    }

    public function addCar() {
        require_once('view\addCar_View.php');
    }

    public function postCar() {
        $this->checkIsAuto();
        $car = new Car($_POST['marque'],$_POST['modele'],$_POST['energy'],$_POST['isAuto'], $_POST['picture']);
        $carsManager = new CarsManager();
        $errors = $this->checkForm();
        if(!count($errors)) {
            $carsManager->postOneCar($car);
            header('location: index.php');
            } else {
                require_once('view\addCar_View.php');
            }
    
    }
    private function checkform() {
        $errors = [];
        if(empty($_POST['marque'])) {
            $errors[] = '- Il faut définir la marque';
        }
        if(empty($_POST['modele'])) {
            $errors[] = '- il faut définir le modele';
        }
        if(empty($_POST['energy'])) {
            $errors[] = '- vous devez renseigner la motorisation';
        }


        return $errors;
    }

    public function displayErrors($errors) {
        foreach ($errors as $error) {
            echo($error);
        }
    }


    public function deleteCar($id) {
       $carsManager = new CarsManager();
       $carsManager->deleteOneCar($id);
       header('location: index.php');
    }

    public function detailCar($id) {
        $carsManager = new CarsManager();
        $car = $carsManager->getOneCar($id);
        require_once('view\cardetail_view.php');
    }

    private function checkIsAuto(){
        if($_POST['isAuto'] === 'Auto') {
            $_POST['isAuto'] = 1;
        } else {
            $_POST['isAuto'] = 0; 
        }

    }


}