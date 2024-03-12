<?php 
if($_SESSION['user']){

    $_SESSION['panier']= unserialize($_COOKIE['panier']);


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
    var_dump($produit);
    $_SESSION['panier'][$produit] = $quantite;

}

header("Location:index.php?page=panier");
}
else {
    header("Location:index.php?page=connexion");
}


?>