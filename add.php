<?php 
    include_once('queries.php');
?>
<form>
    <label for="Titre"> Titre</label><input type="text" name="Titre" placeholder="Titre">
    <label for="Date"> Date</label><input type="date" name="Date">
    <label for="Genre"> Genre</label><select name="Genre" id="Genre">
        <option value="1">Genre A</option>
        <option value="2">Genre B</option>
        <option value="3">Genre C</option>
    </select>
    <label for="Support"> Support</label><select name="Support" id="Support">
        <option value="1">Support 1</option>
        <option value="2">Support 2</option>
        <option value="3">Support 3</option>
    </select>
    <label for="Prix"> Prix</label><input type="number" name="Prix">
    <label for="Stock"> Stock</label><input type="number" name="Stock">
    <label for="Image"> Images</label><input type="file" name="Images">
    <label for="Description"> Description</label><textarea name="Description" id="Description" cols="30" rows="10"></textarea>
    <label for="Artiste"> Artiste</label><input type="text" name="Artiste" placeholder="Artiste">
    <input type="submit" value="Ajouter" onclick="addProduct(Titre,Date,Genre,Support,Prix,Stock,Image,Description,Artiste)">
</form>