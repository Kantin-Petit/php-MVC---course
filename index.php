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
        <a href="index.php?page=liste_produits&onglet=0&genre=&search=">Tous les produits</a>
        <a href="index.php?page=create_produit&mode=r">Créer un produit</a>
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
            header("Location: index.php?page=liste_produits&onglet=0&genre=&search=");
        }
        ?>
    </div>
</body>
</html>
