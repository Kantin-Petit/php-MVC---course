<?php

require_once('bd.php');

// On récupère la liste des Genres
$sqlQuery = "SELECT DISTINCT Genre FROM produit ORDER BY Genre ASC";
$sth = $mysqlClient->prepare($sqlQuery);
$sth->execute();
$genres = $sth->fetchAll(PDO::FETCH_ASSOC);

//on recupere le nombre de produit total
$sqlQuery = "SELECT COUNT(*) FROM produit WHERE 1 ";
$smtp = $mysqlClient->prepare($sqlQuery);
$smtp->execute();
$nbProduits = $smtp->fetchColumn();

// On récupère tout le contenu de la table produit
$search = $_GET['search'];
$genre = $_GET['genre'];
$sqlQuery = "SELECT * FROM produit WHERE 1 ";

// On ajoute les conditions de recherche
if(!empty($search)){
    $sqlQuery .= "AND (Titre LIKE :search OR Artiste LIKE :search) ";
}

if(!empty($genre)){
    $sqlQuery .= "AND (Genre = :genre) ";
}

$sqlQuery .= " LIMIT :offset, 20";


// On prépare la requête
$smtp = $mysqlClient->prepare($sqlQuery);

// On parametre les conditions de recherche
if(!empty($search)){
    $smtp->bindValue(':search','%'. $search .'%', PDO::PARAM_STR);
}

if(!empty($genre)){
    $smtp->bindValue(':genre',$genre, PDO::PARAM_STR);
}

$smtp->bindValue(':offset', $_GET['onglet'] * 20, PDO::PARAM_INT);
// On execute la requête
try{
    $smtp->execute();
    $produits = $smtp->fetchAll();
}
catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}


?>