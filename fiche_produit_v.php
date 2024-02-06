<form action="" method="GET">
    <label for="search">Rechercher :</label>
    <input type="text" name="search" id="search" required>
    <input type="hidden" name="page" value="liste_produits">
    <input type="hidden" name="onglet" value="0">
</form>

<?php
    echo "<div class='produit'>";
    echo "<div class='Titre>".$row['titre_art']."</div>";
    echo "<div class='Description'>".$row['description_art']."</div>";
    echo "<div class='Prix'>".$row['prix_art']."</div>";
    echo "</div>";
    
?>

