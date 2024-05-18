<div class=" editDisplay d-none position-fixed top-0 vh-100 vw-100 overflow-scroll d-flex justify-content-center align-items-center">
    <div class="container bg-dark w-50 my -5 py-5" style="border:  1px solide black; border-radius: 1%;">

        <form action="edit" method="post">

        <input type="hidden" name="id" value="">

            <div class="form-group my-2">
                <label class="form-label" for="brand">Marque</label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="Marque de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="model">Modèle</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Modèle de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="year">Année</label>
                <!-- <input type="date" class="form-control" id="year" name="year" placeholder="Année de la voiture"> -->
                <input type="number" class="form-control" name="year" min="1950" max="2050" step="1" />
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="immatriculation">Immatriculation</label>
                <input type="text" class="form-control" id="immatriculation" name="immatriculation" placeholder="Immatriculation de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="couleur">Couleur</label>
                <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Couleur de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="transmission">Transmission</label>
                <select class="form-control" id="transmission" name="transmission">
                    <option value="manuel">Manuelle</option>
                    <option value="automatique">Automatique</option>
                </select>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="category">Catégorie</label>
                <select class="form-control" id="category" name="category">
                    <option value="citadine">Citadine</option>
                    <option value="compacte">Compacte</option>
                    <option value="berline">Berline</option>
                    <option value="break">Break</option>
                    <option value="SUV">SUV</option>
                    <option value="monospace">Monospace</option>
                    <option value="cabriolet">Cabriolet</option>
                    <option value="coupe">Coupé</option>
                </select>
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="engin">Moteur</label>
                <input type="text" class="form-control" id="engin" name="engin" placeholder="Moteur de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="price">Prix</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Prix de la voiture">
            </div>

            <div class="form-group my-2">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>

        </form>

    </div>
</div>