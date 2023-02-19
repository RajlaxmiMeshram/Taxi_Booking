
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
// define variables and set to empty values
$countryErr = "";
$country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
        

          

  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = test_input($_POST["country"]);
    $city= test_input($_POST["city"]);
    // check if name only contains letters and whitespace
    
    
      
      
          
         
          
          $sql = "INSERT INTO add_location(city,country) values('".$city."','".$country."')";
          
          
          if ($conn->query($sql) === TRUE) 
          {
            echo "insertion created successfully" ;
          } else 
          {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
         //$conn->close();

//echo $sql;

        }
       

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>

<?php

if (isset($_GET['Delete'])) {

 $demail= $_GET['l_id'];
 $sql = "delete from add_location where l_id='".$demail."'";
  

if ($conn->query($sql) === TRUE) {
  echo "record Deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
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
                      <h5>Vehicles Data</h5>
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
                        <a href="vehicals.html">Vehicles</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Vehicle data
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card" style="min-height: 180px">
                      <div class="card-header"><h3>Add Country</h3></div>
                      <div class="card-body">
                        <form  method="post" action="#" class="form-inline">
                          <label class="sr-only" for="inlineFormInputName2"
                            >Country Name</label
                          >
                          <input
                            type="text"
                            class="form-control mb-2 mr-sm-2"
                            id="inlineFormInputName2"
                            placeholder="Country Name"
                            name="country"
                          />
                          <center>
                            <button type="submit" class="btn btn-primary mb-2">
                              Add
                            </button>
                          </center>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card">
                      <div class="card-header"><h3>Add City</h3></div>
                      <div class="card-body">
                        <form  method="post" action="#" class="forms-sample">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Country Name</label><span style="color:red;" class="error">* <?php echo $countryErr;?></span><br>
                                <input
                                  type="text"
                                  class="form-control is-invalid"
                                  placeholder="country"
                                  name="country"
                                />
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label >City Name</label><span style="color:red;" class="error">* <?php echo $cityErr;?></span><br>
                                <input
                                  type="text"
                                  class="form-control is-valid"
                                  
                                  placeholder="city"
                                  name="city"
                                />
                              </div>
                            </div>
                          </div>
                        
                        <center>
                          <button type="submit" class="btn btn-primary mb-2">
                            Add
                          </button>
                        </center>
                        </form>
                      </div>
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
                            <th>ID</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                       
                        <?php   

$sql = "SELECT * FROM add_location";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {?>

<tr><td><?php echo $row["l_id"] ?></td> 
<td><?php echo $row["city"] ?></td>
<td> <?php echo $row["country"] ?></td>
    <td><form action="#">  

    <input type="hidden" value="<?php echo $row["l_id"] ?>" name="l_id">
    <input type="submit" value="Delete" class="btn btn-danger"  name="Delete">&nbsp;&nbsp;&nbsp;
   
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
