<?php

date_default_timezone_set("Asia/Kolkata");
error_reporting(0);
session_start();

if (!isset($_SESSION['adm_Id'])) {
  header('Location: login.php');
}
include 'header.php';

?>


<body id="page-top">

  <?php include 'navbar.php';?>

  <div id="wrapper">

  <?php include 'sidebar.php';?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <div class="breadcrumb_custom">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <p>Current User: <b><?php echo ($_SESSION['adm_name'])?></b></p>
            </div>
            <div class="col-lg-6 col-md-6">
              <p id="datetime" style="text-align: right;">
                <?php echo date("l").", ".date("d/m/Y");?>
              </p>
            </div>
          </div>
        </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-images"></i>&nbsp;&nbsp;
              Image Carousel</div>
            <div class="card-body">
              
              <div class="row">
                

                  <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/1.jpg"><img class="carousel_img" src="img/1.jpg"></a>
                  </div>
                  <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/2.jpg"><img class="carousel_img" src="img/2.jpg"></a>
                  </div>
                  <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/3.jpg"><img class="carousel_img" src="img/3.jpg"></a>
                  </div>
                  <div class="col-lg-3">
                    <a data-fancybox="gallery" href="img/4.jpg"><img class="carousel_img" src="img/4.jpg"></a>
                  </div>

              </div>
            

            </div>
          </div>


       

      </div>
      <!-- /.container-fluid -->

      <?php include 'footer.php';?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'scripts.php';?>

</body>

</html>
