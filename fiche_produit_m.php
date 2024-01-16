<?php 
include('bd.php');
$idprod = $_GET['idprod'];

$querie = "SELECT * FROM `produit` WHERE id = :idprod;";
$res = $mysqlClient->prepare($querie);
$res->bindParam(':idprod', $idprod);
$res -> execute();
?>