<!DOCTYPE html>
<html lang="fr-fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The District: -Catégorie</title>
  <link rel="stylesheet" href="dist/assets/index.css">
</head>
<lol></lol>
<body>
  <header><!--Début du header pour la partie Layout(entete) -->
    <?php include('header.php');?>
  </header><!--Fin du header pour la partie Layout(entete) -->
  <br>
  <div class="d-flex justify-content-center couleur-navigation">
    <!--Début de la partie affichage des catégorie Image+Titre-->
    <div class="container   text-center">
      <div class="row d-flex justify-content-center fs-1 text-center ">
        <p class="couleurslogan"><strong>Un large choix sur nos plats !</strong></p>
      </div>
      <div class="row">
        <div class="img-cat col-md-4 mb-4 ">
          <img src="/images_the_disctrict/category/asian_food_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Asiatiques</h4>
        </div>
        <div class="img-cat col-md-4 mb-4 ">
          <img src="/images_the_disctrict/category/burger_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Burgers</h4>
        </div>
        <div class="img-cat  col-md-4 mb-4">
          <img src="/images_the_disctrict/category/pasta_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Pâtes</h4>
        </div>
      </div>
      <div class="row">
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/pizza_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Pizzas</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/salade_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Salades</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/sandwich_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Sandwichs</h4>
        </div>
      </div>
      <div class="row d-none" id="secondRow">
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/veggie_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Veggies</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/wrap_cat.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Wraps</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/kebab.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Kebabs</h4>
        </div>
      </div>
      <div class="row d-none" id="thirdRow">
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/libanais-unver-kebab-lille.jpg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Libanais</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/Panini.jpeg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Paninis</h4>
        </div>
        <div class="img-cat col-md-4 mb-4">
          <img src="/images_the_disctrict/category/Tacos.jpeg" class="d-block" alt="..."
            style="width:250px;height:250px;">
          <h4 class="couleurslogan">Tacos</h4>
        </div>
      </div>
      <div class="row">
        <div class="img-cat col-12 text-center">
          <button id="loadMoreBtn" class="btn btn-primary">Afficher plus</button>
          <button id="showLessBtn" class="btn btn-secondary d-none">Afficher moins</button>
        </div>
      </div>
    </div>
  </div><!--Fin de la partie affichage des catégorie Image+Titre-->
  <script>//Partie Script en Java Script permettant d'afficher plus ou moins selon la demande l'utilisateur lors du clique sur les boutons//
    // Récupérer les éléments du DOM
    const secondRow = document.getElementById('secondRow');
    const thirdRow = document.getElementById('thirdRow');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const showLessBtn = document.getElementById('showLessBtn');

    // Ajouter un gestionnaire d'événements au bouton "Afficher plus"
    loadMoreBtn.addEventListener('click', function () {
      secondRow.classList.remove('d-none');
      thirdRow.classList.remove('d-none');
      loadMoreBtn.classList.add('d-none');
      showLessBtn.classList.remove('d-none');
    });

    // Ajouter un gestionnaire d'événements au bouton "Afficher moins"
    showLessBtn.addEventListener('click', function () {
      secondRow.classList.add('d-none');
      thirdRow.classList.add('d-none');
      loadMoreBtn.classList.remove('d-none');
      showLessBtn.classList.add('d-none');
    });
  </script>
  <!--Partie Script en Java Script permettant d'afficher plus ou moins selon la demande l'utilisateur lors du clique sur les boutons-->
  </div>
  </div>
</body>
<foot>
<?php include 'footer.php';?>
</foot>

<script src="dist/assets/index.js"></script>

</html>