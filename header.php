<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header><!--Début du header pour la partie Layout(entete) -->
      <nav class="color navbar navbar-expand-lg bg-danger rounded custom-rounded "><!--Début de la NavBar Bootstrap-->
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="logo" src="/images_the_disctrict/the_district_brand/logo.png"
              alt="logo" title="logo"></a>
          <ul class="col-3 nav-link couleurtitre fs-1"><u><b>The District</b></u></ul>
          <button class="navbar-toggler col-btn" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-primary"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" aria-current="page"
                  href="index.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" href="/Categorie.html">Catégorie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-heading active fs-1" href="/Contact.html">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-heading active fs-1" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Plats</a>
                <ul class="dropdown-menu custom-heading" aria-labelledby="menudropdown">
                    <li><a class="dropdown-item custom-heading active fs-2" href="/Plats.html">Choix</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Asiatiques</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Burgers</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Pâtes</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Pizzas</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Salades</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Sandwichs</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Veggies</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Wraps</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Kebabs</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Libanais</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Paininis</a></li>
                    <li><a class="dropdown-item custom-heading active fs-2" href="#">Tacos</a></li>
                </ul>
            </li>
        </ul>
            <ul class="ml-auto">
              <form class="d-flex justify-content-right align-items-center " role="search">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success color-search" type="submit">Rechercher</button>
              </form>
            </ul>

          </div>
        </div>
      </nav><!--Fin de la NavBar-->
    </header><!--Fin du header pour la partie Layout(entete) -->
    
<body>
 <script type="module" src="main.js"></script>   
</body>
</html>