<?php
try
{
	// On se connecte à MySQL
	$user='root';
	$mdp='';
	$mysqlClient = new PDO('mysql:host=localhost;dbname=TP1;charset=utf8', $user, $mdp);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message
    echo 'Erreur :'.$e->getMessage().'<br/>';
	echo 'N° :'.$e->getCode();
}
?>

