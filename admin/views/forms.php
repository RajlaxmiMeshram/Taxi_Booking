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
              <i class="fa fa-sticky-note-o "></i>&nbsp;&nbsp;
              Form</div>
            <div class="card-body">
              <u><h5>Form Title</h5></u><br>
              
              <form action="#" method="post" enctype="multipart/form-data">
                <p>(Fields marked <sup style="color: red;">*</sup> are mandatory)</p>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="form-label-group"> 
                        <input type="text" id="read_only" class="form-control" autofocus="autofocus" readonly value="This is readonly">
                        <label for="read_only">Label</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group"> 
                        <textarea type="text" class="form-control" rows="5" placeholder="Description" autofocus="autofocus" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group"> 
                        <input type="text" id="field_1" class="form-control" placeholder="Non-required Field" autofocus="autofocus">
                        <label for="field_1">Non-required Field</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group"> 
                        <input type="text" id="field_2" class="form-control" placeholder="Required Field" autofocus="autofocus" required>
                        <label for="field_2">Required Field<sup style="color: red;">*</sup></label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="file" id="files_uploaded" name="files_uploaded[]" class="form-control" accept="image/*" required multiple>
                        
                        <label for="files_uploaded">Multiple Upload (only images)<sup style="color: red;">*</sup></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="file" id="files_uploaded" name="files_uploaded" class="form-control" accept="image/*" required>
                        
                        <label for="files_uploaded">Single Upload (only images)<sup style="color: red;">*</sup></label>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="file" id="files_uploaded" name="files_uploaded[]" class="form-control" required multiple>
                        
                        <label for="files_uploaded">Multiple Upload (all types)<sup style="color: red;">*</sup></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-label-group">
                        <input type="file" id="files_uploaded" name="files_uploaded[]" class="form-control" required>
                        
                        <label for="files_uploaded">Single Upload (all types)<sup style="color: red;">*</sup></label>
                      </div>
                    </div>
                    <div class="form-group">
                    <div class="form-label-group"> 
                      <select class="form-control" required>
                        <option value="">Dropdown Example</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                        <option value="">Select Category</option>
                      </select>
                    </div>
                  </div>
                  </div>
                </div>

              </form>

			  <div class="col-lg-12 text-center">
              	<button class="btn_custom" id="validate_btn" type="button" style="margin-bottom: 10px;">Submit</button>
              </div>
				
				
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php include 'footer.php'; ?>

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
