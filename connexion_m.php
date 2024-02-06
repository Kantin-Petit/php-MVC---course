<?php
if(isset($_POST['submit']))
{
    
    $_SESSION['user']=$_POST['login'];
    
    if($_POST['login'] == 'admin'){
        
        echo $_SESSION['user'];
    }
}
?>