<?php require "dash_header.view.php";


?>

<div class="container mt-5">
    <h2>Liste des Clients</h2>

    <table class="table mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>NNI</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?= $customer['id'] ?></td>
                    <td><?= $customer['nni'] ?></td>
                    <td><?= $customer['nom'] ?></td>
                    <td><?= $customer['prenom'] ?></td>
                    <td><?= $customer['email'] ?></td>
                    <td class="actions">
                        <a href="#" class="btn btn-primary btn-sm">Modifier</a>
                        <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require "dash_footer.view.php"; ?>