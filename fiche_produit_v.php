<!-- zone 1 -->
<div style="display: flex;flex-wrap: wrap; background-color: red;">
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
        }
    ?>
</div>
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
        }
    ?>

    <p>ajouter au panier</p>
</div>