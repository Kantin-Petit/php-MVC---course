<?php 
include('bd.php');
$idprod = $_GET['idprod'];

try{
    $idprod = isset($_GET['idprod']) ? $_GET['idprod'] : null;

    if ($idprod == null || $idprod == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération du produit");
    }else{
        $querie = "SELECT * FROM `produit` WHERE id = :idprod;";
        $res = $mysqlClient->prepare($querie);
        $res->bindParam(':idprod', $idprod);
        $res -> execute();
    }
}catch(PDOException $e){
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}
?>