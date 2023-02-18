<?php 

include 'header.php';
?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
        </div>

        <form action="../Admin_modules/login_validate.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="new" name="new" class="form-control" placeholder="New Password" autofocus="autofocus" required>
              <label for="new">New Password</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirm Password" autofocus="autofocus" required>
              <label for="confirm">Confirm Password</label>
            </div>
          </div>

          <input type="hidden" name="user" value="<?php echo $_GET['user'];?>">
          
          
          <button class="btn btn-primary btn-block" type="submit" name="reset">Reset Password</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
