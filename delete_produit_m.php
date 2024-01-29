<?php
include('bd.php');


if ($_GET['mode'] == 'd') {
    $idprod = $_GET['id_art'];


    try {
        // Requête d'insertion avec préparation et exécution
    $requete = $mysqlClient->prepare(
        "DELETE FROM Article WHERE `id_art` = :id_art; "
    );

        $requete->bindParam(':id_art', $id_art);

        $requete->execute();
        
        header('Location: index.php?page=liste_produits&onglet=0&genre=&search=');
    }
    catch (PDOException $e) {
        echo "Erreur lors de la supression de l'enregistrement : " . $e->getMessage();

    }
}
?>