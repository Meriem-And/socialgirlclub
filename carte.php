<?php
session_start();
?>
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
<!--iconeset style -->

	<link rel="stylesheet" href="css/style.css">



</head>


<body>


<!-- entête -->


<header class="container">
    <!-- logo -->
    <div class="color">
        <div class="logo"><a class="img-logo" href="index.php"><img  class="img-logo" src="img/logo2.png" alt="logo"/></a></div>


        <!-- navigation -->
        <nav class="menu-container">
            <div class="menu-toggle">Menu</div>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="carte.php">La carte</a></li>
                <li><a href="philo.php">Philosophie</a></li>
                <li><a href="livreOr.php" class="contact">Livre d'or </a></li>
                <li><a href="inscription.php" class="contact">S'inscrire </a></li>
                <li class="bienvenu"><?php if (isset($_SESSION["user"]) ) {
                        echo "Bienvenu " . $_SESSION["user"];


                    }
                    else{
                        echo '<a href="connexion.php" class="contact">Se connecter </a>';
                    }?> </li>
                <?php if(isset($_SESSION["user"])) {
                    echo "<li><a href='php/deconnection.php'>Déconnection</a></li>";
                } ?>




            </ul>

        </nav>


    </div>
</header>



    <!-- fin entête -->



	 <section >
 <aside id="texte1">
	 	<div class="para1">
	 	
		 	<img src="img/capkake.jpg" />
		 	<div class="para-milieu1">
		 	<h1> Petit dej princesse </h1>
		 	<p class="textp">Ce menu contient : </p>
			<p class="textp">- Crepe aux fraise</p>
				<p class="textp">	- Ju de frais</p>
				<p class="textp">	- Gateau a la fraise</p>
				<p class="textp">	- Lait au chocolat chaud ou froid en rose , saveur fraise .</p>


			</div>

		 	</div>

	 	</div>
	 	</aside>
	 	
	 		
		<aside id="texte2">
	 	<div class="para2">
			<img src="img/salade.jpg" />
		 	<div class="para-milieu2">
		 	<h1>Dejeuner en rose </h1>
				<p class="textp">ce menu contient : </p>
				<p class="textp">   - Entrée :  Salade riz bettrave </p>
				<p class="textp">	- Plat principal :  tartare au crevettes</p>
				<p class="textp">	- Dessert tarte fruit rouge</p>
				<p class="textp">	- Jus saveur fruit rouge .</p>


			</div>
			</div>

	 	</aside>


	 	<aside id="texte3">
	 	<div class="para3">
		 	
		 	<img src="img/sushi.jpg"  />
		 	<div class="para-milieu3">
		 	<h1>Diner Girly  </h1>
				<p class="textp">Ce menu contient  : </p>
				<p class="textp">   - Entrée :  Sushi em rose du chef  </p>
				<p class="textp">	- Plat principal :  Pates du chef </p>
				<p class="textp">	- Dessert : Morcxeau de gateau du chef</p>
				<p class="textp">	- Jus proposé par le chef   </p>



	 	</div>
		</div>
	 	</aside>
       
	 
	</section>


<!-- Fotter/pied de page  -->
	<footer id="footer">
		
		<p>
		<i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-instagram"></i> <i class="fab fa-youtube-square"></i> <br><br>
		Copyright : Meriem androussi. - 2021</p>
		<p>source: Images: Google images</p>


	</footer>




















</body>
</html>