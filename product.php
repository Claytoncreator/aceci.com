<?php
include("menu.php");
?>	

<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
	  </head>
	  <style>
	  body{
		  margin-top:10%;
		  
	  }
	  h2{
		  background-color:green;
		  
	  }
	  body{
		   background-color:green;
		  
		  
	  }
	  </style>
	  <body>
	 <center><h2>Produit</h2>
     <h4>Les Produits Disponibles</h4>
<p>
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
</center>

		 </p>
		 <h5 style="background-color:cyan;margin-left: 100px;">Karire Products - Order Formulaire</h5>
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
<tr>
<td>Nom du Produit:</td>
<td>
<input type="text" required="" name="nom" placeholder="Tapez le nom du produit">
</td>
</tr>
<tr>
<td>Quantite du Produit:</td>
<td>
<input type="number" required="" value="0" placeholder="1">
</td>
</tr>
<tr>
<td></td> 
<td></td> 
<td><input type="submit" class="button" value="Créer la facture" name="Envoyer" onclick=createBill()></td>
<td><input type="reset" class="button" value="Effacer"></td>
</tr>
</table>
		 </body>
		 </html>