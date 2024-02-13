<?php
    // session_start();
    if($_SESSION['user'] == 'admin')
    {
        include('update_produit_m.php');
        include('update_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>