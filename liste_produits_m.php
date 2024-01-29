<?php

require_once('bd.php');

// On récupère la liste des Genres
$sqlQuery = "SELECT DISTINCT libelle_cat FROM Categorie ORDER BY libelle_cat ASC";
$sth = $mysqlClient->prepare($sqlQuery);
$sth->execute();
$genres = $sth->fetchAll(PDO::FETCH_ASSOC);

//on recupere le nombre de produit total
$sqlQuery2 = "SELECT COUNT(*) FROM Article WHERE 1 ";

// On récupère tout le contenu de la table produit
$search = $_GET['search'];
$genre = $_GET['genre'];
$sqlQuery3 = "SELECT * FROM Article WHERE 1 ";

// On ajoute les conditions de recherche
if(!empty($search)){
    $sqlQuery3 .= "AND (titre_art LIKE :search) ";
    $sqlQuery2 .= "AND (titre_art LIKE :search) ";
}

if(!empty($genre)){
    $sqlQuery3 .= "AND (Article.fk_categorie = Categorie.id_cat AND Categorie.libelle_cat = :genre) ";
    $sqlQuery2 .= "AND (Article.fk_categorie = Categorie.id_cat AND Categorie.libelle_cat = :genre) ";
}

$sqlQuery3 .= " LIMIT :offset, 20";

// On prépare la requête
$smtp1 = $mysqlClient->prepare($sqlQuery3);
$smtp2 = $mysqlClient->prepare($sqlQuery2);

// On parametre les conditions de recherche
if(!empty($search)){
    $smtp1->bindValue(':search','%'. $search .'%', PDO::PARAM_STR);
    $smtp2->bindValue(':search','%'. $search .'%', PDO::PARAM_STR);
}

if(!empty($genre)){
    $smtp1->bindValue(':genre',$genre, PDO::PARAM_STR);
    $smtp2->bindValue(':genre',$genre, PDO::PARAM_STR);
}

$smtp1->bindValue(':offset', $_GET['onglet'] * 20, PDO::PARAM_INT);
// On execute la requête
try{
    $smtp1->execute();
    $produits = $smtp1->fetchAll();

    $smtp2->execute();
    $nbProduits = $smtp2->fetchColumn();
}
catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}


?>