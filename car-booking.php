<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from themescare.com/demos/gauto-preview/car-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 11:10:35 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="gauto | vinny car rental">
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
                     
                     <a href="logout.php?>">
                     <i class="fa fa-sign-out"></i>
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
                           <li><a href="car-listing.php">home</a></li>
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
                     <h3>Car Booking</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.php">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>car Booking</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Car Booking Area Start -->
      <section class="gauto-car-booking section_70">
         <div class="container">
            <div class="row">
               <?php

                  include 'connection.php';

                  $sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
                  $rs = $link->query($sel);
                  $rws = $rs->fetch_assoc();
               ?>
               <div class="col-lg-6">
                  <div class="car-booking-image">
                     <img src="cars/<?php echo $rws['image'];?>" alt="car" />
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="car-booking-right">
                     <p class="rental-tag">rental</p>
                     <h3><?php echo $rws['car_name'];?></h3>
                     <div class="price-rating">
                        <div class="price-rent">
                           <h4><?php echo 'Tsh.'.$rws['hire_cost'];?><span>/ Day</span></h4>
                        </div>
                     </div>
                     <p> you can book and do bussiness with us for a very reasonable price, we assure you that working with us you will not regraet Our cars are very good and affordable for any usage depending on where you want to go..</p>
                     <div class="car-features clearfix">
                        <ul>
                           <li><i class="fa fa-car"></i> Model:2017</li>
                           <li><i class="fa fa-cogs"></i> Automatic</li>
                           <li><i class="fa fa-dashboard"></i> 20kmpl</li>
                           <li><i class="fa fa-empire"></i> V-6 Cylinder</li>
                        </ul>
                        <ul>
                           <li><i class="fa fa-eye"></i> GPS Navigation</li>
                           <li><i class="fa fa-lock"></i> Anti-Lock Brakes</li>
                           <li><i class="fa fa-key"></i> Remote Keyless</li>
                           <li><i class="fa fa-desktop"></i> Rear-Seat DVD</li>
                        </ul>
                        <ul>
                           <li><i class="fa fa-car"></i> Model:2017</li>
                           <li><i class="fa fa-cogs"></i> Automatic</li>
                           <li><i class="fa fa-dashboard"></i> 20kmpl</li>
                           <li><i class="fa fa-empire"></i> V-6 Cylinder</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Car Booking Area End -->

      <!-- Booking Form Area Start -->
      <section class="gauto-booking-form section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="booking-form-left">
                     <div class="single-booking">
                        <h3>Booking Detail</h3>
                        <form method="POST" action="process.php">
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" name="pickupL" placeholder="PickUp Location">
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" name="dropoffL" placeholder="Drop Off Location">
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <select name="person">
                                       <option data-display="Select">1 person</option>
                                       <option>2 person</option>
                                       <option>3 person</option>
                                       <option>4 person</option>
                                       <option>5-10 person</option>
                                    </select>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <select name="luggage">
                                       <option data-display="Select">1 luggage</option>
                                       <option>2 luggage</option>
                                       <option>3 luggage</option>
                                       <option>4(+) luggage</option>
                                    </select>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input id="reservation_date" name="PickUpD" placeholder="PickUp Date" data-select="datepicker" type="text">
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" name="PickUpT" placeholder="PickUp Time" />
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input id="reservation_date" name="DropOffD" placeholder="Drop Off Date" data-select="datepicker" type="text">
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" name="DropOffT" placeholder="Drop Off Time" />
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <p>
                                    <textarea placeholder="Additional Information..." name="addition"></textarea>
                                 </p>
                              </div>
                           </div>
                        
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="booking-right">
                     <h3>payment Method</h3>
                     <div class="gauto-payment clearfix">
                        <div class="payment">
                           <input type="radio" id="ss-option" name="selector">
                           <label for="ss-option">Pay in Cash</label>
                           <p>You may also pay direct cash as listed above</p>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                        
                        </div>
                        <div class="payment">
                        <label for="f-option">MPESA</label>
                           <div class="row">
                              <div class="col-md-6">
                                 <input type="text" class="form-control" name="mpesa" placeholder="Transaction Id" id="">
                              </div>
                           </div>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                        </div>
                     </div>
                     <div class="action-btn">
                        <button name="reserve" style="color:black;" class="gauto-btn">Reserve Now!</button>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- Booking Form Area End -->
      
       
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

<!-- Mirrored from themescare.com/demos/gauto-preview/car-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Dec 2020 11:10:42 GMT -->
</html>

