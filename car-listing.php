<!DOCTYPE html>
<html lang="en-US">
<?php 
session_start();
?>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="vinny auto | Car Rental HTML">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="vinny auto">
      <!-- Title -->
      <title>vinny auto</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
       
       
      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p>Need Help?: <i class="fa fa-phone"></i> Call: +255 713617599</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right">
                     <a href="logout.php">
                     <i class="fa fa-logout"></i>
                     logout
                     </a>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="index.php">
                     <img src="assets/img/logo2.png" alt="vinnie"/>
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">

               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="#"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main Header Area End -->
       
       
      <!-- Mainmenu Area Start -->
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li><a href="index.php">home</a></li>
                           <li><a href="contact.php">contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="main-search-right">
                      
                     <!-- Responsive Menu Start -->
                     <div class="gauto-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                     
                      
                     <!-- Search Box Start -->
                     <div class="search-box">
                        <form>
                           <input type="search" placeholder="Search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- Search Box End -->
                      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mainmenu Area End -->
       
       
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Car Listing</h3>
                     <ul>
                        
                        <li><a href="index.php"></a></li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Car Listing Area Start -->
      <section class="section_70">
         <div class="container">
            <div class="row">
                              <?php

                              include 'connection.php';
                              $sel = "SELECT * FROM cars WHERE status = 'Available'";
                              $rs = $link->query($sel);
                               while($rws = $rs->fetch_assoc()){
                              ?>
                              <div class="col-sm-4">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="car-booking.php?id=<?php echo $rws['car_id'] ?>">
                                       <img src="cars/<?php echo $rws['image'];?>" alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="#">
                                          <h3><?php echo $rws['car_name'];?></h3>
                                       </a>
                                       <h4><?php echo 'Tsh.'.$rws['hire_cost'];?><span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Model:<?php echo $rws['car_name'];?></li>
                                          <li><i class="fa fa-cogs"></i>Automatic</li>
                                          <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                       </ul>
                                       <!-- <div class="">
                                       <a href="car-booking.php?id=<?php echo $rws['car_id'] ?>""><button type="submit" class="gauto-theme-btn">Rent Car</button></a>
                                    </div> -->
                                    </div>
                                 </div>
                              </div>
                              <?php
                                 }
                              ?>
            </div>
         </div>
      </section>
      <!-- Car Listing Area End -->

      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Design With <i class="fa fa-heart"></i> from <a href="#">Elvin technology</a></p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Area End -->
       
       
      <!--Jquery js-->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--Lightgallery js-->
      <script src="assets/js/lightgallery-all.js"></script>
      <script src="assets/js/custom_lightgallery.js"></script>
      <!--Slicknav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Nice Select js-->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- Datepicker JS -->
      <script src="assets/js/jquery.datepicker.min.js"></script>
      <!--ClockPicker JS-->
      <script src="assets/js/jquery-clockpicker.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
   </body>
</html>

