<?php 
include('bd.php');
$idprod = $_GET['idprod'];

$querie = "SELECT * FROM `Article` WHERE id_art = :idprod;";
$res = $mysqlClient->prepare($querie);
$res->bindParam(':idprod', $idprod);
$res -> execute();
?>