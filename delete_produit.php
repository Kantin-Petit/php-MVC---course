<?php
    if($_SESSION['status'] == '136')
    {
        include('delete_produit_m.php');
        include('delete_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>