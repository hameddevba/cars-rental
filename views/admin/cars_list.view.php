<?php require "dash_header.view.php"; ?>




<div class=" d-none position-fixed top-0 vh-100  vw-100 overflow-scroll" id="displayForm" style="z-index: 1; background: rgba(0,0,0,0.5);">

    <div class="container bg-dark my-5 border border-2 rounded-3 col-md-9 ml-sm-auto col-lg-10 px-md-4 w-50">
        <h1 class="my-5 pt-5">Formulaire de voiture</h1>
        <form action="" method="post" class="my-5">
            <div class="mb-3">
                <label for="nomVoiture" class="form-label">Nom de la voiture</label>
                <input type="text" class="form-control" id="nomVoiture" name="brand">
            </div>
            <div class="mb-3">
                <label for="modele" class="form-label">Modèle</label>
                <input type="text" class="form-control" id="modele" name="modele">
            </div>
            <div class="mb-3">
                <label for="modele" class="form-label">Annee</label>
                <!-- <input type="week" class="form-control" id="modele" name="an"> -->
                <input type="number" class="form-control" name="an" min="1950" max="2050" step="1" value="2016" />
            </div>
            <div class="mb-3">
                <label for="modele" class="form-label">Immatriculation</label>
                <input type="text" class="form-control" id="modele" name="immatri">
            </div>
            <div class="mb-3">
                <label for="couleur" class="form-label">Couleur</label>
                <select class="form-select" id="couleur" name="couleur">
                    <option value="rouge">Rouge</option>
                    <option value="bleu">Bleu</option>
                    <option value="noir">Noir</option>
                    <option value="blanc">Blanc</option>
                    <option value="gris">Gris</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tramission" class="form-label">Tramission type</label>
                <select class="form-select" id="tramiss" name="tramission">
                    <option value="manuelle">Transmission manuel</option>
                    <option value="automatique">Transmission automatique</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <select class="form-select" id="categorie" name="category">
                    <option value="berline">Berline</option>
                    <option value="suv">SUV</option>
                    <option value="coupe">Coupé</option>
                    <option value="cabriolet">Cabriolet</option>
                    <option value="voiture-familiale">Voiture familiale</option>
                    <option value="pick-up">Pick-up</option>
                    <option value="modele-garanti">Modèle garanti</option>
                    <option value="vehicule-electrique">Véhicule électrique</option>
                    <option value="vehicule-de-luxe">Véhicule de luxe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="moteur" class="form-label">Moteur</label>
                <select class="form-select" id="moteur" name="engin">
                    <option value="hybride">Hybride</option>
                    <option value="diesel">Diesel</option>
                    <option value="essence">Essence</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="modele" class="form-label">Prix</label>
                <input type="number" class="form-control" id="modele" name="price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="descript" name="description" rows="3"></textarea>
            </div>
            <button type="" class="btn btn-primary my-5 undisplayed" name="submit">Envoyer</button>
        </form>
    </div>
</div>



<?php include "cars_edit.view.php"; ?>

<div class="container">
    <button class="btn btn-primary my-5 displaybtn" style="float: right;">Ajouter</button>
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
            <?php foreach ($this->readAll() as $car) : ?>
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
                        <a href="#" class="mod_btn btn btn-primary btn-sm" id="<?= $car->getId(); ?>">Modifier</a>
                        <a href="#" class="del_btn btn btn-danger btn-sm" id="<?= $car->getId(); ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    const form = document.querySelector("form");

    const display_form = document.getElementById('displayForm');

    const displaybtn = document.querySelector('.displaybtn');

    const undisplayed = document.querySelector('.undisplayed');

    const delBtn = document.querySelector(".del_btn")
        .addEventListener("click", async e => {
            let confim = confirm("Voulez vous vraiment supprimer cette voiture de la liste");
            if (confim) {
                await fetch(`http://localhost:8000/admin/delete/${e.target.id}`)
                if (!res.ok) throw new Error(await res.text())
            }
            location.reload();
        });

    // les variables pour la modification
    const id = document.querySelector("input[type = hidden]")
    const brandInput = document.querySelector("#brand");
    const modelInput = document.querySelector("input[name='model']");
    const yearInput = document.querySelector("input[name='year']");
    const immatriculationInput = document.querySelector("input[name='immatriculation']");
    const couleurInput = document.querySelector("input[name='couleur']");
    const transmissionInput = document.querySelector("#transmission");
    const categoryInput = document.querySelector("select[name='category']");
    const enginInput = document.querySelector("input[name='engin']");
    const priceInput = document.querySelector("#price");
    const descriptionInput = document.querySelector("#description");


    const editDisplay = document.querySelector(".editDisplay");


    const mod_btn = document.querySelectorAll(".mod_btn")
        .forEach((btn) => {
            btn.addEventListener("click", (e) => {
                editDisplay.classList.remove('d-none')
                // alert(e.target.id);
                fetchData(e.target.id);
            })
        })



    displaybtn.addEventListener('click', (e) => {
        display_form.classList.remove('d-none');
    })


    // function fetchData() {
    //     return.then(response => response.json())
    //         .then(data => console.log(data));
    // }




    // get data to edit from dataBase
    async function fetchData(theId) {
        const response = await fetch(`http://localhost:8000/admin/getcarsbyid/${theId}`);
        const data = await response.json();

        console.log(data);
        // Récupération des éléments input


        // Définition des valeurs des inputs
        id.value = theId;
        brandInput.value = data.brand;
        modelInput.setAttribute("value", data.model);
        yearInput.setAttribute("value", data.annee);
        immatriculationInput.setAttribute("value", data.immatriculation);
        couleurInput.setAttribute("value", data.couleur);
        transmissionInput.value = data.transmission;
        categoryInput.value = data.category;
        enginInput.setAttribute("value", data.engin);
        priceInput.setAttribute("value", data.price);
        descriptionInput.value = data.description;
    }
</script>

<?php require "dash_footer.view.php"; ?>