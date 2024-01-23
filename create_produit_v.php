<?php
if ($_GET['mode'] == 'c') {
    echo "Succes de l'ajout";
}
?>
<form action="index.php?page=create_produit&mode=c" method="post">
    <div>
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre" required/>
    </div>
    <div>
        <label for="description">description</label>
        <input type="text" name="description" id="description" required/>
    </div>
    <div>
        <label for="prix">prix</label>
        <input type="text" name="prix" id="prix" required/>
    </div>
    <div>
        <label for="stock">stock</label>
        <input type="text" name="stock" id="stock" required/>
    </div>
    <div>
        <label for="image">image</label>
        <input type="text" name="image" id="image" required/>
    </div>
    <div>
        <label for="categorie">categorie</label>
        <input type="text" name="categorie" id="categorie" required/>
    </div>
    <button>Valider</button>
</form>