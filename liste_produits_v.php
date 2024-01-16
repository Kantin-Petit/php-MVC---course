<div id="catalogue">
	<?php
	
	
	if($_GET['onglet']>0)
	{
		echo "<a href='index.php?page=liste_produits&onglet=".($_GET['onglet']-1)."'><<</a>";
	}
	if(count($produits)>=20)
	{
	echo "<a href='index.php?page=liste_produits&onglet=".($_GET['onglet']+1)."'>>></a>";
	}
	?>
	
	<form action="" method="GET">
    	<label for="search">Rechercher :</label>
    	<input type="text" name="search" id="search" required>
		<input type="hidden" name="page" value="liste_produits">
		<input type="hidden" name="onglet" value="0">
	</form>

	<?php
	// On affiche chaque produit une à une
	foreach ($produits as $produit) {
		//On boucle sur l'objet pour crée autant de resultat que contenue BD
	?>
	<form method="post" action="index.php?page=fiche_produit&idprod=<?php echo $produit['Id'];?>">
			<div class="fiche">
				<h2><?php echo $produit['Titre'];?></h2>
				<img src="IMG/<?php echo $produit['Image'];?>">
				<p>DESCRIPTION : <?php echo $produit['Description'];?></p>
				<p>PRIX : <?php echo $produit['Prix'];?> €</p>
				<button>Ajouter au panier</button>
				<input type="submit" value="Voir la fiche">
			</div>
	</form>
	<?php
	}
	?>
</div>