<?php require "dash_header.view.php"; ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Immatriculation</th>
            <th>Couleur</th>
            <th>Transmission</th>
            <th>Catégorie</th>
            <th>Moteur</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car) : ?>
            <tr>
                <td><?php echo $car->getBrand(); ?></td>
                <td><?php echo $car->getModele(); ?></td>
                <td><?php echo $car->getAnnee(); ?></td>
                <td><?php echo $car->getImmatriculation(); ?></td>
                <td><?php echo $car->getCouleur(); ?></td>
                <td><?php echo $car->getTransmission(); ?></td>
                <td><?php echo $car->getCategory(); ?></td>
                <td><?php echo $car->getEngin(); ?></td>
                <td><?php echo $car->getPrice(); ?></td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require "dash_footer.view.php"; ?>