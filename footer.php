<nav>
      <div class="d-flex justify-content-end align-items-center">
        <a id="arrow-up" class="me-5">
          <i class="fa-solid fa-arrow-up fa-beat fa-2xl"
            style="color: #ff7800;"></i><!--Flêche à droite permettant de remonter en haut de la page-->
        </a>
      </div>
    </nav>
    <!--Partie Script pour la flêche-->
    <script>
      document.getElementById('arrow-up').addEventListener('click', function () {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    </script>
    <!--fin de la partie Script pour la flêche-->
    <div class="couleur-navigation placers d-flex justify-content-center align-items-center flex-wrap">
      <!--Début de la partie Réseaux Sociaux-->
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-instagram fa-bounce"
          style="color: #ff7800;font-size:100px;"></i></a>
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-pinterest fa-bounce"
          style="color: #ff7800;font-size:100px;"></i></a>
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-twitter fa-bounce"
          style="color: #ff7800;font-size:100px;"></i></a>
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-linkedin fa-bounce"
          style="color: #ff7800;font-size:100px;"></i></a>
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-facebook fa-bounce"
          style="color: #ff7800;font-size:100px"></i></a>
      <a class="taillelogors my-5 mx-5"><i class="fa-brands fa-youtube fa-bounce"
          style="color: #ff7800;font-size:100px"></i></a>
    </div><!--Fin de la partie Réseaux Sociaux-->
    <?php echo "je viens du footer.php";?>
    <script type="module" src="main.js"></script>   