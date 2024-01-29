<?php
include('update_produit_m.php');
    foreach($res as $row)
    {
?>
    <form action="index.php?page=update_produit&mode=u&idprod=<?php $idprod ?>" method="POST">
        <div>
            <label for="titre">titre</label>
            <input type="text" name="titre" id="titre" value="<?php echo $row['Titre'] ?>" required/>
        </div>
        <div>
            <label for="categorie">Categorie</label>
            <select name="categorie" id="categorie" required>
                <option value="">--Choisir catégorie--</option>
                <?php
                    //include('create_produit_m.php');
                    foreach ($cat as $row) {
                        echo "<option value='".$row['id_cat']."'>".$row['libelle_cat']."</option>";
                    }
                ?>
            </select>
        </div>
        <div>
            <label for="prix">prix</label>
            <input type="text" name="prix" id="prix" value="<?php echo $row['Prix'] ?>" required/>
        </div>
        <div>
            <label for="stock">stock</label>
            <input type="text" name="stock" id="stock" value="<?php echo $row['Stock'] ?>" required/>
        </div>
        <div>
            <label for="image">image</label>
            <input type="text" name="image" id="image" value="<?php echo $row['Image'] ?>" required/>
        </div>
        <div>
            <label for="description">description</label>
            <input type="text" name="description" id="description" value="<?php echo $row['Description'] ?>" required/>
        </div>
        <button>Valider</button>
    </form>
<?php
    }
?>