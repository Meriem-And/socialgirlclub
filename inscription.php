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
   <script src="js/script.js" defer> </script>
</head>


<body>


 entête

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


<section id="formulaireB">

  <form data-form id="formulaire" method="post"action="reponse.php" name="formulaire">

    <p>SocialClubGirl <br> Créer un compte  </p>


    <p data-label-utilisateur>Pseudo:<b>*</b><br>
      <input data-input-utilisateur class="espacegauche" type="text" name="userInfoName" placeholder="user name " required>
    </p>
      <p data-text-error1 class="error hidden "> * Chanps obligatoire</p>

    <p data-label-mdp>Mot de passe :<b>*</b><br>
      <input data-input-mdp class="espacegauche" type="text" name="userInfoPass" placeholder="*********" required>
    </p>
      <p data-text-error2 class="error hidden">* Format mot de passe invalide .
          Le mot de passe sera validé que si il a de 8 a 15 caractères,
          au moins une lettre minuscule, au moins une lettre majuscule,
          au moins un chiffre, au moins un de ces caractères spéciaux: $ @ % * + - _ ! ,
          aucun autre caractère possible: pas de & ni de { par exemple.</p>


    <input data-js-button id="btn" type="submit" name="txtSoumettre" value="Envoyer !" />

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