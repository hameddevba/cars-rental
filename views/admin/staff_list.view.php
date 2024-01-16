<?php require "dash_header.view.php"; ?>


<div class="container-fluid d-none justify-content-center align-items-center vh-100 position-absolute top-0 w-100 " style="background: rgba(0,0,0,0.5);">
    <div class=" border border-2 rounded-3" style="
   /* width:50%;  */
   background-color:aliceblue;
   /* height:50%; */
    ">
        <div class="containe my-5 py-3 px-5">
            <h1 class="text-center mt-4">Créer un membre du personnel</h1>
            <form action="" method="post" class="py-3">
                <div class="form-group">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="tel" class="form-label">Téléphone</label>
                    <input type="tel" class="form-control" name="tel" id="tel" required>
                </div>
                <div class="form-group">
                    <label for="profile" class="form-label">Profil</label>
                    <select class="form-control" name="profile" id="profile">
                        <option value="Administrateur">Administrateur</option>
                        <option value="Vendeur">Vendeur</option>
                        <option value="Technicien">Technicien</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="address" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div> -->
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>

    </div>
</div>



<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Profil</th>
        </tr>
    </thead>
    <tbody>
        <?php
    ;
        foreach (StaffManager::getAllStaff() as $staff) : ?>
            <tr>
                <!-- <td><?= $staff->getId() ?></td> -->
                <td><?= $staff->getNom() ?></td>
                <td><?= $staff->getPrenom() ?></td>
                <td><?= $staff->getEmail() ?></td>
                <td><?= $staff->getTel() ?></td>
                <td><?= $staff->getProfile() ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="/staff/create" class="btn btn-primary float-right">Ajouter</a>


<script>
    let display = document.querySelector(".display");

    display.addEventListener('click')
</script>

<?php require "dash_footer.view.php"; ?>
use StaffManager;
