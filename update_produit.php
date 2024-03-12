<?php
    if($_SESSION['status'] == '136')
    {
        include('update_produit_m.php');
        include('update_produit_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>