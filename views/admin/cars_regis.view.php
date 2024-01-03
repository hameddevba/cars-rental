<?php require "dash_header.view.php"; ?>



<div class="container col-md-9 ml-sm-auto col-lg-10 px-md-4 w-50">
    <h1 class="my-5">Formulaire de voiture</h1>
    <form action="" method="post">
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
            <input type="date" class="form-control" id="modele" name="an">
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
            <select class="form-select" id="tramission" name="tramission">
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
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
    </form>
</div>

<?php require "dash_footer.view.php"; ?>