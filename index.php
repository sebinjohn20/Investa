<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vesperr Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">InVesta</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
     
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<br><br><br><br>

  <main id="main" style="min-height:640px;">

   
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Enter the Details:</h2>
		  </ul>
      <center>
     <form action="" style="width: 30%; padding: 10px;" method="POST" enctype="multipart/form-data">
<label for="open">open price:</label>
<input type="number" style="text-align: center;" name="open_price"  class='form-control'>
<label for="high">High price:</label>
<input type="number" style="text-align: center;" name="high_price"  class='form-control'>
<label for="low">Low Price:</label>
<input type="number" style="text-align: center;" name="low_price"  class='form-control'>
<label for="low">Close Price:</label>
<input type="number" style="text-align: center;" name="close_price"  class='form-control'>
 
 
     <div class="text-center"><input type="Submit" name="Submit" value="Submit" class='btn btn-primary' id="p1"></div>
	 </form>
</center>


    </section><!-- End Contact Section -->
<section>
<div>

</div>
</section>
<?php
		 if(isset($_POST['Submit']))
		 {

      $open=$_POST['open_price'];
      $high=$_POST['high_price'];
      $low=$_POST['low_price'];
      $close=$_POST['close_price'];
      $head="open price,high price,low price,close price"."\n";
      $val=$open.",".$high.",".$low.",".$close;
      $myfile = fopen("test.csv", "w") or die("Unable to open file!");
      fwrite($myfile, $head.$val);
      fclose($myfile);
			 echo"<center><strong><h1>OUTPUT</h1></strong></center>";

			$python=`python test.py`;
      $myfile = fopen("out.txt", "r") or die("Unable to open file!");
      $res=fread($myfile,filesize("out.txt"));
      fclose($myfile);
      echo "<center><strong>".$res."</strong></center>";
			
			//header('location:output.php');
			  
			
		 }
?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>