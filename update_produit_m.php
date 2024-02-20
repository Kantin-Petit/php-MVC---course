<?php 
include('bd.php');

try{
    $querie = "SELECT * FROM meta_champs where nom_formulaire = 'UpdateForm'";
    $form = $mysqlClient->prepare($querie);
    $form -> execute();

    $id_art = isset($_GET['id_art']) ? $_GET['id_art'] : null;

    if ($id_art == null || $id_art == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération de l'enregistrement");
    }else{
        $querie = "SELECT Article.*, libelle_cat FROM Article 
                    left join Categorie on Article.fk_categorie = Categorie.id_cat 
                    WHERE id_art = :id_art;";
        $res = $mysqlClient->prepare($querie);
        $res->bindParam(':id_art', $id_art);
        $res -> execute();
        $res = $res->fetch(PDO::FETCH_ASSOC);

        if ($_GET['mode'] == 'u') {
            $titre_art = $_POST['titre_art'];
            $categorie = $_POST['categorie'];
            $prix_art = $_POST['prix_art'];
            $stock_art = $_POST['stock_art'];
            $photo_art = $_POST['photo_art'];
            $description_art = $_POST['description_art'];
        
            try {
                // Requête d'insertion avec préparation et exécution
                $request = "UPDATE Article SET 
                                                `titre_art`=:titre_art,
                                                `fk_categorie`=:categorie,
                                                `prix_art`=:prix_art, 
                                                `stock_art`=:stock_art, 
                                                `photo_art`=:photo_art, 
                                                `description_art`=:description_art 
                                            WHERE `id_art` = :id_art";
        
                $requete = $mysqlClient->prepare($request);
        
                $requete->bindParam(':titre_art', $titre_art);
                $requete->bindParam(':categorie', $categorie);
                $requete->bindParam(':prix_art', $prix_art);
                $requete->bindParam(':stock_art', $stock_art);
                $requete->bindParam(':photo_art', $photo_art);
                $requete->bindParam(':description_art', $description_art);
                $requete->bindParam(':id_art', $id_art);
        
                // Exécution de la requête
                $requete->execute();
        
                header("Location: index.php?page=fiche_produit&id_art=1");
            
            } catch (PDOException $e) {
                echo "Erreur lors de la mise à jour de l'enregistrement : " . $e->getMessage();
        
            }
        }
    }
} catch (PDOException $e) {
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}
?>