<?php 
    session_start();
    $produit= (int)$_GET["produit"];
    if(!isset($_GET["quantité"])){
        $quantite = 1;
    }else{
        $quantite = $_GET["quantité"];
    }
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
    if (isset($_SESSION['panier'][$produit])) {
        $_SESSION['panier'][$produit] += $quantite;
    } else {
        $_SESSION['panier'][$produit] = $quantite;
    }
    var_dump($_SESSION['panier']);
    //header("Location: panier.php")
?>