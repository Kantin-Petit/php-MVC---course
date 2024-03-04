<?php
setcookie("user",$_SESSION['user']);
setcookie("panier",serialize($_SESSION['panier']));

include('bd.php');

$querie = "SELECT * FROM `Article` WHERE id_art =1 ";

foreach ($_SESSION['panier'] as $idProduit => $quantite) {
    $querie = $querie." OR id_art = $idProduit  ";
}
$res = $mysqlClient->prepare($querie);
$res -> execute();
$row = $res -> fetchAll();



?>