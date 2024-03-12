<?php
    if($_SESSION['status'] == '136')
    {
        include('create_produit_m.php');
        include('create_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>