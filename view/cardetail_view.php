<?php   include_once('view\parts\meta.html');
        include_once('view\parts\header.html');
?>


<h1>Detail de la voiture</h1>

<table class="table w-75 m-auto">
    <thead>
    <td> # </td>
    <td>Marque</td>
    <td>Modele</td>
    <td> Type de boîte</td>
    <td>Photo</td>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $car->getId()?></td>
            <td><?php echo $car->getMarque()?></td>
            <td><?php echo $car->getModele()?></td>
            <td><?php echo $car->getIsAuto()?></td>
            <td><?php echo $car->getPicture()?></td>
        </tr>
    </tbody>
</table>
