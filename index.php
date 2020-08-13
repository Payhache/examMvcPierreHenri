<?php

require_once('includes.php');

if (empty($_GET)) {
    $articleControleur = new CarController();
    $articleControleur->listAllCars();
}


