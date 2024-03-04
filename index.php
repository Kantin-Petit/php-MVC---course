<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    ***Menu***<br>
    <div id="menu">
        <a href="index.php?page=liste_produits&onglet=0&categorie=&search=">Tous les produits</a>

        <?php
            if(isset($_SESSION['user']))
            {
        ?>
                <a href="index.php?page=deconnexion">Déconnexion</a>
                <a href="index.php?page=admin&onglet=0&categorie=&search=">admin page</a>
                <a href="index.php?page=panier">panier</a>
        <?php
            }
            else
            {
        ?>
                <a href="index.php?page=connexion">Connexion</a>
                <a href="index.php?page=inscription">Inscription</a>
        <?php
            }
        ?>
        
    </div>

    <br>
    ***Fonctionnalités***<br>

    <div>
        <?php 
        if(isset($_GET["page"]))
        {
            include($_GET["page"].".php");
        }
        else
        {
            header("Location: index.php?page=liste_produits&onglet=0&categorie=&search=");
        }
        ?>
    </div>
</body>
</html>
