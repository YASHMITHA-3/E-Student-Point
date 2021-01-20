<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
<style type="text/css">
  /**
* Template Name: Imperial - v3.1.0
* Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  background: #fff;
  color: black;
  font-family: "Open Sans", sans-serif;
}

a {
  color: #a7df1e;
  transition: 0.5s;
}

a:hover, a:active, a:focus {
  color: #03c5ec;
  outline: none;
  text-decoration: none;
}

p {
  padding: 0;
  margin: 0 0 30px 0;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}

/* Prelaoder */
#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: #fff url("../img/preloader.svg") no-repeat center center;
}

/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: rgba(0, 0, 0, 0.2);
  color: #fff;
  padding: 6px 12px 9px 12px;
  font-size: 16px;
  border-radius: 2px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

.back-to-top:focus {
  background: rgba(0, 0, 0, 0.2);
  color: #fff;
  outline: none;
}

.back-to-top:hover {
  background: #a7df1e;
  color: #fff;
}

/*--------------------------------------------------------------
#about
---------------------------------------------------------------*/
#about {
  background: #fff;
  padding: 0px 0;
}

#about .about-img {
  overflow: hidden;
}

#about .about-img img {
  max-width: 100%;
}

@media (max-width: 768px) {
  #about .about-img {
    height: auto;
  }
  #about .about-img img {
    margin-left: 0;
    padding-bottom: 30px;
  }
}

#about .about-content {
  background: #fff;
}

#about .about-title {
  color: #333;
  font-weight: 700;
  font-size: 28px;
}

#about .about-text {
  line-height: 26px;
  margin-bottom: 15px;
}

#about .about-text:last-child {
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: #0d0d0d;
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
}

#header .logo {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 400;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  height: 50px;
}

@media (max-width: 992px) {
  #header .logo {
    font-size: 28px;
  }
}

.is-sticky #header {
  background: rgba(0, 0, 0, 0.85);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul {
  display: flex;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  padding: 10px 0 10px 28px;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #fff;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Raleway", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #a7df1e;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #333333;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #a7df1e;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #333333;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #a7df1e;
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(26, 26, 26, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/
/* Sections Common
--------------------------------*/
section {
  overflow: hidden;
}

.section-title {
  font-size: 32px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
}

.section-description {
  text-align: center;
  margin-bottom: 40px;
}

.section-title-divider {
  width: 50px;
  height: 3px;
  background: #a7df1e;
  margin: 0 auto;
  margin-bottom: 20px;
}




/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 30px 0 0 0;
}

.breadcrumbs h2 {
  font-size: 26px;
  color: black;
  font-weight: 300;
}

/* inner Section
--------------------------------*/

.button {
  
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  background-color: black;color: white;
  position: absolute;
  top: 100px;
  left: 100px;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover { 
  color: black;
  background-color: #a7df1e;}

.button:active {
  background-color: red;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



/* Contact Section
--------------------------------*/
#contact {
  background: #f7f7f7;
  padding: 80px 0 120px 0;
}

#contact .info {
  color: #333333;
}

#contact .info i {
  font-size: 32px;
  color: #a7df1e;
  float: left;
}

#contact .info p {
  padding: 0 0 10px 50px;
  line-height: 24px;
}

#contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

#contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

#contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

#contact .php-email-form input, #contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
}

#contact .php-email-form input::focus, #contact .php-email-form textarea::focus {
  background-color: #a7df1e;
}

#contact .php-email-form button[type="submit"] {
  background: #a7df1e;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
}

