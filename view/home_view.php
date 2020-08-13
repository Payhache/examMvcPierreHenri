<?php   include_once('view\parts\meta.html');
        include_once('view\parts\header.html');
?>

<table class="table w-75 m-auto">
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
                <a href="index.php?controller=car&action=detail&id=<?php echo $car->getId();?>"> voir le détail</a>
                <a href="index.php?controller=car&action=delete&id=<?php echo $car->getId();?>"> supprimer </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
