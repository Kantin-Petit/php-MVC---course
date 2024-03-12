<?php
    if($_SESSION['status'] == '136')
    {
        include('admin_m.php');
        include('admin_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>