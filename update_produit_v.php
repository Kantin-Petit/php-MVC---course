<?php
include('update_produit_m.php');
?>
<form action="index.php?page=update_produit&mode=u&id_art=<?php echo $_GET['id_art'] ?>" method="POST">
    <?php 
        foreach ($form as $row) {
            echo '<label for="'.$row['libelle_champs'].'">'.$row['libelle_champs'].' </label>';
            if($row['type_controle'] == 'text')
            {
                if($row['obligatoire'] == 1)
                    echo '<input type="text" name="'.$row['libelle_champs'].'" id="'.$row['id'].'" value="'.$res[$row['id']].'" required/>';
                else
                    echo '<input type="text" name="'.$row['libelle_champs'].'" id="'.$row['id'].'" value="'.$res[$row['id']].'"/>';
            }
            if($row['type_controle'] == 'select')
            {
                $sth = $mysqlClient->prepare($row['querie_sql']);
                $sth->execute();
                $categories = $sth->fetchAll(PDO::FETCH_ASSOC);
                if($row['obligatoire'] == 1)
                    echo '<select name="'.$row['libelle_champs'].'" id="'.$row['id'].'" required>';
                else
                    echo '<select name="'.$row['libelle_champs'].'" id="'.$row['id'].'" value="'.res['fk_cat'].'">';
                foreach ($categories as $categorie) {
                    if($categorie['id_cat'] == $res['fk_categorie'])
                        echo '<option value="' . $categorie['id_cat'] . '" selected>' . $categorie['libelle_cat'] . '</option>';
                    else
                        echo '<option value="' . $categorie['id_cat'] . '">' . $categorie['libelle_cat'] . '</option>';
                }
                echo '</select>';
            }
        }
    ?>
    
    <button>Valider</button>
</form>