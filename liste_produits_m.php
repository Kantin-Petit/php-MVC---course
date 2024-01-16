<?php

require_once('bd.php');

try{
    if (isset($_GET['search'])) {
        // Recherche products
        $recherche = $_GET['search'];
        $sqlQuery = "SELECT * FROM produit WHERE Titre LIKE '%$recherche%' OR Artiste LIKE '%$recherche%'";
    }
    else
    {
        // All products
        $sqlQuery = 'SELECT * FROM produit';
    }
    $sqlQuery = $sqlQuery.' LIMIT '.($_GET['onglet']*20).',20';
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    $produits = $recipesStatement->fetchAll();
}
catch (PDOException $e) {
    // Gestion des erreurs de connexion
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}


?>