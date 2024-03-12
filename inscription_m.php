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
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];

        //verif email 
        $query ="SELECT mail_client FROM Client WHERE mail_client = :login";
        $res = $mysqlClient->prepare($query);
        $res->bindParam(':login', $login);
        $res -> execute();
        $vmail = $res -> fetch();
        if($vmail["mail_client"] == $login){
            //si mail deja utilisé
            header("Location: error.php?message=maildejautilisé");
        } else {
            //verif mdp identique
                if($password == $cpassword){
                //hash mdp https://www.phpmentoring.org/blog/php-password-verify-function
                $hash = password_hash($password, PASSWORD_DEFAULT);
                //envoyer a la bd
                $query="INSERT INTO Client (nom_client, prenom_client, cp_client, ville_client, mail_client, mdp_client) VALUES (:nom, :prenom, :cp, :ville, :mail,:mdp)";
                $requete = $mysqlClient->prepare($query);
                $requete->bindParam(':nom', $nom);
                $requete->bindParam(':prenom', $prenom);
                $requete->bindParam(':mail', $login);
                $requete->bindParam(':mdp', $hash);
                $requete->bindParam(':cp', $cp);
                $requete->bindParam(':ville', $ville);
                $requete->execute();

                header("Location: index.php?page=liste_produits");
            }
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>