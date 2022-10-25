<?php
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost 	= "localhost";
$dbname		= "pdo_ret";
$dbuser		= "root";
$dbpass		= "";
 
// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>
<style>
	body
		{
			background-color: #ffb347;
      margin-bottom: 10%;
      padding-bottom: 15%;
		}
.menu
{
  max-height: 50px;
  max-width: 1300px;
}
</style>
<body>
  <div class="menu">
  <div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="mySidebar" class="sidebar">
</div>
</div>
 <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><img src="assets/images/aceci.jpeg" alt="" style=width:150px; height: 160px>
	  </a>
	  <a href="#"><img src="assets/images/logos.PNG " alt="" style=width:100px; height: 100px></a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="index.php">ACCUEIL</a></li>
         <li><a href="actual.php">Actualite</a></li>
            <!--<li><a href="#section3">How it works?</a></li>-->
			 <li class="has-submenu"><a href="#">ORGANIZATION</a>
          <ul class="sub-menu">
            <li><a href="aceci.php">ACECI</a></li>
            <li><a href="Mission.php">MISSION</a></li>
			<li><a href="Axes.php">AXE D'INTERVATION</a></li>
            <li><a href="Politique.php">POLITIQUE ANTI CORRUPTION</a></li></ul>
			 <li class="has-submenu"><a href="#section2">NOS PROJETS</a>
          <ul class="sub-menu">
            <li><a href="Campagne.php">CAMPAGNE LOI-TYPE REDUCTION PAUVRETE</a></li>
            <li><a href="cataire.php">PROJET CATAIRE</a></li></ul>
			 <li class="has-submenu"><a href="#section2">EQUIPE</a>
          <ul class="sub-menu">
            <li><a href="conseil.php">CONSEIL D'ADMINISTRATION</a></li>
            <li><a href="direction.php">DIRECTION</a></li>
			<li><a href="scientifique.php">CONSEIL SCIENTIFIQUE</a></li>
            <li><a href="aviseur.php">CONSEIL AVISEUR</a></li>
			<li><a href="equipe.php">EQUIPE ALPHA</a></li>
            <li><a href="Assistances.php">ASSISTANCES</a></li>
			<li><a href="Benevoles.php">BENEVOLES</a></li>
            <li><a href="Membres.php">MEMBRES D'HONNEUR</a></li></ul>
			
			 <li class="has-submenu"><a href="product.php">Nos Produits</a>
          <ul class="sub-menu">
            <li><a href="product.php">PRODUITS KARIRE</a></li>
            </ul>
			 <li class="has-submenu"><a href="">Nos Activités</a>
          <ul class="sub-menu">
            <li><a href="Conferences.php">CONFERENCES</a></li>
            <li><a href="Cycle.php">CYCLE LANCE PAR ACECI</a></li>
			<li><a href="Stages.php">STAGE</a></li>
            <li><a href="Diff_projet.php">DIFFERENTS PROJETS</a></li>
			<li><a href="Rappports.php">RAPPORTS ANNUELS</a></li></ul>
			 <li class="has-submenu"><a href="#section2">Partenaires</a>
          <ul class="sub-menu">
            <li><a href="ifdd.php">IFDD</a></li>
                        <li><a href="https://ca8fbcd0-4f32-401a-b505-d9448b7dd664.filesusr.com/ugd/3fb819_7a7b6a58021d4315a34aa48ab8510308.pdf">MORE FOR LESS</a>
			<li><a href="https://aceciwebsite.wixsite.com/1001/blank-3">COLLECTIF OMD/LRP</a></li>
            <li><a href="antimalaria.php">PROJET ANTI-MALARIA</a></li></ul>
      </ul>
    </nav>
  </header>
</body>
</html>