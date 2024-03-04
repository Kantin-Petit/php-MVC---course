<?php

// Vérification si des données ont été soumises via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    require_once('bd.php');

    try {

        // Récupération des données du formulaire
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Requête pour vérifier les informations de connexion
        $requete = $mysqlClient->prepare("SELECT mail_admin, mdp_admin,status_admin FROM Admin WHERE mail_admin = :login");
        $requete->bindParam(':login', $login);
        $requete->execute();
        $res = $requete->fetch();
        var_dump($res);

        if(password_verify($password,$res['mdp_admin'])){
            //connexion ok
            $_SESSION['user'] = $res['mail_admin'];
            $_SESSION['status'] = $res['status_admin'];
            header("Location: index.php");
        }else{
            //impossible de se connecter
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>