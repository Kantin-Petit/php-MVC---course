<?php
include('bd.php');


if ($_GET['mode'] == 'd') {
    $idprod = $_GET['idprod'];


    try {
        // Requête d'insertion avec préparation et exécution
    $requete = $mysqlClient->prepare(
        "DELETE FROM produit WHERE `Id` = :idprod; "
    );

        $requete->bindParam(':idprod', $idprod);

        $requete->execute();
        echo "Le produit a été suprimmé";
    }
    catch (PDOException $e) {
        echo "Erreur lors de la supression de l'enregistrement : " . $e->getMessage();

    }
}
?>