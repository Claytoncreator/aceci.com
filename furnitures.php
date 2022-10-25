<?php
include("menu.php");
?>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Nos Produits</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->

   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div>                        
<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="mySidebar" class="sidebar">
</div>
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logos.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php"> Accueil </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">A Propos de nous</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="furnitures.php">Produits</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="testimonial.php">Testimonie</a>
                              </li>
							   <li class="nav-item">
                                 <a class="nav-link" href="actualite.php">Actualite</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="galery.php">Albums</a>
                              </li>
                              <li class="nav-item d_none">
                                 <!--<a class="nav-link" href="#"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Login/Register</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>-->
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- wedo  section -->
      <div class="wedo ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                      <h2>Nos Actvités</h2>
                     <p>Les produits sont assez chers, mais de qualité</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                                                      <figure><img src="images/orange.JPEG" alt="#" width="200px" height="100px" /></figure>

                        </div>
                        <div class="work_text">
                           <h3>Artimesia<br><span class="blu">Un bon médicament</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="images/aromes.jpeg" alt="#" width="200px" height="100px" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Aromes<br><span class="blu">De bonne qualité</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="images/sauvage.jpeg" alt="#" width="200px" height="100px" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Tisannes à la menthe sauvage<br> <span class="blu">Votre médicament</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="images/img.jpeg" alt="#" width="200px" height="100px" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Tisannes à l'orthie<br><span class="blu">Un bon médicament</span></h3>
                        </div>
                     </div>
                  </div>
                  <a class="read_more" href="#">Voir plus</a>
               </div>
            </div>
         </div>
      </div>
	  
	  <table width="40%" id="alignment" > 
<!--tr>  
<th><u>Produits</u></th> 
<th></th>
<th><u>Description</u></th>
</tr> <tr>
<td>SAVON JITAN A LA CATAIRE</td> 
<td> - </td>
<td>Médicament</td> 
</tr> <tr>
	</tr> <tr>
<td>LOTION JITAN A LA CATAIRE</td> 
<td> - </td>
<td>Médicament</td> 
</tr> <tr>
	</tr> <tr>
<td>SPRAY JITAN A LA CATAIRE</td> 
<td> - </td>
<td>Médicament</td> 
</tr> <tr>
		</tr> <tr>
<td>ROLL JITAN A LA CATAIRE</td> 
<td> - </td>
<td>Médicament</td> 
</tr> <tr>
		</tr> <tr>
<td>BOUGIE JITAN A LA CATAIRE</td> 
<td> - </td>
<td>Médicament</td> 
</tr> <tr>
<td>DESINFECTANS</td>
<td> - </td> 
<td>Médicament</td> 
</tr><tr> 
<td>BEAUTE CARISSIMA</td>
<td> - </td>  
<td>Médicament</td>
</tr> <tr>  
<td>BOISSON SANTE </td>
<td> - </td> 
<td>Médicament</td> 
</tr>  <tr>
<td>AROMES SABA</td>
<td> - </td> 
<td>Médicament</td>
</tr>
</tr>  <tr>
<td>HUILES ESSENTIELLES</td>
<td> - </td> 
<td>Médicament</td>
</tr>
</tr>  <tr>
<td>PRODUITS COSMETIQUES</td>
<td> - </td> 
<td>Médicament</td>
</tr>
</tr>  <tr>
<td>COMPLEMENTS ALIMENTAIRES</td>
<td> - </td> 
<td>Médicament</td>
</tr>
</table-->
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

<h>Karire Products - Order Formulaire</h1>
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

      <!-- end wedo  section -->
     
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Contactez Nous</h2>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Locatins</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com</li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <button class="send_btn">Send</button>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <ul class="social_icon">
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="map">
                        <figure><img src="images/map.jpg" alt="#"/></figure>
                     </div>
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                       <p>Copyright 2022 All Right Reserved By <a href="https://html.design/"> ACECI</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>