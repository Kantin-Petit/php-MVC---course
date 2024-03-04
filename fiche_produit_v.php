<!-- zone 1 -->
<div class="section">
    <div id="zone1" style="display: flex;flex-wrap: wrap; background-color: red;">
        <?php 
            foreach ( $res_z1 as $row_z ) {
                if($row_z["type"] == "image")
                {
                    //echo "<img class='".$row_z["champ"]."' src='".$row[$row_z["champ"]]."' alt='".$row_z["champ"]."'>";
                    echo "<img class='".$row_z["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z["champ"]."'>";
                }
                if($row_z["type"] == "text")
                {
                    echo "<div class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</div>";
                }
                if($row_z["type"] == "titre_3")
                {
                    echo "<h3 class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</h3>";
                }
                if($row_z["type"] == "bouton")
                {
                    echo "<form action='ajoutpanier.php?id_art=".$id_art."'><button type='submit' value='".$id_art."' id ='produit' name='produit'>Ajouter au panier</button></form>";
                }
            }
        ?>
    </div>
</div>
<div class="section">
    <!-- zone 2 -->
    <div style="background-color: blue; width:50%">
        <?php 
            foreach ( $res_z2 as $row_z ) {
                if($row_z["type"] == "image")
                {
                    //echo "<img class='".$row_z["champ"]."' src='".$row[$row_z["champ"]]."' alt='".$row_z["champ"]."'>";
                    echo "<img class='".$row_z["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z["champ"]."'>";
                }
                if($row_z["type"] == "text")
                {
                    echo "<div class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</div>";
                }
                if($row_z["type"] == "titre_3")
                {
                    echo "<h3 class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</h3>";
                }
                if($row_z["type"] == "bouton")
                {
                    echo "<form action='ajoutpanier.php?id_art=".$id_art."'><button type='submit' value='".$id_art."' id ='produit' name='produit'>Ajouter au panier</button></form>";
                }
            }
        ?>
    </div>
    <!-- zone 3 -->
    <div style="background-color: green; width:50%">
        <?php 
            foreach ( $res_z3 as $row_z ) {
                if($row_z["type"] == "image")
                {
                    //echo "<img class='".$row_z["champ"]."' src='".$row[$row_z["champ"]]."' alt='".$row_z["champ"]."'>";
                    echo "<img class='".$row_z["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z["champ"]."'>";
                }
                if($row_z["type"] == "text")
                {
                    echo "<div class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</div>";
                }
                if($row_z["type"] == "titre_3")
                {
                    echo "<h3 class='".$row[$row_z["champ"]]."'>".$row[$row_z["champ"]]."</h3>";
                }
                if($row_z["type"] == "bouton")
                {
                    echo "<form action='".$row_z["action"].".php?id_art=".$id_art."'><button type='submit' value='".$id_art."' id ='produit' name='produit'>".$row_z["champ"]."</button></form>";
                }
            }
        ?>
    </div>
</div>