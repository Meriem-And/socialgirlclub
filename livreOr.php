<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">

<title> SocialClGirl |  Le restaurant </title>
<meta name="description" content="Site de mon restaurant">
<meta name="keywords" content="TP1 Tasty, Cuisine,Maroc">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


	<link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- entête -->


<header class="container">
	<!-- logo -->
	<div class="color">
		<div class="logo"><a href="index.php"><img src="img/logo2.png" alt="logo"/></a></div>


		<!-- navigation -->
		<nav class="menu-container">
			<div class="menu-toggle">Menu</div>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="carte.php">La carte</a></li>
				<li><a href="philo.php">Philosophie</a></li>
				<li><a href="livreOr.php" class="contact">Livre d'or </a> </li>
				<li><a href="inscription.php" class="contact">S'inscrire  </a> </li>
				<li><a href="connexion.php" class="contact">Se connecter   </a> </li>


			</ul>

		</nav>
		<!-- barre de recherche -->
		<section class="recherche">
			<form class="formRecherche">
				<input class="champ" type="text" name="Recherche"  placeholder="Rechercher" />
				<i class="fas fa-search"></i>
			</form>
		</section>


	</div>
</header>



    <!-- fin entête -->



    <!--le main -->


<!-- formulaire contact -->

<section id="formulaireB">

	<form id="formulaire" name="formulaire">

		<p>SocialClubGirl <br> Laissez nous un petit mot </p>


		<p>Nom:<br>
			<input class="espacegauche" type="text" name="txtNom" placeholder="Nom Prenom" required>
		</p>

		<p>
			Message: <b>*</b><br>
			<textarea class="choix" name="comm" rows=10 cols=50 required placeholder="la longeur de votre message doit etre superiere à 20 caractaires"></textarea>
		</p>

			<input id="btn" type="submit" name="txtSoumettre" value="Envoyer !" />
		</p>
	</form>



</section>



	<footer id="footer">
		
		<p>
		<i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-instagram"></i> <i class="fab fa-youtube-square"></i> <br><br>
		Copyright : Meriem androussi. - 2021</p>
		<p>source: Images: Google images</p>


	</footer>




















</body>
</html>