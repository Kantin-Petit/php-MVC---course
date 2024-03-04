
<div id=panier>
<?php 
    if(isset($_COOKIE['user'])){
        echo"<p>Voici votre panier M".$_COOKIE['user'].":<p>";
        
    }else{
        echo "<p>Voici votre panier M".$_SESSION['user'].":<p>";
    }
    
    
     


    $i=0;
    $totals = 0;
        if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $idProduit => $quantite) {
                echo "<div class='produit'>";
                echo "Produit : $idProduit, Quantité: $quantite <br>";
                echo "<p>".$row[$i]['titre_art']."</p>";
                echo "<div class='Description'>".$row[$i]['description_art']."</div>";
                echo "<div class='Prix'>".$row[$i]['prix_art']."</div>";
                echo $quantite;
                $total = $row[$i]['prix_art']* $quantite;
                echo "<div class='Prix'>TOTAL PRODUIT :".$total."</div>";
                echo "</div>";

                $totals += $total; 
               $i++;
                
            }
            echo "<div class='Prix'> PRIX PANIER  :".$totals."</div>";
            
        } else {
            
            echo "Le panier est vide.";
        }
?>
<form action="" method="POST">
 <input type="submit" value="vider le panier" name="vide" id="vide"></input>
    </form>
        <?php
        if(isset($_POST['vide']))
        {
            $_SESSION['panier'] = [];
            header("Refresh:0");
        }
        ?>
    </div>
    
