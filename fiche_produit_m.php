<?php 
include('bd.php');
$id_art = $_GET['id_art'];

try{
    $id_art = isset($_GET['id_art']) ? $_GET['id_art'] : null;

    if ($id_art == null || $id_art == "") {
        header("Location: index.php?page=error&message=Erreur lors de la récupération du produit");
    }else{
        $querie = "SELECT * FROM `Article` WHERE id_art = :id_art;";
        $res = $mysqlClient->prepare($querie);
        $res->bindParam(':id_art', $id_art);
        $res -> execute();
    }
}catch(PDOException $e){
    echo "Erreur lors de la récupération de l'enregistrement : " . $e->getMessage();
}
?>