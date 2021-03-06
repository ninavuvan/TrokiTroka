<!DOCTYPE html>
<html lang="fr">
	<?php  
  $connexionaddr = "connexion.php";
  $contactaddr = "contact.php";
  $favorisaddr = "favoris.php";
  $fonctionnementaddr = "fonctionnement.php";
  $indexaddr = 'index.php';
  $proposeraddr = "jePropose.php";
  $rechercheaddr = "jeRecherche.php";
  $panieraddr = "panier.php";
?>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=E">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="medias/favicon.ico"/>
		<title>Troki Troka</title>
	</head>
	<body>
		<!-- CREATION D'UNE BANNIERE HAUT DE PAGE -->
    <div class="banniere">
      <span>Trok Trokons Trokez</span>
    </div>
    <!-- CREATION DU HEADER -->
    <header class="header">
      <nav class="nav container">
        <div class="navigation d-flex">
          <div class="icon1">
          <!-- AJOUT DE L'ICONE DU MENU (3 barres) -->
            <i class='bx bx-menu'></i>
	        </div>
	        <!-- CREATION DU LOGO  -->
	        <div class="logo">
		        <a href="<?php echo $indexaddr; ?>"><span>TROKI</span> TROKA</a>
	        </div>
	        <!-- MENU POUR LE RESPONSIVE -->
	        <div class="menu">
            <div class="top">
            <!-- AJOUT DE LA CLASSE POUR FERMER LE MENU -->
              <span class="fermer">Fermer <i class='bx bx-x'></i></span>
            </div>
            <!-- LISTE DU MENU -->
            <ul class="nav_list d-flex">
              <li class="nav-item"><a href="<?php echo $fonctionnementaddr; ?>" class="nav-link">Fonctionnement</a></li>
              <li class="nav-item"><a href="<?php echo $proposeraddr; ?>" class="nav-link">Je propose</a></li>
              <li class="nav-item"><a href="<?php echo $rechercheaddr; ?>" class="nav-link">Je recherche</a></li>
            </ul>
          </div>
	        <!-- LIENS AVEC LES ICONES POUR ACCEDER A LA PAGE -->
	        <div class="icons d-flex">
		        <div>
			        <a href="<?php echo $rechercheaddr; ?>"><i class='bx bx-search'></i></a>
		        </div>
		        <div>
			        <a href="<?php echo $connexionaddr; ?>"><i class='bx bx-user'></i></a>
		        </div>
		        <div>
			        <a href="<?php echo $favorisaddr; ?>"><i class='bx bx-heart'></i></a>
		        </div>
		        <div>
			        <a href="<?php echo $panieraddr; ?>"><i class='bx bx-shopping-bag'></i></a>
			        <span class="align-center">0</span>
		        </div>
	        </div>
        </div>
      </nav>
    </header>
    <div class="annonce">
      <form id="form" method="post"> <!-- ajouter une action -->
        <h1>Je propose</h1>
        <div class="option" id="cat">
          <label for="categorie">Cat??gorie :</label>
          <select required name="categorie" id="categorie">
            <option value="selected" selected disabled>Choix</option>
            <option value="informatique/multim??dia">Informatique/Multim??dia</option>
            <option value="bricolage">Bricolage</option>
            <option value="service">Service</option>
            <option value="maison">Maison</option>
            <option value="enfance">Enfance</option>
            <option value="animaux">Animaux</option>
            <option value="beaut??/bien-??tre">Beaut??/Bien-??tre</option>
            <option value="v??tements-accessoires">V??tements et accessoires</option>
            <option value="sport">Sport</option>
          </select>
        </div>
        <div class="option" id="loc">
          <label for="localisation">Localisation :</label>
          <select required name="localisation" id="localisation">
            <option value="selected" selected disabled>Choix</option>
                <select name="Pays">
                    <?php
                        $Json = file_get_contents("json/villes.json");
                        $tab = json_decode($Json, true);
                        //var_dump($tab); // prints array
                        foreach ($tab as $v){
                            echo '<option value ="' . $v . '">' . $v . '</option>';
                        }
                    ?>
                </select><br></label>

          </select>
        </div>
        <div class="option" id="title">
          <label for="titre">Titre de l'annonce :</label><br>
          <input type="text" id="titre" name="titre"><br>
        </div>
        <div class="option" id="annonce">
          <label for="annonce">Photos de l'annonce :</label>
        </div>
        <div class="option" id="descr">
          <label for="description">Description de l'annonce :</label><br>
          <input type="text" id="description" name="description"><br>
        </div>
        <div class="option" id="poster">
          <input type="submit" value="Poster !">
        </div>
      </form>
    </div>
    <!-- AJOUT DU FOOTER -->
        <footer id="footer" class="section footer">
          <div class="container">
            <div class="footer-container">
              <div class="footer-center">
                <h3>TITRE 1</h3>
                <a href="#">texte 1</a>
                <a href="#">texte 2</a>
                <a href="#">texte 3</a>
                <a href="#">texte 4</a>
                <a href="#">texte 5</a>
              </div>
              <div class="footer-center">
                <h3>TITRE 2</h3>
                <a href="#">texte 1</a>
                <a href="#">texte 2</a>
                <a href="#">texte 3</a>
                <a href="#">texte 4</a>
                <a href="#">texte 5</a>
              </div>
              <div class="footer-center">
                <h3>TITRE 3</h3>
                <a href="#">texte 1</a>
                <a href="#">texte 2</a>
                <a href="#">texte 3</a>
                <a href="#">texte 4</a>
                <a href="#">texte 5</a>
              </div>
              <div class="footer-center">
                <h3>CONTACTE NOUS</h3>
                <div>
                  <span>
                    <i class="fa fa-map-marker-alt"></i>
                  </span>
                  Marseille
                </div>
                <div>
                  <span>
                    <i class="fa fa-envelope"></i>
                  </span>
                  @gmail
                </div>
                <div>
                  <span>
                    <i class="fa fa-phone"></i>
                  </span>
                  0783...
                </div>
                <div>
                  <span>
                    <i class="fa fa-paper-plane"></i>
                  </span>
                  France
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            Copyright??2021 Tous droits r??serv??s
        </footer>

        <!-- FIN DU FOOTER -->
    
    <!-- AJOUT DU SCRIPT JS -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
