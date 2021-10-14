<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title> SocialClGirl | Le restaurant </title>
    <meta name="description" content="Site de mon restaurant">
    <meta name="keywords" content="TP1 Tasty, Cuisine,Maroc">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
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


<!-- Les 3 banierres cliquable  -->

<section class="images">

    <div class="images1">
        <h2 class="titre1">Notre Restaurant</h2>
        <a href="#texte1">
            <div class="couleur-img1"></div>
        </a>
        <img class="img1" src="img/resto1.jpg" alt="Le Restaurant" title="Le Restaurant"/>

    </div>

    <div class="images2">
        <h2 class="titre2">Notre Cuisine</h2>
        <a href="#texte2">
            <div class="couleur-img2"></div>
        </a>
        <img class="img2" src="img/cuisine.jpg" alt="Notre cuisine" title="Notre Cuisine"/>

    </div>

    <div class="images3">

        <h2 class="titre3">Vos Evenements</h2>
        <a href="#texte3">
            <div class="couleur-img3"></div>
        </a>
        <img class="img3" src="img/event.jpg" alt="events" title="events"/>

    </div>

</section>


<!-- coprs de la page/paragraphes et images  -->
<section>

    <aside id="texte1">
        <div class="para1">

            <img src="img/restorant.jpg" alt="Le Restaurant" title="Le Restaurant-Source Google image"/>
            <div class="para-milieu1">
                <h1>Le Restaurant</h1>
                <p class="textp"> SocialclubGirl est un retstaurant unique de son genre , car il est destinée juste aux
                    filles</p>
                <p class="textp">Tout nos plats , nos mets ,decord , serveurs / seveuses porte la couleur rose </p>
                <div><p class="textp"> Venez nous retrouver sur l'adresse suivante : </p>

                    <p class="textp"> 255 chemin des couleurs </p>
                    <p class="textp"> Code postale 333</p>
                    <p class="textp">tel 333 444 6666 </p>


                </div>

            </div>
            <a href="#home"><h3>Retour en haut ></h3></a>
        </div>
    </aside>


    <aside id="texte2">
        <div class="para2">
            <div class="para-milieu2">
                <h1>Notre Cuisine</h1>
                <p class="textp">Eh oui , ce n'est pas facile de vous trouver une bonne cuisine et de bon plat saint ,
                    c'est pourauoi nous avons fait appel aux plus grands chefs cuisinier du pays </p>
                <p class="textp"> Vous allez donc pouvoir manger des chefs d'oeuvre de couleur rose et en meme temps
                    savoureuse </p>
                <p class="textp"> une panoplie de gateau et plat , attende vous les decouvrez , vous serez etonnée </p>

            </div>
            <img src="img/smoothie-framboise.jpg" alt="Notre Cuisine" title="Notre Cuisine-Source Google image"/>
            <a href="#home"><h3>Retour en haut ></h3></a>
        </div>
    </aside>


    <aside id="texte3">
        <div class="para3">

            <img src="img/fete.jpg"/>
            <div class="para-milieu3">
                <h1>Vos evenements </h1>
                <p class="textp">Vous avez un éevenement a venir , anniversaire , babyshower ou vous allez dire a dieu
                    au celibat ,
                    eh bien c'est l'endroit qui vous faut .</p>
                <p class="textp">Nous vous garantions le meilleur de ce qui existe , une ambiance de fete , de la bonne
                    mudique , une bonne animation et de lka bonne nourriture . </p>
                <p class="textp">Vous pouvez compter sur nous dés maintenant car votre evenement sera un jour grandiose
                    .</p>
            </div>
            <a href="#home"><h3>Retour en haut ></h3></a>
        </div>
    </aside>


</section>


<!-- Fotter/pied de page  -->
<footer id="footer">

    <p>
        <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i> <i class="fab fa-instagram"></i> <i
                class="fab fa-youtube-square"></i> <br><br>
        Copyright : Meriem androussi. - 2021</p>
    <p>source: Images: Google images</p>


</footer>


</body>
</html>