#contact .php-email-form button[type="submit"]:hover {
  background:black ;
  color:white;
  border:1px solid #a7df1e;

}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #111;
  padding: 30px 0;
  color: #fff;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #ccc;
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">
 <h1 class="logo mr-auto"><a href="index.html">E-student point</a></h1> 
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#about">Print Details</a></li>
          <li><a href="index.html #contact">Contact</a></li>
          <li><a href="logout.html">logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h2>Welcome <?php echo ucwords( $_SESSION['username']); ?></h2>
         
           
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<!--section-->
<section id="about">
      
      <div class="container about-container wow fadeInUp">
        <div class="row">
         
          <div class="col-lg-5 about-img">
            <img src="assets/img/images/Printer5.gif" alt="">
          </div>

          <div class="col-md-7 about-content">
             <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
            <h2 class="about-title"><br>Select your print criteria</h2>
          <div class="row">
          <div class="col-lg-4 col-md-6 service-item">
            <p class="service-description">

        <label for="ptype">Paper type:</label>
      <select name="Ptype" id="ptype" >
              <option value="Normal Paper">Normal Paper</option>
              <option value="Bond Paper">Bond Paper</option>
              <option value="Glossy Paper">Glossy Paper</option>
              <option value="Matte Paper">Matte Paper</option>
            </select>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
           
            <p class="service-description">
              
        <label for="dsize">Document size:</label><br>
      <select name="Dsize" id="dsize" >
              <option value="A4">A4</option>
              <option value="A3">A3</option>
              <option value="A5">A5</option>
              <option value="B5">B5</option>
            </select>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <p class="service-description">

        <label for="btype">Binding option:</label>
      <select name="Btype" id="btype" >
              <option value="No Binding">No Binding</option>
              <option value="Staple binding">Staple binding</option>
              <option value="Spiral binding">Spiral binding</option>
              <option value="Tape binding">Tape binding</option>
            </select>
            </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <p class="service-description">
          
        <label for="Copies">No of copies:</label> <input type="number" id="quantity" name="quantity" min="1" max="100" required>
  
            </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <p class="service-description">
             
        <label for="Colors">Color/B&W:</label><br>
          <input type="radio"  name="colors" value="COLOR" required> <label for="color">COLOR</label><br>
          <input type="radio"  name="colors" value="Black & white"> <label for="bw">Black & white</label><br>
                  </p>
          </div>
          <div class="col-lg-4 col-md-6 service-item">
            <p class="service-description">
             
        <label for="Sides">Sides:</label><br>
      <input type="radio"  name="sides" value="Single side" > <label for="ss">Single side</label><br>
          <input type="radio"  name="sides" value="Back to Back" required> <label for="bb">Back to Back</label><br>
       
            </p>
          </div>
          <div class="col-lg-6 col-md-6 service-item">
            <p class="service-description">

          <label for="files">Upload your file:</label><br>
          <input type="file" name="myfile" required><br><br>
           <script type="text/javascript">
            function bill(){
           
              var papertype=document.getElementById("ptype").value;
              var documentsize=document.getElementById("dsize").value;
              var bindingtype=document.getElementById("btype").value;
              var quantity=document.getElementById("quantity").value;
              var colortype=document.getElementsByName('colors');
              var mycolor="";
              var mysides="";
              var amount=0;
              for(i = 0; i < colortype.length; i++) { 
                if(colortype[i].checked) 
                mycolor=colortype[i].value; 
            } 
              var sidestype=document.getElementsByName('sides');
            for(i = 0; i < sidestype.length; i++) { 
                if(sidestype[i].checked) 
                mysides=sidestype[i].value; 
            } 
             
            var details = [papertype,documentsize,bindingtype,mycolor,mysides];
            
             for (var i = 0; i < details.length; i++) {
              if(i==0)
              {
                if(details[i]=="Bond Paper"){ amount+=2; }
                else if(details[i]=="Glossy Paper"){ amount+=5; }
                else if(details[i]=="Matte Paper"){ amount+=3; }
                else { amount+=0;}
              }
            if(i==1){
            if(details[i]=="A3"){ amount+=2; }
                else if(details[i]=="A5"){ amount+=4; }
                else if(details[i]=="B5"){ amount+=3; }
                  else { amount+=0;}
             } 
             if(i==2){
               if(details[i]=="Tape binding"){ amount+=5; }
                else if(details[i]=="Spiral binding"){ amount+=10; }
                else { amount+=0;}
             }
             if(i==3){
if(details[i]=="COLOR"){ amount+=10; }
 else { amount+=0;}
             }

 if(i==4){
if(details[i]=="Back to Back"){ amount+=2; }
 else { amount+=0;}
             }

             }  
             
             amount*=quantity;
             document.getElementById("submit").value=amount;
            
           }  
          </script>

          <button class="button" id="submit" type="submit" value="" name="save" onclick="bill()">Payment and reivew</button>
         
          <br> <br><br><br>
           
            </p>
          </div>
          
        </div>
        </form>
          </div>
        
        </div>
      </div>
    </section>
    
              
   
   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>E-student point</strong>. All Rights Reserved
          </div>
         
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>