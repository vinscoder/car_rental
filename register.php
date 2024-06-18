<?php
include 'connection.php';

if(isset($_POST['register'])){
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['password'];
   $phone = $_POST['phone'];
   $location = $_POST['location'];
   $gender = $_POST['gender'];

   if($password != $cpassword){

   } else {
      $query = "INSERT INTO client SET fname = '$fname', email = '$email',
       id_no = '$password', phone = '$phone', location = '$location', gender = '$gender'";

      $res = $link->query($query);
      if($res === TRUE){
         echo "<script type = \"text/javascript\">
         alert(\"Vehicle Succesfully Added\");
         window.location = (\"login.php\")
         </script>";
      }
   }
}
?>




<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="gauto | Car Rental HTML Template from Themescare">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Themescare">
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
       
      <!-- Login Area Start -->
      <section class="vinny auto-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-page-heading">
                        <i class="fa fa-key"></i>
                        <h3>sign Up</h3>
                     </div>
                     <form  action="register.php" method="post">
                        <div class="account-form-group">
                           <input type="text" placeholder="FullName" name="fname">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="email" placeholder="Email" name="email">
                           <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Password" name="password">
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="password" placeholder="Confirm Password" name="password">
                           <i class="fa fa-lock"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="text" placeholder="Phone" name="phone">
                           <i class="fa fa-phone"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="text" placeholder="Location" name="location">
                           <i class="fa fa-map"></i>
                        </div>
                        <div class="account-form-group">
                           <input type="text" placeholder="Gender" name="gender">
                           <i class="fa fa-male"></i>
                        </div>
                        <p>
                           <button type="submit"  name="register" class="gauto-theme-btn">Register now</button>
                        </p>
                     </form>
                     <div class="login-sign-up">
                        <a href="login.php">Already have an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
	  
      <!-- Footer Area Start -->
      <footer class="gauto-footer-area">
         <div class="footer-bottom-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="copyright">
                        <p>Design With <i class="fa fa-heart"></i> from <a href="#">Elvin Investments</a></p>
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