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
            <label for="date">date</label>
            <input type="date" name="date" id="date" value="<?php echo $row['Date'] ?>" required/>
        </div>
        <div>
            <label for="genre">genre</label>
            <input type="text" name="genre" id="genre" value="<?php echo $row['Genre'] ?>" required/>
        </div>
        <div>
            <label for="support">support</label>
            <input type="text" name="support" id="support" value="<?php echo $row['Support'] ?>" required/>
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
        <div>
            <label for="artiste">artiste</label>
            <input type="text" name="artiste" id="artiste" value="<?php echo $row['Artiste'] ?>" required/>
        </div>
        <button>Valider</button>
    </form>
<?php
    }
?>