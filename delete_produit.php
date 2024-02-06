<?php
    session_start();
    if($_SESSION['user'] == 'admin')
    {
        include('delete_produit_m.php');
        include('delete_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>