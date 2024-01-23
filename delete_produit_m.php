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
        
        header('Location: index.php?page=liste_produits&onglet=0&genre=&search=');
    }
    catch (PDOException $e) {
        echo "Erreur lors de la supression de l'enregistrement : " . $e->getMessage();

    }
}
?>