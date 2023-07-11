<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The District: -Listes des plats</title>
    <link rel="stylesheet" href="dist/assets/index.css">
</head>
<header><!--Début du header pour la partie Layout(entete) -->
<?php include 'header.php';?>
    <br>
    <hr>
    <nav class="text-center">
        <ul class="list-unstyled">
            <button class="btn colorbtnplat" onclick="scrollToSection('#Asiatique')">Asiatique</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Burger')">Burger</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Pâtes')">Pâtes</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Pizzas')">Pizzas</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Salades')">Salades</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Sandwich')">Sandwich</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Veggies')">Veggies</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Wraps')">Wraps</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Kebab')">Kebab</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Libanais')">Libanais</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Panini')">Panini</button>
            <button class="btn colorbtnplat" onclick="scrollToSection('#Tacos')">Tacos</button>
        </ul>
    </nav>
    <script>function scrollToSection(sectionId) {
            var section = document.querySelector(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
    <hr>
</header><!--Fin du header pour la partie Layout(entete) -->

<body class="bplats" class="imgcommande">
    <section id="Asiatique">
        <h2>Plats Asiatiques</h2>
        <ul class="ulplats">
            <li class="liplats" >
                <img src="/images_the_disctrict/food/Plats/asiat1.jpg" class="imgcommande" alt="Image 1" style='width 150px; height: 150px;'>
                <div>
                    <h3>Sushi</h3>
                    <p>Sushi au saumon 2 pièces</p>
                    <p>Prix : 4.99€</p>
                    <button onclick="ajouterAuPanier(1)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/asiat2.jpeg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Maki</h3>
                    <p>Maki 6 pièces</p>
                    <p>Prix : 29.99€</p>
                    <button onclick="ajouterAuPanier(2)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/asiat3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Yakitori</h3>
                    <p>Brochette de boeufs avec fromage fondue à l'intérieur 3 pièces</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(3)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Burger">
        <h2>Burger</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger1.jpeg" class="imgcommande" alt="Image 1" style='width 150px; height: 150px;'>
                <div>
                    <h3>Burger Fromage</h3>
                    <p>Burger supplément fromage</p>
                    <p>Prix : 9.90€</p>
                    <button onclick="ajouterAuPanier(4)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger2.jpg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Buger Poisson</h3>
                    <p>Burger avec galette de poisson</p>
                    <p>Prix : 12.50€</p>
                    <button onclick="ajouterAuPanier(5)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/burger3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Anguss Noire</h3>
                    <p>Burger viande anguss avec pain noire</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(6)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Pâtes">
        <h2>Pâtes</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates1.jpeg" class="imgcommande" alt="Image 1" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes Carbonara</h3>
                    <p>Lardon fumé, crème fraîche, pâtes(tagliatelle), jaunes d'oeuf, oignon</p>
                    <p>Prix : 12.90€</p>
                    <button onclick="ajouterAuPanier(7)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates2.jpeg" class="imgcommande" alt="Image 2" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes Bolognaise</h3>
                    <p>Spaghettis, Viande de boeuf hachée, tomate pelée, oignon, ail, thym, laurier, huile d'olive
                    </p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(8)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_disctrict/food/Plats/pates3.jpeg" class="imgcommande" alt="Image 3" style='width 150px; height: 150px;'>
                <div>
                    <h3>Pâtes au Saumon</h3>
                    <p>Pâtes type penne, zeste de citron, crème fraîche épaisse, saumon fumé haché, anette, parmesan rapé</p>
                    <p>Prix : 12.95€</p>
                    <button onclick="ajouterAuPanier(9)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Pizzas">
        <h2>Pizzas</h2>
        <ul class="ulplats">
            <li class="liplats">
                <!--<img src="/images_the_disctrict/food/Plats/pizza1" class="imgcommande" alt="Image 1">-->
                <div>
                    <h3>4 Fromages</h3>
                    <p>Pizza chèvre, bleu, conmté, mozzarella, base tomate</p>
                    <p>Prix : 16.50€</p>
                    <button onclick="ajouterAuPanier(10)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <!--<img src="/images_the_disctrict/food/Plats/pizza2" class="imgcommande" alt="Image 2">-->
                <div>
                    <h3>Bolognaise</h3>
                    <p>base tomate, viande haché, gruyère rapé, oignon, huile d'olive, origan</p>
                    <p>Prix : 18.90€</p>
                    <button onclick="ajouterAuPanier(11)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
               <!-- <img src="/images_the_disctrict/food/Plats/pizza3" class="imgcommande" alt="Image 3">-->
                <div>
                    <h3>Magherita</h3>
                    <p>Parmesan reggianno, huile d'olive, mozzarella, feuille de basilic frais, base tomate</p>
                    <p>Prix : 14.50€</p>
                    <button onclick="ajouterAuPanier(12)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Salades">
        <h2>Salades</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(13)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(14)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(15)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Sandwich">
        <h2>Sandwich</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(16)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(17)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(18)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Veggies">
        <h2>Veggies</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(19)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(20)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(21)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Wraps">
        <h2>Wraps</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(22)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(23)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(24)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>imgcommande
    <section id="Kebab">
        <h2>Kebab</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(25)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(26)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(27)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Libanais">
        <h2>Libanais</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(28)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(29)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(30)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Panini">
        <h2>Panini</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(31)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(32)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(33)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <section id="Tacos">
        <h2>Tacos</h2>
        <ul class="ulplats">
            <li class="liplats">
                <img src="/images_the_district/food/buffalo-chicken.webp" class="imgcommande" alt="Image 1">
                <div>
                    <h3>Nom du produit 1</h3>
                    <p>Description du produit 1</p>
                    <p>Prix : 19.99€</p>
                    <button onclick="ajouterAuPanier(34)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/cheesburger.jpg" class="imgcommande" alt="Image 2">
                <div>
                    <h3>Nom du produit 2</h3>
                    <p>Description du produit 2</p>
                    <p>Prix : 24.99€</p>
                    <button onclick="ajouterAuPanier(35)">Ajouter</button>
                </div>
            </li>
            <li class="liplats">
                <img src="/images_the_district/food/Food-Name-3631.jpg" class="imgcommande" alt="Image 3">
                <div>
                    <h3>Nom du produit 3</h3>
                    <p>Description du produit 3</p>
                    <p>Prix : 14.99€</p>
                    <button onclick="ajouterAuPanier(36)">Ajouter</button>
                </div>
            </li>
        </ul>
    </section>
    <hr>
    <nav class="fixed-bottom">
  <div class=" font-panier text-center">
    <button class="btn btn-primary" onclick="afficherPanier()">Voir le Panier</button>
  </div>
</nav>

    <script>
      function ajouterAuPanier(idProduit) {
        var produit = {
          nom: "",
          description: "",
          prix: 0
        };
  
        if (idProduit === 1) {
          produit.nom = "Sushi";
          produit.description = "Sushi au saumon 2 pièces";
          produit.prix = 4.99;
        } else if (idProduit === 2) {
          produit.nom = "Maki";
          produit.description = "Maki goût variés 6 pièces";
          produit.prix = 29.99;
        } else if (idProduit === 3) {
          produit.nom = "Yakitori";
          produit.description = "Brochette de boeufs avec fromage fondue à l'intérieur 3 pièces";
          produit.prix = 14.99;
        } else if (idProduit === 4) {
          produit.nom = "Burger fromage";
          produit.description = "Burger supplément fromage";
          produit.prix = 9.90;
        }else if (idProduit === 5) {
          produit.nom = "Burger Poisson";
          produit.description = "Burger avec galette de poisson";
          produit.prix = 12.50;
        }else if (idProduit === 6) {
          produit.nom = "Anguss Noire";
          produit.description = "Burger viande anguss avec pain noire";
          produit.prix = 24.99;
        } else if (idProduit === 7) {
          produit.nom = "Pâtes Carbonara";
          produit.description = "Lardon fumé, crème fraîche, pâtes(tagliatelle), jaunes d'oeuf, oignon";
          produit.prix = 12.90;
        } else if (idProduit === 8) {
          produit.nom = "Pâtes Bolognaise";
          produit.description = "Spaghettis, Viande de boeuf hachée, tomate pelée, oignon, ail, thym, laurier, huile d'olive ";
          produit.prix = 14.99;
        }else if (idProduit === 9) {
          produit.nom = "Pâtes au Saumon";
          produit.description = "Pâtes type penne, zeste de citron, crème fraîche épaisse, saumon fumé haché, anette, parmesan rapé";
          produit.prix = 12.95;
        }else if (idProduit === 10) {
          produit.nom = "4 Fromages";
          produit.description = "Pizza chèvre, bleu, conmté, mozzarella, base tomate";
          produit.prix = 16.50;
        } else if (idProduit === 11) {
          produit.nom = "Bolognaise";
          produit.description = "base tomate, viande haché, gruyère rapé, oignon, huile d'olive, origan";
          produit.prix = 18.90;
        } else if (idProduit === 12) {
          produit.nom = "Margherita";
          produit.description = "Parmesan reggianno, huile d'olive, mozzarella, feuille de basilic frais, base tomate";
          produit.prix = 14.50;
        }else if (idProduit === 13) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 14) {
          produit.nom = "Nom du produit 2";
          produit.description = "Description du produit 2";
          produit.prix = 24.99;
        } else if (idProduit === 15) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 16) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 17) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 18) {
          produit.nom = "Nom du produit 2";
          produit.description = "Description du produit 2";
          produit.prix = 24.99;
        } else if (idProduit === 19) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 20) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 21) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 22) {
          produit.nom = "Nom du produit 2";
          produit.description = "Description du produit 2";
          produit.prix = 24.99;
        } else if (idProduit === 23) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 24) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 25) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 26) {
          produit.nom = "Nom du produit 2";
          produit.description = "Description du produit 2";
          produit.prix = 24.99;
        } else if (idProduit === 27) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 28) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 29) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 30) {
          produit.nom = "Nom du produit 2";
          produit.description = "Description du produit 2";
          produit.prix = 24.99;
        } else if (idProduit === 31) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 32) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 33) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 34) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        } else if (idProduit === 35) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }else if (idProduit === 36) {
          produit.nom = "Nom du produit 3";
          produit.description = "Description du produit 3";
          produit.prix = 14.99;
        }
  
        var panier = JSON.parse(sessionStorage.getItem("panier")) || [];
        panier.push(produit);
        sessionStorage.setItem("panier", JSON.stringify(panier));
  
        alert("Le produit a été ajouté au panier !");
      }
  
      function afficherPanier() {
        window.location.href = "Commande.php";
      }
    </script>
    <br><br>
    </body>
<foot>
    <?php include 'footer.php';?>
</foot>

<script type="module" src="dist/assets/index.js"></script>

</html>