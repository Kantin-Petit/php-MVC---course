<?php 
include('bd.php');
try{
    $idprod = $_GET['idprod'];

    $querie = "SELECT * FROM `produit` WHERE id = :idprod;";
    $res = $mysqlClient->prepare($querie);
    $res->bindParam(':idprod', $idprod);
    $res -> execute();
} catch (PDOException $e) {
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}


if ($_GET['mode'] == 'u') {
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $support = $_POST['support'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $artiste = $_POST['artiste'];
    $idprod = $_GET['idprod'];

    try {
        // Requête d'insertion avec préparation et exécution
    $requete = $mysqlClient->prepare("UPDATE produit SET `Titre`=:titre, `Date`=:date, `Genre`=:genre, `Support`=:support, `Prix`=:prix, `Stock`=:stock, `Image`=:image, `Description`=:description, `Artiste`=:artiste WHERE `Id` = :idprod;");

    $requete->bindParam(':titre', $titre);
    $requete->bindParam(':date', $date);
    $requete->bindParam(':genre', $genre);
    $requete->bindParam(':support', $support);
    $requete->bindParam(':prix', $prix);
    $requete->bindParam(':stock', $stock);
    $requete->bindParam(':image', $image);
    $requete->bindParam(':description', $description);
    $requete->bindParam(':artiste', $artiste);
    $requete->bindParam(':idprod', $idprod);

    // Exécution de la requête
    $requete->execute();

    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'enregistrement : " . $e->getMessage();
    }
}




?>