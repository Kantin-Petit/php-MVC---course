<?php

require_once('bd.php');

// On récupère la liste des Categories
$sqlQuery = "SELECT DISTINCT * FROM Categorie ORDER BY libelle_cat ASC";
$sth = $mysqlClient->prepare($sqlQuery);
$sth->execute();
$categories = $sth->fetchAll(PDO::FETCH_ASSOC);

//on recupere le nombre de produit total
$sqlQuery2 = "SELECT COUNT(*) FROM Article WHERE 1 ";

// On récupère tout le contenu de la table produit
$search = $_GET['search'];
$categorie = $_GET['categorie'];
$tri = explode("-", $_GET['tri']);
$sqlQuery3 = "SELECT * FROM Article WHERE 1 ";

// On ajoute les conditions de recherche
if(!empty($search)){
    $sqlQuery3 .= "AND (titre_art LIKE :search) ";
    $sqlQuery2 .= "AND (titre_art LIKE :search) ";
}

if(!empty($categorie)){
    $sqlQuery3 .= "AND (fk_categorie = :categorie) ";
    $sqlQuery2 .= "AND (fk_categorie = :categorie) ";
}

if(!empty($tri)){
    $sqlQuery3 .= "ORDER BY $tri[0] $tri[1] "; ;
}

$sqlQuery3 .= " LIMIT :offset, 20";
echo $sqlQuery3;

// On prépare la requête
$smtp1 = $mysqlClient->prepare($sqlQuery3);
$smtp2 = $mysqlClient->prepare($sqlQuery2);

// On parametre les conditions de recherche
if(!empty($search)){
    $smtp1->bindValue(':search','%'. $search .'%', PDO::PARAM_STR);
    $smtp2->bindValue(':search','%'. $search .'%', PDO::PARAM_STR);
}

if(!empty($categorie)){
    $smtp1->bindValue(':categorie',$categorie, PDO::PARAM_STR);
    $smtp2->bindValue(':categorie',$categorie, PDO::PARAM_STR);
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