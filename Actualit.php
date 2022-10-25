
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>actualite</title>
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
     
      <!-- end header inner -->
      <!-- end header -->
      
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Actualite</h2>
                     <p>Nouvelle Actualite sont Disponible</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4>Actualite du jour</h4>
                                          <span>(Nouvelle )</span>
                                          <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
										  
										  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
                                          <p>
										  
  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
												  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4>JCKOLO</h4>
                                          <span>(It is a long )</span>
                                          <p>									

										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
		</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
  
  <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
		 </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes.jpg" alt="#"/></i>
                                          <h4>JCKOLO</h4>
                                          <span>(It is a long )</span>
                                          <p>  <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
		 </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
                                          <p>
										    <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
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
		
										  
										  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      </div>
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
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