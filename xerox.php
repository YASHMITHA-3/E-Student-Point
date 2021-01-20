<?php
session_start();
require_once "config.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Photocopy shop</title>
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
  
 
  <style>
    
body {
  background: #fff;
  color: #000000;
  font-family: "Open Sans", sans-serif;

}

a {
  color:#bd2130 ;
  transition: 0.5s;
}

a:hover, a:active, a:focus {
  color: #a7df1e;
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
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
   margin-right: 0px;
    margin-left: 0px;
}


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
# Footer
--------------------------------------------------------------*/
#footer {
  background: #111;
  padding: 30px 0;
  color: #fff;
  margin: 10px 0px 0px 0px;
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

table, td, th {
  border: 1px solid black;

}

table {
  border-collapse: collapse;
  width: 130%;
}

td {
  text-align: center;

}
</style>

  <!-- =======================================================
  * Template Name: Imperial - v3.1.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<script type="text/javascript">
  function fun(i){
  document.getElementById("sub").value=i;
} 
</script>
<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">
 <h1 class="logo mr-auto"><a href="index.html">E-student point</a></h1> 
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#about">Todays prints</a></li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><a href="xlogout.html">logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Welcome <?php echo ucwords( $_SESSION['xname']); ?></h2>
           
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<!--section-->
<section id="about">
      
      <div class="container about-container wow fadeInUp">
        <div class="row">
          <img src="assets/img/images/xPrinter.gif"  width="400px" height="400px" alt="">
          <div class="col-md-10 about-content">
            <h2 class="about-title"><br>Todays prints</h2>
           <table>
<thead>
    <th>OID</th>
    <th>USN</th>
    <th>Username</th>
    <th>Paper Type</th>
    <th>Document Size</th>
    <th>Binding Option</th>
    <th>No of copies</th>
    <th>Color/B&W</th>
    <th>Sides</th>
    <th>Filname</th>
    <th>Amount</th>
    <th>Payment</th>
    <th>Submission Date</th>
    <th>Time</th>
    <th>Download</th>
    <th>Action</th>
    
</thead>
<tbody>
  
  <?php

    $sql="SELECT * from print_details INNER JOIN files ON files.OrderId=print_details.OrderId and files.usn=print_details.usn where print_details.date=CURRENT_DATE ORDER BY print_details.time";
$i=0;
    if ($res1=mysqli_query($conn, $sql)) {
     while($row = mysqli_fetch_array($res1)){
     
      print "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td>";
      $link="upload/$row[9]";
       $link1="upload/$row[11]";
      print "<td><a href='$link1' target='_blank'>paymet</a></td><td>$row[12]</td><td>$row[13]</td>";
      print "<td><a href='$link' target='_blank'>Download</a></td>";
      $i++;
 ?>
 <td><form action="notification.php" method="POST"><input type="submit" id="sumit" name="submit" onclick="fun(<?php echo$i;?>)" value="Done" /></td></tr>
  <?php 
}}

?>
<input type="hidden" id="sub"name="sub" value=""></form>
</tbody>
</table>

        </div>

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