<?php
if(isset($_POST['submit']))
{
    
    $_SESSION['user']=$_POST['login'];
    
    if($_SESSION['user']=="admin")
    {
        header("Location: index.php?page=admin&onglet=0&categorie=&search=");
    }
    else
    {
        header("Location: index.php?page=liste_produits&onglet=0&categorie=&search=");
    }
}
?>