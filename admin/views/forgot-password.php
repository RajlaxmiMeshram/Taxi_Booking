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
              <input type="email" id="inputUsername" name="username" class="form-control" placeholder="Enter Username" autofocus="autofocus" required>
              <label for="inputUsername">Enter Username</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="forget">Verify User</button>
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
