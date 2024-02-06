<a href="index.php?page=create_produit&mode=r">Creer produit</a>
<div id="catalogue">
	<div class="search">
		<form action="" method="GET">
			<label for="search">Rechercher :</label>
			<input type="text" name="search" id="search">
			<input type="hidden" name="page" value="liste_produits">
			<input type="hidden" name="onglet" value="0">
			<select name="categorie" id="listeCategorie">
				<option value="">Tous les genres</option>
				<?php
				foreach ($categories as $categorie) {
					echo '<option value="' . $categorie['id_cat'] . '">' . $categorie['libelle_cat'] . '</option>';
				}
				?>
			</select>
			<button type="submit">Rechercher</button>
		</form>
	</div>

	<div class="productsListe">
		<?php
		// On affiche chaque produit une à une
		foreach ($produits as $produit) {
			//On boucle sur l'objet pour crée autant de resultat que contenue BD
		?>
		<div class="fiche">
			<h2><?php echo $produit['titre_art'];?></h2>
            <a href="index.php?page=update_produit&mode=r&id_art=<?php echo $produit['id_art'] ?>">Update</a>
            <a href="index.php?page=delete_produit&mode=r&id_art=<?php echo $produit['id_art'] ?>">Delete</a>
		</div>
		<?php
		}
		?>
	</div>

	<div class="pagination">
		<ul>
			<?php
				if($_GET['onglet']>0)
				{
					echo "<li><a href='index.php?page=admin&onglet=".($_GET['onglet']-1)."&search=".$_GET['search']."&categorie=".$_GET['categorie']."'>PREVIOUS</a></li>";
				}
				for($count=0;$count<ceil($nbProduits/20);$count++)
				{
					if ($count==$_GET['onglet'])
					{
						echo '<li class="active"><a href="index.php?page=admin&onglet='.$count.'&search='.$_GET["search"].'&categorie='.$_GET["categorie"].'">'.($count+1).'</a></li>';
					}
					else
					{
						echo '<li><a href="index.php?page=admin&onglet='.$count.'&search='.$_GET["search"].'&categorie='.$_GET["categorie"].'">'.($count+1).'</a></li>';
					}
				}
				if(count($produits)>=20)
				{
					echo "<li><a href='index.php?page=admin&onglet=".($_GET['onglet']+1)."&search=".$_GET['search']."&categorie=".$_GET['categorie']."'>NEXT</a></li>";
				}
			?>
		</ul>
	</div>
</div>





<!--admin' or 'a'='a--> <!--sauter le mdp-->
<!--a'='a' or login='admin--> <!--sauter le mdp-->