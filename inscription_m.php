<?php

// Vérification si des données ont été soumises via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    require_once('bd.php');

    try {

        // Récupération des données du formulaire
        $login = $_POST['login'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        //verif email 
        $query ="SELECT mail_admin FROM Admin WHERE mail_admin = :login";
        $res = $mysqlClient->prepare($query);
        $res->bindParam(':login', $login);
        $res -> execute();
        $vmail = $res -> fetch();
        if($vmail["mail_admin"] == $login){
            //si mail deja utilisé
            header("Location: error.php?message=maildejautilisé");
        } else {
            //verif mdp identique
                if($password == $cpassword){
                //hash mdp https://www.phpmentoring.org/blog/php-password-verify-function
                $hash = password_hash($password, PASSWORD_DEFAULT);
                //envoyer a la bd
                $query="INSERT INTO Admin (mail_admin, mdp_admin) VALUES (:mail,:mdp)";
                $requete = $mysqlClient->prepare($query);
                $requete->bindParam(':mail', $login);
                $requete->bindParam(':mdp', $hash);
                $requete->execute();

                header("Location: index.php?page=liste_produits");
            }
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>