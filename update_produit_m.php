<?php 
include('bd.php');

try{
    $idprod = isset($_GET['idprod']) ? $_GET['idprod'] : null;

    if ($idprod == null || $idprod == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération de l'enregistrement");
    }else{
        $querie = "SELECT * FROM `Article` WHERE id_art = :idprod;";
        $res = $mysqlClient->prepare($querie);
        $res->bindParam(':idprod', $idprod);
        $res -> execute();

        $querie = "SELECT * FROM `Categorie`";
        $cat = $mysqlClient->prepare($querie);
        $cat -> execute();
        
        if ($_GET['mode'] == 'u') {
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $prix = $_POST['prix'];
            $stock = $_POST['stock'];
            $image = $_POST['image'];
            $categorie = $_POST['categorie'];
                
            try {
                // Requête d'insertion avec préparation et exécution
                $request = "UPDATE Article SET 
                                                `titre_art`=:titre,
                                                `description_art`=:descriptionU,
                                                `prix_art`=:prix,
                                                `stock_art`=:stock,
                                                `photo_art`=:imageU,
                                                `fk_categorie`=:categorie

                                            WHERE `id_art` = :idprod";
        
                $requete = $mysqlClient->prepare($request);
        
                $requete->bindParam(':titre', $titre);
                $requete->bindParam(':descriptionU', $description);
                $requete->bindParam(':prix', $prix);
                $requete->bindParam(':stock', $stock);
                $requete->bindParam(':imageU', $image);
                $requete->bindParam(':categorie', $categorie);
        
            // Exécution de la requête
                $requete->execute();
        
                header("Location: index.php?page=fiche_produit&idprod=$idprod");
            
            } catch (PDOException $e) {
                echo "Erreur lors de la mise à jour de l'enregistrement : " . $e->getMessage();
        
            }
        }
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}
?>