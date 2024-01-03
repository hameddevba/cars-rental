

<?php require "dash_header.view.php"; ?>

 <div class="container">
        <h1>Liste des voitures disponibles</h1>
        <table class="table table-striped">
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
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $car) : ?>
                    <tr>
                        <td><?= $car->getBrand() ?></td>
                        <td><?= $car->getModele() ?></td>
                        <td><?= $car->getAnnee() ?></td>
                        <td><?= $car->getImmatriculation() ?></td>
                        <td><?= $car->getCouleur() ?></td>
                        <td><?= $car->getTransmission() ?></td>
                        <td><?= $car->getCategory() ?></td>
                        <td><?= $car->getEngin() ?></td>
                        <td><?= $car->getPrice() . " €" ?></td>
                        <td><?= $car->getDescription() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

 <?php require "dash_footer.view.php"; ?>