<?php include_once('view\parts\meta.html') ?>

<table class="table">
    <thead>
    <td> # </td>
    <td>Marque</td>
    <td>Modele</td>
    <td>Action</td>
    </thead>

    <tbody>
    <?php
    foreach ($cars as $car) {
        ?>
        <tr>
            <td><?php echo $car->getId()?></td>
            <td><?php echo $car->getMarque()?></td>
            <td><?php echo $car->getModele()?></td>
            <td>
                ongoing
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
