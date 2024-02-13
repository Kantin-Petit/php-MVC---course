<?php 
    // session_start();
    if($_SESSION['user'] == 'admin')
    {
        include('admin_m.php');
        include('admin_v.php');
    }
    else
    {
        header('Location: index.php');
    }
?>