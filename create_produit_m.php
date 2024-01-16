<?php 
include('bd.php');

if ($_GET['mode'] == 'c') {
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $genre = $_POST['genre'];
    $support = $_POST['support'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $artiste = $_POST['artiste'];

    try {
        // Requête d'insertion avec préparation et exécution
        $requete = $mysqlClient->prepare("INSERT INTO `produit` (`Titre`, `Date`, `Genre`, `Support`, `Prix`, `Stock`, `Image`, `Description`, `Artiste`) VALUES (:titre, :date, :genre, :support, :prix, :stock, :image, :description, :artiste)");
        
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':date', $date);
        $requete->bindParam(':genre', $genre);
        $requete->bindParam(':support', $support);
        $requete->bindParam(':prix', $prix);
        $requete->bindParam(':stock', $stock);
        $requete->bindParam(':image', $image);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':artiste', $artiste);
        
        // Exécution de la requête
        $requete->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'enregistrement : " . $e->getMessage();
    }
}




?>