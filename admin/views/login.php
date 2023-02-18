<?php 

include 'header.php';
?>
<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login</div>
      <div class="card-body">

        <form action="../Admin_modules/login_validate.php" method="post">
          <div class="form-group">
            <div class="form-label-group"> 
              <input type="email" id="mail" name="mail" class="form-control" placeholder="Username" autofocus="autofocus" required>
              <label for="mail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
              <label for="pass">Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" style="margin-bottom: 10px;" type="submit" name="submit">Login</button>
        </form>

        <div class="text-center">
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
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
