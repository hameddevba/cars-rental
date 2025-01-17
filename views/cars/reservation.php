<?php

include "cars_header.php";
?>


  <section class="py-5 text-center container">
      
  </section>

    <div class="album py-5 bg-dark rounded-3 container">

      <div class="card mb-3 w-75 mx-auto h75">
        <div class="row g-0">
          <div class="col-md-5">
           <img class="img-fluid"
                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262"
                    alt="Alternate Text" />
          </div>
          <div class="col-md-6">
            <div class="card-body h-100 d-flex flex-column justify-content-between text-center">
              <h5 class="card-title text-center fs-3 fw-bold text-black">ToYota Yaris</h5>
              <p class="card-text">Plongez dans le luxe et la performance avec notre dernier modèle de voiture. Dotée d'un design élégant et de technologies de pointe, cette voiture offre une conduite fluide et confortable. Que vous recherchiez une expérience de conduite dynamique en ville ou sur les routes panoramiques, cette voiture est prête à vous emmener là où vous voulez aller, avec style et assurance.</p>
              <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            </div>
          </div>
        </div>
      </div>

        <div class="container">
        <h1 class="text-center my-5">Formulaire de réservation de voiture</h1>

        <div class="container bg-light" style="border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); width: 800px;">
            <form method="post" action="" class="my-3 py-5 px-3">
              <div class="mb-3">
                <label for="nni" class="form-label">NNI</label>
                <input type="number" class="form-control" id="nni" name="nni" required>
              </div>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="telephone" name="tel" required>
              </div>
              <div class="mb-3">
                <label for="date_naissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_nai" required>
              </div>
              <div class="mb-3">
                <label for="permis_de_conduire" class="form-label">Permis de conduire</label>
                <input type="file" class="form-control" id="permis_de_conduire" name="permi" required>
              </div>
              <div class="mb-3">
                <label for="photoID" class="form-label">Photo Identite</label>
                <input type="file" class="form-control" id="photoID" name="photoId" required>
              </div>
              <!-- <div class="mb-3">
                <label for="date_debut" class="form-label">Debut location</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
              </div>
              <div class="mb-3">
                <label for="date_fin" class="form-label">Fin location</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
              </div> -->
              <button type="submit" class="btn btn-primary">Valider</button>
            </form>
          </div>
      </div>


    </div>


    <?php include "cars_footer.php" ?>