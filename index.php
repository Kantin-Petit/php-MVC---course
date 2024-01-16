<?php
session_start();
?>
***Menu***<br>
<div id="menu">
    <a href="index.php?page=liste_produits&onglet=0">Tous les produits</a>
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
        header("Location: index.php?page=liste_produits&onglet=0");
    }
    ?>
</div>