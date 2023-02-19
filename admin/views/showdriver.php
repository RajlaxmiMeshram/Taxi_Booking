
<?php

date_default_timezone_set("Asia/Kolkata");

error_reporting(0);
session_start();


if (!isset($_SESSION['adm_Id'])) {
  header('Location: login.php');
}
include 'header.php';
?>
 <?php
  $servername = "localhost";
$username = "root";
$password = "";
$database = "taxed";

// Create connection
$conn = new mysqli($servername, $username, $password,$database,3308);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


?>

<?php

if (isset($_GET['Delete'])) {

 $semail= $_GET['s_id'];
 $sql = "delete from add_driver where s_id='".$semail."'";
  

if ($conn->query($sql) === TRUE) {
  echo "record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

if (isset($_GET['Update'])) 
{
  header("Location:../pages/update_data.php");
 
exit();
}

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


        <!-- Icon Cards-->
        <div class="main-content">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row align-items-end">
                <div class="col-lg-8">
                  <div class="page-header-title">
                    <i class="ik ik-layers bg-blue"></i>
                    <div class="d-inline"></br>
                      <h5>Drivers Data</h5>
                      <!-- <span
                        >lorem ipsum dolor sit amet, consectetur adipisicing
                        elit</span
                      > -->
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                      </li>
                      <li class="breadcrumb-item">
                        <a href="drivers.html">Drivers</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Driver Data
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <div class="row">
             <!-- Customer overview start -->
              <div class="col-md-12">
                <div class="card table-card">
                  <div class="card-header">
                    <h3>Customer Overview</h3>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li>
                          <i class="ik ik-chevron-left action-toggle"></i>
                        </li>
                        <li><i class="ik ik-minus minimize-card"></i></li>
                        <li><i class="ik ik-x close-card"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th>D_ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <?php   

$sql = "SELECT * FROM add_driver";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {?>

<tr><td><?php echo $row["s_id"] ?></td> 
<td><?php echo $row["s_name"] ?></td>
<td> <?php echo $row["s_email"] ?></td>
<td> <?php echo $row["s_gender"] ?></td>
<td><?php echo $row["s_city"] ?></td>

    <td><form action="#">  

    <input type="hidden" value="<?php echo $row["s_id"] ?>" name="s_id">
    <input type="submit" value="Delete" class="btn btn-danger" name="Delete">&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Update" class="btn btn-secondary"  name="Update">
    </form></td>

    </tr>
  <?php 
  }
} else {
    echo "0 results";
  }
  $conn->close();
  ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- Application Sales end -->
            </div>
          </div>
        </div>
        <!-- Area Chart Example-->
       
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
