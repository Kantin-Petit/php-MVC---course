<div id="catalogue">
	
	<div class="search">
		<form action="" method="GET">
			<label for="search">Rechercher :</label>
			<input type="text" name="search" id="search">
			<input type="hidden" name="page" value="liste_produits">
			<input type="hidden" name="onglet" value="0">
			<select name="genre" id="listeGenre">
				<option value="">Tous les genres</option>
				<?php
				foreach ($genres as $genre) {
					echo '<option value="' . $genre['Genre'] . '">' . $genre['Genre'] . '</option>';
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
			<img class="product-pic" src="https://via.placeholder.com/720x1280" alt="<?php echo $produit['titre_art'];?>">
			<!--<img src="IMG/<?php echo $produit['photo_art'];?>"  alt="<?php echo $produit['titre_art'];?>">-->
			<p>DESCRIPTION : <?php echo $produit['description_art'];?></p>
			<p>PRIX : <?php echo $produit['prix_art'];?> €</p>
			<button>Ajouter au panier</button>
			<a href="index.php?page=fiche_produit&idprod=<?php echo $produit['id_art'];?>">Voir la fiche</a>
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
					echo "<li><a href='index.php?page=liste_produits&onglet=".($_GET['onglet']-1)."&search=".$_GET['search']."&genre=".$_GET['genre']."'>PREVIOUS</a></li>";
				}
				for($count=0;$count<ceil($nbProduits/20);$count++)
				{
					if ($count==$_GET['onglet'])
					{
						echo '<li class="active"><a href="index.php?page=liste_produits&onglet='.$count.'&search='.$_GET["search"].'&genre='.$_GET["genre"].'">'.($count+1).'</a></li>';
					}
					else
					{
						echo '<li><a href="index.php?page=liste_produits&onglet='.$count.'&search='.$_GET["search"].'&genre='.$_GET["genre"].'">'.($count+1).'</a></li>';
					}
				}
				if(count($produits)>=20)
				{
					echo "<li><a href='index.php?page=liste_produits&onglet=".($_GET['onglet']+1)."&search=".$_GET['search']."&genre=".$_GET['genre']."'>NEXT</a></li>";
				}
			?>
		</ul>
	</div>
</div>