<?php
include('update_produit_m.php');
?>
<form action="index.php?page=update_produit&mode=u&id_art=<?php echo $_GET['id_art'] ?>" method="POST">
    <div>
        <label for="titre">titre</label>
        <input type="text" name="titre_art" id="titre_art" value="<?php echo $res['titre_art'] ?>" required/>
    </div>
    <div>
        <label for="categorie">categorie</label>
        <select name="categorie" id="listeCategorie">
            <?php
            foreach ($categories as $categorie) {
                echo '<option value="' . $categorie['id_cat'] . '">' . $categorie['libelle_cat'] . '</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <label for="prix_art">prix</label>
        <input type="text" name="prix_art" id="prix_art" value="<?php echo $res['prix_art'] ?>" required/>
    </div>
    <div>
        <label for="stock_art">stock</label>
        <input type="text" name="stock_art" id="stock_art" value="<?php echo $res['stock_art'] ?>" required/>
    </div>
    <div>
        <label for="photo_art">image</label>
        <input type="text" name="photo_art" id="photo_art" value="<?php echo $res['photo_art'] ?>" required/>
    </div>
    <div>
        <label for="description_art">description</label>
        <input type="text" name="description_art" id="description_art" value="<?php echo $res['description_art'] ?>" required/>
    </div>
    <button>Valider</button>
</form>