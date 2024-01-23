<?php 
include('bd.php');

if ($_GET['mode'] == 'c') {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];
    $categorie = $_POST['categorie'];

    try {
        // Requête d'insertion avec préparation et exécution
        $requete = $mysqlClient->prepare("INSERT INTO Article (titre_art, description_art, prix_art, stock_art, photo_art, fk_categorie) VALUES (:titre, :description :prix, :stock, :image, :categorie)");
        
        $requete->bindParam(':titre', $titre);
        $requete->bindParam(':description', $description);
        $requete->bindParam(':prix', $prix);
        $requete->bindParam(':stock', $stock);
        $requete->bindParam(':image', $image);
        $requete->bindParam(':categorie', $categorie);
        
        // Exécution de la requête
        $requete->execute();
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout de l'enregistrement : " . $e->getMessage();
    }
}




?>