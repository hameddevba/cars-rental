<?php

include "cars_header.php";
?>


  <section class="py-5 text-center container">
      
    </section>

    <div class="album py-5 bg-light container">
      <div class="card mb-3" ">
        <div class="row g-0">
          <div class="col-md-5">
           <img class="img-fluid"
                    src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=CAC80HOC021B121001.jpg&width=440&height=262"
                    alt="Alternate Text" />
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

        <div class="container">
        <h1 class="text-center my-5">Formulaire de réservation de voiture</h1>
        <div class="container" style="border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); width: 800px;">
            <form method="post" action="#" class="my-3 py-5 px-3">
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
                <input type="tel" class="form-control" id="telephone" name="telephone" required>
              </div>
              <div class="mb-3">
                <label for="date_naissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
              </div>
              <div class="mb-3">
                <label for="permis_de_conduire" class="form-label">Permis de conduire</label>
                <input type="file" class="form-control" id="permis_de_conduire" name="permis_de_conduire" required>
              </div>
               <div class="mb-3">
                <label for="photoID" class="form-label">Photo Identite</label>
                <input type="file" class="form-control" id="photoID" name="photoID" required>
              </div>
                <div class="mb-3">
                <label for="date_debut" class="form-label">Debut location</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
              </div>
                <div class="mb-3">
                <label for="date_fin" class="form-label">Fin location</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
              </div>
              <button type="submit" class="btn btn-primary">Valider</button>
            </form>
          </div>
      </div>


    </div>


    <?php include "cars_footer.php" ?>