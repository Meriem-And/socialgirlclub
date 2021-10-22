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

/*session*/
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



<!--le main -->


<!-- formulaire contact -->

<section id="formulaireC">

  <form id="formulaire" name="formulaire" method="post" action="php/verifier_connexion.php">

    <p>SocialClubGirl <br> Connectez vous :   </p>


    <p>Pseudo:<b>*</b><br>
      <input class="espacegauche" type="text" name="userInfoName" placeholder="Nom Prenom" required>
    </p>

    <p>Mot de passe :<b>*</b><br>
      <input class="espacegauche" type="text" name="userInfoPass" placeholder="Nom Prenom" required>
    </p>

    <input id="btn2" type="submit" name="txtSoumettre" value="Envoyer !" />
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