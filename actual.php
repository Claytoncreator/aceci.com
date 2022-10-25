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
		  background-color
	  }
	  h2{
		  background-color:green;
		  
	  }
	  </style>
	  <body>
	 <center><h2>Actualite</h2>
     <p>Nouvelles Actualités sont Disponibles</p></center>
<p>
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
<center><marquee behavior = "alternate">
  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
</marquee>
</center>

		 </p>
		 </body>
		 </html>