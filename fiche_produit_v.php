<!-- zone 1 -->
<div style="display: flex;flex-wrap: wrap; background-color: red;">
    <?php 
        foreach ( $res_z1 as $row_z1 ) {
            if($row_z1["type"] == "image")
            {
                //echo "<img class='".$row_z1["champ"]."' src='".$row[$row_z1["champ"]]."' alt='".$row_z1["champ"]."'>";
                echo "<img class='".$row_z1["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z1["champ"]."'>";
            }
            if($row_z1["type"] == "text")
            {
                echo "<div class='".$row[$row_z1["champ"]]."'>".$row[$row_z1["champ"]]."</div>";
            }
            if($row_z1["type"] == "titre_3")
            {
                echo "<h3 class='".$row[$row_z1["champ"]]."'>".$row[$row_z1["champ"]]."</h3>";
            }
        }
    ?>
</div>
<!-- zone 2 -->
<div style="background-color: blue; width:50%">
    <?php 
        foreach ( $res_z2 as $row_z2 ) {
            if($row_z2["type"] == "image")
            {
                //echo "<img class='".$row_z2["champ"]."' src='".$row[$row_z2["champ"]]."' alt='".$row_z2["champ"]."'>";
                echo "<img class='".$row_z2["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z2["champ"]."'>";
            }
            if($row_z2["type"] == "text")
            {
                echo "<div class='".$row[$row_z2["champ"]]."'>".$row[$row_z2["champ"]]."</div>";
            }
        }
    ?>
</div>
<!-- zone 3 -->
<div style="background-color: green; width:50%">
    <?php 
        foreach ( $res_z3 as $row_z3 ) {
            if($row_z3["type"] == "image")
            {
                //echo "<img class='".$row_z3["champ"]."' src='".$row[$row_z3["champ"]]."' alt='".$row_z3["champ"]."'>";
                echo "<img class='".$row_z3["champ"]."' src='https://via.placeholder.com/720x1280' alt='".$row_z3["champ"]."'>";
            }
            if($row_z3["type"] == "text")
            {
                echo "<div class='".$row[$row_z3["champ"]]."'>".$row[$row_z3["champ"]]."</div>";
            }
        }
    ?>

    <p>ajouter au panier</p>
</div>