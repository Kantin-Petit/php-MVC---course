<?php
if ($_GET['mode'] == 'c') {
    echo "Succes de la supression";
}
?>

<form action="index.php?page=delete_produit&mode=d&idprod=<?php echo $_GET['idprod']?>" method="post">
    
    <button>Valider</button>
</form>