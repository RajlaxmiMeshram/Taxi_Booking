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
              <i class="fas fa-user"></i>&nbsp;&nbsp;
              <b>Card Title</b></div>
            <div class="card-body">
              <u><h5>Card Details</h5></u><br>
              <div class="row">
                <div class="col-lg-6">
                  <p>Name: Lorem Ipsum</p>
                  <p>Organization: Lorem Ipsum</p>
                  <p>Address: Lorem Ipsum</p>
                  <b><p style="color: #ff0000;">Some Important Stuff: 1234567890ABCD</p></b>
                </div>
                <div class="col-lg-6">
                  <p>Mobile Number: 9999999999</p>   
                  <p>Email ID: email@newmail.com</p>
                  <p>Date & Time of Registration: (Timestamp)</p>
                </div>
              </div>


              <div class="btn_row" style="margin-top: 20px;"> 
                <button type="submit" class="btn_approve" data-toggle="modal" data-target="#appr_modal">Approve</button>
                
                <button type="submit" class="btn_reject" data-toggle="modal" data-target="#rej_modal">Reject</button>

                <button class="btn_custom" id="validate_btn" type="submit" style="margin-bottom: 10px;">Normal Button</button>
              </div>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-user"></i>&nbsp;&nbsp;
              <b>Card Title</b></div>
            <div class="card-body">
              <u><h5>Card Details</h5></u><br>
              <div class="row">
                <div class="col-lg-6">
                  <p>Name: Lorem Ipsum</p>
                  <p>Organization: Lorem Ipsum</p>
                  <p>Address: Lorem Ipsum</p>
                  <b><p style="color: #ff0000;">Some Important Stuff: 1234567890ABCD</p></b>
                </div>
                <div class="col-lg-6">
                  <p>Mobile Number: 9999999999</p>   
                  <p>Email ID: email@newmail.com</p>
                  <p>Date & Time of Registration: (Timestamp)</p>
                </div>
              </div>


              <div class="btn_row" style="margin-top: 20px;"> 
                <button type="submit" class="btn_approve" data-toggle="modal" data-target="#appr_modal">Approve</button>
                
                <button type="submit" class="btn_reject" data-toggle="modal" data-target="#rej_modal">Reject</button>

                <button class="btn_custom" id="validate_btn" type="submit" style="margin-bottom: 10px;">Normal Button</button>
              </div>
            </div>
          </div>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-user"></i>&nbsp;&nbsp;
              <b>Card Title</b></div>
            <div class="card-body">
              <u><h5>Card Details</h5></u><br>
              <div class="row">
                <div class="col-lg-6">
                  <p>Name: Lorem Ipsum</p>
                  <p>Organization: Lorem Ipsum</p>
                  <p>Address: Lorem Ipsum</p>
                  <b><p style="color: #ff0000;">Some Important Stuff: 1234567890ABCD</p></b>
                </div>
                <div class="col-lg-6">
                  <p>Mobile Number: 9999999999</p>   
                  <p>Email ID: email@newmail.com</p>
                  <p>Date & Time of Registration: (Timestamp)</p>
                </div>
              </div>


              <div class="btn_row" style="margin-top: 20px;"> 
                <button type="submit" class="btn_approve" data-toggle="modal" data-target="#appr_modal">Approve</button>
                
                <button type="submit" class="btn_reject" data-toggle="modal" data-target="#rej_modal">Reject</button>

                <button class="btn_custom" id="validate_btn" type="submit" style="margin-bottom: 10px;">Normal Button</button>
              </div>
            </div>
          </div>


             <!-- Modals -->
          <div class="modal fade" id="appr_modal" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Are you sure you want to approve?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <form action="#" method="POST">

                    <button type="submit" class="btn_approve" name="approve">Yes</button>
    
                  </form>
                  <button class="btn_reject" type="button" data-dismiss="modal">No</button>
                </div>
              </div>
            </div>
          </div>


          <div class="modal fade" id="rej_modal" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Are you sure you want to reject?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="#" method="post">
                    <p>Reason for Rejection <sup style="color: red">*</sup></p>
                    
                    <div class="form-group">
                      <div class="form-label-group"> 
                        <textarea type="text" id="reason" name="reason" class="form-control" placeholder="Reason" autofocus="autofocus" required="true"></textarea>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button class="btn_custom" name="reject">Confirm Reject</button></form>
                  <button type="button" class="btn_custom" data-dismiss="modal">Close</button>
                </div>  
              </div>
            </div>
          </div>
          <!-- Modals -->

        
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
