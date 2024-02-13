<?php 
    // session_start();
    if($_SESSION['user'] == 'admin')
    {
        include('create_produit_m.php');
        include('create_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>