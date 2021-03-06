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
    <script type="text/javascript" src="js/script.js"></script>
  </body>
  <footer>
	<div class="footer">
		<ul>
			<li><a href="contact.html">Contact</a></li>
			<li><a>CGU</a></li>
			<li><a>Mentions l??gales</a></li>
			<!-- FAQ -->
		</ul>
	</div>
</footer>
</html>
