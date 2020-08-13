<?php   include_once('view\parts\meta.html');
        include_once('view\parts\header.html');
?>


<h1>ajoute la voiture</h1>

    <?php
        if (!empty($_POST)) {
            if (count($errors)) {
                $this->displayErrors($errors);
            }
        }
    ?>



<form class="w-75 m-auto" action="index.php?controller=car&action=postCar" method="post">
        <div class="form-group mt-5">
            <label for="marque">Marque de la voiture</label>
            <input class="form-control w-75" type="text" name="marque" value="<?php
            if (!empty($_POST)) {
                echo $_POST['marque'];
            } ?>" required>
        </div>
        <div class="form-group">
            <label for="modele">Modele de la voiture</label>
            <input class="form-control w-75" type="textarea" name="modele" value="<?php
            if (!empty($_POST)) {
                echo $_POST['modele'];
            } ?>" required>
        </div>
        <div class="form-group">
            <label for="energy"> Motorisation</label>
            <input class="form-control w-75" type="textarea" name="energy" value="<?php
            if (!empty($_POST)) {
                echo $_POST['energy'];
            } ?>" required >
        </div>
        <div class="form-group">
            <label for="isAuto">Type de boîte</label>
            <select class="form-control w-75" id="isAuto" name="isAuto" required>
                <option></option>
                <option>Manuelle</option>
                <option>Auto</option>
            </select>
        </div>
        <div class="form-group">
            <label for="phto">Photo du véhicule (optionnelle)</label>
            <input type="file" name="picture" id="picture">
        </div>

        <button class="btn btn-primary" type="submit"> Envoyer Article</button>
    </form>
