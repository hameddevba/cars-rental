<?php require "dash_header.view.php"; ?>


<div class=" display-formAdd d-none justify-content-center align-items-center vh-100 position-fixed top-0 vw-100 " style="background: rgba(0,0,0,0.5);">
    <div class="bg-dark border border-2 rounded-3" style="">
        <div class="containe my-5 py-3 px-5">
            <h1 class="text-center mt-4">Créer un membre du personnel</h1>
            <form action="" method="post" class="py-3">
                <input type="hidden" name="id">
                <div class="form-group my-3">
                    <label for="nom" class="form-label fs-5 fw-bold ">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" required>
                </div>
                <div class="form-group my-3">
                    <label for="prenom" class="form-label fs-5 fw-bold ">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                </div>
                <div class="form-group my-3">
                    <label for="email" class="form-label fs-5 fw-bold ">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group my-3">
                    <label for="tel" class="form-label fs-5 fw-bold ">Téléphone</label>
                    <input type="tel" class="form-control" name="tel" id="tel" required>
                </div>
                <div class="form-group my-3">
                    <label for="profile" class="form-label fs-5 fw-bold ">Profil</label>
                    <select class="form-control" name="profile" id="profile">
                        <option value="Administrateur">Administrateur</option>
                        <option value="Vendeur">Vendeur</option>
                        <option value="Technicien">Technicien</option>
                    </select>
                </div>
                <!-- <div class="form-group my-3">
                    <label for="address" class="form-label fs-5 fw-bold ">Adresse</label>
                    <input type="text" class="form-control" name="address" id="address">
                </div> -->
                <button type="submit" class="btn btn-primary my-5 displayrm">Créer</button>
            </form>
        </div>



    </div>
</div>

<div class="container">
    <button class="btn btn-primary my-5 displaybtn" style="float: right;">Ajouter</button>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Profil</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach (StaffManager::getAllStaff() as $staff) : ?>
                <tr>
                    <td><?= $staff['nom'] ?></td>
                    <td><?= $staff['prenom'] ?></td>
                    <td><?= $staff['email'] ?></td>
                    <td><?= $staff['tel'] ?></td>
                    <td><?= $staff['profile'] ?></td>
                    <td class="actions">
                        <a href="#" class="staff_edit_btn btn btn-primary btn-sm" id="<?= $staff['id'] ?>">Modifier</a>
                        <a href="#" class="staff_del_btn btn btn-danger btn-sm" id="<?= $staff['id'] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container d-flex justify-content-between my-5 mx-0 px-0">
        <button class="btn btn-danger">prev</button>
        <button class="btn btn-info">next</button>
    </div>

</div>




<script>
    const displaybtn = document.querySelector(".displaybtn");
    const displayForm = document.querySelector(".display-formAdd");
    const displayrm = document.querySelector(".displayrm");


    displaybtn.addEventListener('click', async e => {
        displayForm.classList.remove('d-none');
        displayForm.classList.add('d-flex');
    });


    const staff_edit = document.querySelectorAll(".staff_edit_btn")
        .forEach(btn => btn.addEventListener("click", async e => {
                // console.log(e.target.id)
                // let confim = confirm("Voulez vous vraiment supprimer cette voiture de la liste");
                // if (confim) {
                //     const response = await fetch(`http://localhost:8000/admin/findstaff/${e.target.id}`)
                //     const res = await response.json();
                //     console.log(res);
                //     if (!response.ok) throw new Error("Network response was not OK");
                // }

                const response = await fetch(`http://localhost:8000/admin/findstaff/${e.target.id}`);
                const data = await response.json();
                console.log(data);

                const form = document.querySelector('form');
                form.action = "staffedit";
                const inputs = form.querySelectorAll('input, select');

                inputs.forEach(input => {
                    const name = input.name;
                    if (data.hasOwnProperty(name)) {
                        input.value = data[name];
                    }
                });

                // Sélectionner l'option appropriée dans la liste déroulante "profile"
                const profileSelect = document.getElementById('profile');
                profileSelect.value = data.profile;

                displayForm.classList.remove('d-none');
                displayForm.classList.add('d-flex');
                })
            );


    displayrm.addEventListener('click',
        e => {

            displayForm.classList.remove('d-flex');
            displayForm.classList.add('d-none');
        })
</script>

<?php require "dash_footer.view.php"; ?>