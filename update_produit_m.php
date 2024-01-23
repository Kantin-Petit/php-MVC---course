<?php 
include('bd.php');

try{
    $idprod = isset($_GET['idprod']) ? $_GET['idprod'] : null;

    if ($idprod == null || $idprod == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération de l'enregistrement");
    }else{
        $querie = "SELECT * FROM `produit` WHERE id = :idprod;";
        $res = $mysqlClient->prepare($querie);
        $res->bindParam(':idprod', $idprod);
        $res -> execute();

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
        
            try {
                // Requête d'insertion avec préparation et exécution
                $request = "UPDATE produit SET 
                                                `Titre`=:titre, 
                                                `Date`=:dateUpdate, 
                                                `Genre`=:genre, 
                                                `Support`=:support, 
                                                `Prix`=:prix, 
                                                `Stock`=:stock, 
                                                `Image`=:imageUpdate, 
                                                `Description`=:descriptionUpdate, 
                                                `Artiste`=:artiste 
                                            WHERE `Id` = :idprod";
        
                $requete = $mysqlClient->prepare($request);
        
                $requete->bindParam(':titre', $titre);
                $requete->bindParam(':dateUpdate', $date);
                $requete->bindParam(':genre', $genre);
                $requete->bindParam(':support', $support);
                $requete->bindParam(':prix', $prix);
                $requete->bindParam(':stock', $stock);
                $requete->bindParam(':imageUpdate', $image);
                $requete->bindParam(':descriptionUpdate', $description);
                $requete->bindParam(':artiste', $artiste);
                $requete->bindParam(':idprod', $idprod);
        
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