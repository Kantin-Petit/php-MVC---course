<div id="catalogue">
	
	<div class="search">
		<form  action="" method="GET">
			<label for="search">Rechercher :</label>
			<input type="text" onfocusout="submitForm('<?php echo $_GET["tri"] ?>',value,'<?php echo $_GET["categorie"] ?>')" name="search" id="search" value="<?php echo $_GET["search"] ?>">
			<input type="hidden" name="page" value="liste_produits">
			<input type="hidden" name="onglet" value="0">
			<select name="categorie" id="listeCategorie">

				<option onclick="submitForm('<?php echo $_GET["tri"] ?>','<?php echo $_GET["search"] ?>',<?php echo $_GET["categorie"] ?>)" value="">Tous les genres</option>
				
				<?php
				foreach ($categories as $categorie) {
					?>
					<option <?php if($_GET["categorie"]==$categorie["id_cat"]){ echo "selected";} ?>
					onclick="submitForm('<?php echo $_GET["tri"] ?>','<?php echo $_GET["search"] ?>','<?php echo $categorie['id_cat']?>')" value="<?php  echo $categorie['id_cat'] ?>">
					<?php echo $categorie['libelle_cat'] ?></option>
				<?php
				}
				?>
				
			</select>
			<script>
				document.getElementById("listeCategorie").addEventListener("change", function() {
					var categorie = this.value;
					var search = "<?php echo $_GET['search']; ?>";
					var  tri = "<?php echo $_GET['tri']; ?>";
					submitForm(tri, search, categorie);
				});
			</script>
			<select name="tri" id="tri">
				<option  <?php if($_GET["tri"]=="prix_art-ASC"){ echo "selected";} ?> onclick="submitForm('prix_art-ASC','<?php echo $_GET["search"] ?>','<?php echo $_GET["categorie"] ?>')" value="prix_art-ASC">Prix croissant</option>
				<option  <?php if($_GET["tri"]=="prix_art-DESC"){ echo "selected";} ?> onclick="submitForm('prix_art-DESC','<?php echo $_GET["search"] ?>','<?php echo $_GET["categorie"] ?>')" value="prix_art-DESC">Prix decroissant</option>
				<option  <?php if($_GET["tri"]=="titre_art-ASC"){ echo "selected";} ?> onclick="submitForm('titre_art-ASC','<?php echo $_GET["search"] ?>','<?php echo $_GET["categorie"] ?>')" value="titre_art-ASC">Titre alphabetique</option>
				<option  <?php if($_GET["tri"]=="titre_art-DESC"){ echo "selected";} ?> onclick="submitForm('titre_art-DESC','<?php echo $_GET["search"] ?>','<?php echo $_GET["categorie"] ?>')" value="titre_art-DESC">Titre alphabetique inverse</option>
			</select>
			<script>
				document.getElementById("tri").addEventListener("change", function() {
					var tri = this.value;
					console.log("hello")
					var search = "<?php echo $_GET['search']; ?>";
					var categorie = "<?php echo $_GET['categorie']; ?>";
					submitForm(tri, search, categorie);
				});
			</script>
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
			<form action="ajoutpanier_m.php?id_art=<?php echo $produit['id_art'];?>">
				<button type="submit" value="<?php echo $produit['id_art'];?>" id ="produit" name="produit">Ajouter au panier</button>
			</form>
			<a href="index.php?page=fiche_produit&id_art=<?php echo $produit['id_art'];?>">Voir la fiche</a>
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
					echo "<li><a href='index.php?page=liste_produits&onglet=".($_GET['onglet']-1)."&search=".$_GET['search']."&categorie=".$_GET['categorie']."'>PREVIOUS</a></li>";
				}
				for($count=0;$count<ceil($nbProduits/20);$count++)
				{
					if ($count==$_GET['onglet'])
					{
						echo '<li class="active"><a href="index.php?page=liste_produits&onglet='.$count.'&search='.$_GET["search"].'&categorie='.$_GET["categorie"].'">'.($count+1).'</a></li>';
					}
					else
					{
						echo '<li><a href="index.php?page=liste_produits&onglet='.$count.'&search='.$_GET["search"].'&categorie='.$_GET["categorie"].'">'.($count+1).'</a></li>';
					}
				}
				if(count($produits)>=20)
				{
					echo "<li><a href='index.php?page=liste_produits&onglet=".($_GET['onglet']+1)."&search=".$_GET['search']."&categorie=".$_GET['categorie']."'>NEXT</a></li>";
				}
			?>
		</ul>
	</div>
</div>