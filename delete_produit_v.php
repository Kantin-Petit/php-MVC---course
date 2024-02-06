<?php
if ($_GET['mode'] == 'c') {
    echo "Succes de la supression";
}
?>

<form action="index.php?page=delete_produit&mode=d&id_art=<?php echo $_GET['id_art']?>" method="post">
    
    <button>Valider</button>
</form>