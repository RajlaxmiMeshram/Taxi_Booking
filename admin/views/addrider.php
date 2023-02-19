
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
    $nameErr = $emailErr = $genderErr  = $passErr= null;
   $name = $email = $gender = $comment =  $pass= null;
   

 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {
        
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


if (empty($_POST["name"])) {
  $nameErr = "Name is required";
} 

  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
  }
  else {
    $name = test_input($_POST["name"]);
   
}

if (empty($_POST["email"])) 
{
    $emailErr = "Email is required";
  } else 
  {
   $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
    }
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    $city = test_input($_POST["city"]);

    $sql = "INSERT INTO add_rider(r_name,r_email,r_gender,r_city) values('".$name."','".$email."','".$gender."','".$city ."')";


if ($conn->query($sql) === TRUE) 
{
  echo "insertion created successfully" ;
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  }

$conn->close();

          
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
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
        
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  <p><span class="error" style="color:red;" >* required field</span></p>
                  <form  method="post" action ="#">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>&nbsp <span style="color:red;" class="error">* <?php echo $nameErr;?></span><br><br>
                      <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>&nbsp<span style="color:red;" class="error">* <?php echo $emailErr;?></span> <br><br>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail3" placeholder="Email">
                      
 
                    </div>
                    
                    <div class="form-group">
                      <label  for="exampleSelectGender" style="font: size 50px;" >Gender</label>&nbsp <span style="color:red;"  class="error">* <?php echo $genderErr;?></span><br>
                       <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> &nbsp&nbsp&nbspFemale &nbsp &nbsp
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> &nbsp&nbsp&nbspMale
  <br><br>
  <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" name="city" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>

                    <button name="submit" type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
