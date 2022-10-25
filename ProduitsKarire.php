<!DOCTYPE html>
<html lang="en">	  
	  <table width="40%" id="alignment" > 

<?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from produit");
?>
<table border="1px">
	<tr>
<th>nom</th>
<th>Description</th>
</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["nom"]; ?>
</td>
<td>
<?php echo $bdmedecins["description"]; ?>
</td>
<?php
}
?>
</table>

<h>Passer vos commandes</h1>
	<form name="tblform" METHOD="POST">
<table style="background-color:aquamarine;margin-left: 100px;">  <tr>
<tr>
<td>Nom Complet:</td>
<td>
<input type="text" required="" name="nom" placeholder="Tapez votre nom">
</td>
</tr>
<tr>
<td>Email:</td>
<td>
<input type="email" required="" name="mail" placeholder="Clayton@gmail.com">
</td>
</tr>
<tr><td>Telephone(whatsapp ou simple): </td>
<td><input type="text" id="mblenmb" name="tel" placeholder="+25771558100"></td></tr> 
</table>
<br>
<table width="80%"  id="alignment" >
<tr>
<th>Produit</th>
<th> </th>
<th>Quantite</th>
</tr><tr> 
<td>Produit 1:</td> 
<td>
<select id="item1" name="prod_un">
<option value="1">--Selectionner le produit--</option> 
<option value="SAVON JITAN A LA CATAIRE">SAVON JITAN A LA CATAIRE</option> 
<option value="LOTION JITAN A LA CATAIRE">LOTION JITAN A LA CATAIRE</option> 
<option value="SPRAY JITAN A LA CATAIRE">SPRAY JITAN A LA CATAIRE</option> 
<option value="ROLL JITAN A LA CATAIRE">ROLL JITAN A LA CATAIRE</option> 
<option value=" BOUGIE JITAN A LA CATAIRE">BOUGIE JITAN A LA CATAIRE </option>
<option value="DESINFECTANS">DESINFECTANS</option> 
<option value="BEAUTE CARISSIMA">BEAUTE CARISSIMA</option> 
<option value="BOISSON SANTE ">BOISSON SANTE </option> 
<option value="AROMES SABA">AROMES SABA</option> 
<option value=" HUILES ESSENTIELLES">HUILES ESSENTIELLES</option> 
<option value="PRODUITS COSMETIQUES">PRODUITS COSMETIQUES</option> 
<option value="COMPLEMENTS ALIMENATAIRES">COMPLEMENTS ALIMENATAIRES</option> 
</select>
</td> 
<td><input type="number" value="0" id="q1" name="qu_un"></td>
</tr>   <tr>
<td>Produits 2: </td>
<td>
<select id="item2" name="prod_deux"> 
<option value="1">--Selectionner un produit--</option> 
<option value="SAVON JITAN A LA CATAIRE">SAVON JITAN A LA CATAIRE</option> 
<option value="LOTION JITAN A LA CATAIRE">LOTION JITAN A LA CATAIRE</option> 
<option value="SPRAY JITAN A LA CATAIRE">SPRAY JITAN A LA CATAIRE</option> 
<option value="ROLL JITAN A LA CATAIRE">ROLL JITAN A LA CATAIRE</option> 
<option value=" BOUGIE JITAN A LA CATAIRE">BOUGIE JITAN A LA CATAIRE </option>
<option value="DESINFECTANS">DESINFECTANS</option> 
<option value="BEAUTE CARISSIMA">BEAUTE CARISSIMA</option> 
<option value="BOISSON SANTE ">BOISSON SANTE </option> 
<option value="AROMES SABA">AROMES SABA</option> 
<option value=" HUILES ESSENTIELLES">HUILES ESSENTIELLES</option> 
<option value="PRODUITS COSMETIQUES">PRODUITS COSMETIQUES</option> 
<option value="COMPLEMENTS ALIMENATAIRES">COMPLEMENTS ALIMENATAIRES</option>  
</select>
</td>
<td><input  type="number" value="0" id="q2" name="qu_deux"></td>  
</tr> <tr>
<td>Produits 3: </td>
<td><select id="item3" name="prod_trois">  
<option value="1">--Selectionner un produit--</option> 
<option value="SAVON JITAN A LA CATAIRE">SAVON JITAN A LA CATAIRE</option> 
<option value="LOTION JITAN A LA CATAIRE">LOTION JITAN A LA CATAIRE</option> 
<option value="SPRAY JITAN A LA CATAIRE">SPRAY JITAN A LA CATAIRE</option> 
<option value="ROLL JITAN A LA CATAIRE">ROLL JITAN A LA CATAIRE</option> 
<option value=" BOUGIE JITAN A LA CATAIRE">BOUGIE JITAN A LA CATAIRE </option>
<option value="DESINFECTANS">DESINFECTANS</option> 
<option value="BEAUTE CARISSIMA">BEAUTE CARISSIMA</option> 
<option value="BOISSON SANTE ">BOISSON SANTE </option> 
<option value="AROMES SABA">AROMES SABA</option> 
<option value=" HUILES ESSENTIELLES">HUILES ESSENTIELLES</option> 
<option value="PRODUITS COSMETIQUES">PRODUITS COSMETIQUES</option> 
<option value="COMPLEMENTS ALIMENATAIRES">COMPLEMENTS ALIMENATAIRES</option> 
</select>
</td>
<td><input type="number" value="0" id="q3" name="qu_trois"></td>
</tr> <tr>
<td>Produits 4:</td>
<td><select id="item4" name="prod_quatre">   
<option value="1">--Selectionner un produit--</option> 
<option value="SAVON JITAN A LA CATAIRE">SAVON JITAN A LA CATAIRE</option> 
<option value="LOTION JITAN A LA CATAIRE">LOTION JITAN A LA CATAIRE</option> 
<option value="SPRAY JITAN A LA CATAIRE">SPRAY JITAN A LA CATAIRE</option> 
<option value="ROLL JITAN A LA CATAIRE">ROLL JITAN A LA CATAIRE</option> 
<option value=" BOUGIE JITAN A LA CATAIRE">BOUGIE JITAN A LA CATAIRE </option>
<option value="DESINFECTANS">DESINFECTANS</option> 
<option value="BEAUTE CARISSIMA">BEAUTE CARISSIMA</option> 
<option value="BOISSON SANTE ">BOISSON SANTE </option> 
<option value="AROMES SABA">AROMES SABA</option> 
<option value=" HUILES ESSENTIELLES">HUILES ESSENTIELLES</option> 
<option value="PRODUITS COSMETIQUES">PRODUITS COSMETIQUES</option> 
<option value="COMPLEMENTS ALIMENATAIRES">COMPLEMENTS ALIMENATAIRES</option> 
</select>
</td>
<td><input type="number" value="0" id="q4" name="qu_quatre"></td>
</tr>    <tr>
<td></td> 
<td></td> 
<td><input type="submit" class="button" value="Créer la facture" name="Envoyer" onclick=createBill()></td>
<td><input type="reset" class="button" value="Effacer"></td>
</tr>
</table>
</form>
</html>