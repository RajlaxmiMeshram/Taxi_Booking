<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>vehicles-Admin Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <script
      src="https://kit.fontawesome.com/f4e29e0a7a.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/ionicons/dist/css/ionicons.min.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/icon-kit/dist/css/iconkit.min.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/weather-icons/css/weather-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/owl.carousel/dist/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="../node_modules/owl.carousel/dist/assets/owl.theme.default.css"
    />
    <link rel="stylesheet" href="../node_modules/chartist/dist/chartist.css" />
    <link rel="stylesheet" href="../dist/css/theme.min.css" />
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <?php
    $nameErr = $emailErr = $genderErr  = $passErr= null;
   $name = $email = $gender = $comment =  $pass= null;
   

//  if ($_SERVER["REQUEST_METHOD"] == "POST") 
//  {
//         if (empty($_POST["name"])) {
//           $nameErr = "Name is required";
//         } 
        
//           if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//             $nameErr = "Only letters and white space allowed";
//           }
//           else {
//             $name = test_input($_POST["name"]);
           
//         }

//         if (empty($_POST["email"])) 
//         {
//             $emailErr = "Email is required";
//           } else 
//           {
//            $email = test_input($_POST["email"]);
//             // check if e-mail address is well-formed
//             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
//             {
//               $emailErr = "Invalid email format";
//             }
//           }
          
//           if (empty($_POST["gender"])) {
//             $genderErr = "Gender is required";
//           } else {
//             $gender = test_input($_POST["gender"]);
//           }

//          // $name = test_input($_POST["name"]);
//           $city = test_input($_POST["city"]);
//          // $email = test_input($_POST["email"]);
//           //$gender = test_input($_POST["gender"]);
// $nameErr = $emailErr = $genderErr  = $passErr= null;
// $name = $email = $gender = $comment =  $pass= null;
           
          if(isset($_POST['submit']))
          {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            
    
            if(empty($name)){
              $nameErr = "Please enter your name";
            }
            if( !preg_match ("/^[a-zA-Z\s]+$/",$name)) {
              $nameErr = "Name must only contain letters!";
            }
            if(strlen($name) <= 2){
              $nameErr = "Name must contain atleast 3 letters";
            }
            if(strlen($name) >= 30){
              $nameErr = "Nmae must contain less than 30 letters";
            }
            if(empty($email)){
              $emailErr = "Please enter your email";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
            
           if(strlen($name) >= 30){
            $nameErr = "Nmae must contain less than 30 letters";
            }
            if(empty($email)){
              $emailErr = "Please enter your email";
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
            
        }
    
    
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

$sql = "INSERT INTO add_rider(r_name,r_email,r_gender,r_city) values('".$name."','".$email."','".$gender."','".$city ."')";


if ($conn->query($sql) === TRUE) 
{
  echo "insertion created successfully" ;
} else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

          
    

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    ?> 

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->

    <div class="wrapper">
      <header class="header-top" header-theme="light">
        <div class="container-fluid">
          <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
              <button
                type="button"
                class="btn-icon mobile-nav-toggle d-lg-none"
              >
                <span></span>
              </button>
              <div class="header-search">
                <div class="input-group">
                  <span class="input-group-addon search-close"
                    ><i class="ik ik-x"></i
                  ></span>
                  <input type="text" class="form-control" />
                  <span class="input-group-addon search-btn"
                    ><i class="ik ik-search"></i
                  ></span>
                </div>
              </div>
              <button type="button" id="navbar-fullscreen" class="nav-link">
                <i class="ik ik-maximize"></i>
              </button>
            </div>
            <div class="top-menu d-flex align-items-center">
              <div class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="notiDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><i class="ik ik-bell"></i
                  ><span class="badge bg-danger">3</span></a
                >
                <div
                  class="dropdown-menu dropdown-menu-right notification-dropdown"
                  aria-labelledby="notiDropdown"
                >
                  <h4 class="header">Notifications</h4>
                  <div class="notifications-wrap">
                    <a href="#" class="media">
                      <span class="d-flex">
                        <i class="ik ik-check"></i>
                      </span>
                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >Invitation accepted</span
                        >
                        <span class="media-content"
                          >Your have been Invited ...</span
                        >
                      </span>
                    </a>
                    <a href="#" class="media">
                      <span class="d-flex">
                        <img
                          src="../img/users/1.jpg"
                          class="rounded-circle"
                          alt=""
                        />
                      </span>
                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >Steve Smith</span
                        >
                        <span class="media-content"
                          >I slowly updated projects</span
                        >
                      </span>
                    </a>
                    <a href="#" class="media">
                      <span class="d-flex">
                        <i class="ik ik-calendar"></i>
                      </span>
                      <span class="media-body">
                        <span class="heading-font-family media-heading"
                          >To Do</span
                        >
                        <span class="media-content"
                          >Meeting with Nathan on Friday 8 AM ...</span
                        >
                      </span>
                    </a>
                  </div>
                  <div class="footer">
                    <a href="javascript:void(0);">See all activity</a>
                  </div>
                </div>
              </div>
              <button type="button" class="nav-link ml-10 right-sidebar-toggle">
                <i class="ik ik-message-square"></i
                ><span class="badge bg-success">3</span>
              </button>
              <div class="dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="menuDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><i class="ik ik-plus"></i
                ></a>
                <div
                  class="dropdown-menu dropdown-menu-right menu-grid"
                  aria-labelledby="menuDropdown"
                >
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Dashboard"
                    ><i class="ik ik-bar-chart-2"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Message"
                    ><i class="ik ik-mail"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Accounts"
                    ><i class="ik ik-users"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Sales"
                    ><i class="ik ik-shopping-cart"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Purchase"
                    ><i class="ik ik-briefcase"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Pages"
                    ><i class="ik ik-clipboard"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Chats"
                    ><i class="ik ik-message-square"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Contacts"
                    ><i class="ik ik-map-pin"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Blocks"
                    ><i class="ik ik-inbox"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Events"
                    ><i class="ik ik-calendar"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Notifications"
                    ><i class="ik ik-bell"></i
                  ></a>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="More"
                    ><i class="ik ik-more-horizontal"></i
                  ></a>
                </div>
              </div>
              <button
                type="button"
                class="nav-link ml-10"
                id="apps_modal_btn"
                data-toggle="modal"
                data-target="#appsModal"
              >
                <i class="ik ik-grid"></i>
              </button>
              <div class="dropdown">
                <a
                  class="dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img class="avatar" src="../img/user.jpg" alt=""
                /></a>
                <div
                  class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="profile.html"
                    ><i class="ik ik-user dropdown-icon"></i> Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="ik ik-settings dropdown-icon"></i> Settings</a
                  >
                  <a class="dropdown-item" href="#"
                    ><span class="float-right"
                      ><span class="badge badge-primary">6</span></span
                    ><i class="ik ik-mail dropdown-icon"></i> Inbox</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="ik ik-navigation dropdown-icon"></i> Message</a
                  >
                  <a class="dropdown-item" href="login.html"
                    ><i class="ik ik-power dropdown-icon"></i> Logout</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="page-wrap">
        <div class="app-sidebar colored">
          <div class="sidebar-header">
            <a class="header-brand" href="index.html">
              <div class="logo-img">
                <img
                  src="../src/img/brand-white.svg"
                  class="header-brand-img"
                  alt="lavalite"
                />
              </div>
              <span class="text">ThemeKit</span>
            </a>
            <button type="button" class="nav-toggle">
              <i
                data-toggle="expanded"
                class="ik ik-toggle-right toggle-icon"
              ></i>
            </button>
            <button id="sidebarClose" class="nav-close">
              <i class="ik ik-x"></i>
            </button>
          </div>

          <div class="sidebar-content">
            <div class="nav-container">
              <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">Navigation</div>
                <div class="nav-item">
                  <a href="../index.html"
                    ><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a
                  >
                </div>
                <div class="nav-item">
                    <a href="drivers.html"
                      ><i class="fa-solid fa-id-card"></i><span>Drivers</span></a
                    >
                  </div>
                  <div class="nav-item">
                    <a href="rider1.html"
                      ><i class="fa-solid fa-user"></i><span>Riders</span></a
                    >
                  </div>
  
                  <div class="nav-item has-sub">
                    <a href="javascript:void(0)"
                      ><i class="fa-solid fa-money-bill-1"></i>
                      <span>Add</span></a
                    >
                    <!-- <span class="badge badge-danger">150+</span>-->
  
                    <div class="submenu-content">
                      <!-- <a href="pages/widgets.html" class="menu-item"></a> -->
                      <a href="#" class="menu-item"
                        >Add Drivers</a
                      >
                      <!-- <a href="pages/widget-data.html" class="menu-item">Data</a> -->
                      <a href="pages/add_riders.html" class="menu-item"
                        >Add Locations</a
                      >
                    </div>
  
                    <div class="nav-item">
                      <a href="vehicals.html"
                        ><i class="fa-solid fa-car"></i
                        ><span>Vehicle Types</span></a
                      >
                    </div>
                    <!-- <span class="badge badge-success">New</span></a
                    > -->
                  </div>
                  <div class="nav-item has-sub">
                    <a href="javascript:void(0)"
                      ><i class="fa-solid fa-money-bill-1"></i>
                      <span>Earning Reports</span></a
                    >
                    <!-- <span class="badge badge-danger">150+</span>-->
  
                    <div class="submenu-content">
                      <a href="pages/widgets.html" class="menu-item"></a>
                      <a href="pages/widget-statistic.html" class="menu-item"
                        >Driver Payment Reports</a
                      >
                      <!-- <a href="pages/widget-data.html" class="menu-item">Data</a>
                      <a href="pages/widget-chart.html" class="menu-item"
                        >Chart Widget</a
                      > -->
                    </div>
                  </div>

                <div class="nav-item">
                  <a href="#"
                    ><i class="ik ik-file-text"></i
                    ><span>Over all Rider Statement</span></a
                  >
                </div>
                <div class="nav-lavel">UI Element</div>
                <div class="nav-item has-sub">
                  <a href="#"><i class="ik ik-box"></i><span>Basic</span></a>
                  <div class="submenu-content">
                    <a href="ui/alerts.html" class="menu-item">Alerts</a>
                    <a href="ui/badges.html" class="menu-item">Badges</a>
                    <a href="ui/buttons.html" class="menu-item">Buttons</a>
                    <a href="ui/navigation.html" class="menu-item"
                      >Navigation</a
                    >
                  </div>
                </div>
                <div class="nav-item has-sub">
                  <a href="#"
                    ><i class="ik ik-gitlab"></i><span>Advance</span>
                    <span class="badge badge-success">New</span></a
                  >
                  <div class="submenu-content">
                    <a href="ui/modals.html" class="menu-item">Modals</a>
                    <a href="ui/notifications.html" class="menu-item"
                      >Notifications</a
                    >
                    <a href="ui/carousel.html" class="menu-item">Slider</a>
                    <a href="ui/range-slider.html" class="menu-item"
                      >Range Slider</a
                    >
                    <a href="ui/rating.html" class="menu-item">Rating</a>
                  </div>
                </div>
                <div class="nav-item has-sub">
                  <a href="#"
                    ><i class="ik ik-package"></i><span>Extra</span></a
                  >
                  <div class="submenu-content">
                    <a href="ui/session-timeout.html" class="menu-item"
                      >Session Timeout</a
                    >
                  </div>
                </div>
                <div class="nav-item">
                  <a href="ui/icons.html"
                    ><i class="ik ik-command"></i><span>Icons</span></a
                  >
                </div>
                <div class="nav-lavel">Forms</div>
                <div class="nav-item has-sub">
                  <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                  <div class="submenu-content">
                    <a href="form-components.html" class="menu-item"
                      >Components</a
                    >
                    <a href="form-addon.html" class="menu-item">Add-On</a>
                    <a href="form-advance.html" class="menu-item">Advance</a>
                  </div>
                </div>
                <div class="nav-item">
                  <a href="form-picker.html"
                    ><i class="ik ik-terminal"></i><span>Form Picker</span>
                    <span class="badge badge-success">New</span></a
                  >
                </div>

                <div class="nav-lavel">Tables</div>
                <div class="nav-item">
                  <a href="table-bootstrap.html"
                    ><i class="ik ik-credit-card"></i
                    ><span>Bootstrap Table</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="table-datatable.html"
                    ><i class="ik ik-inbox"></i><span>Data Table</span></a
                  >
                </div>

                <div class="nav-lavel">Charts</div>
                <div class="nav-item has-sub">
                  <a href="#"
                    ><i class="ik ik-pie-chart"></i><span>Charts</span>
                    <span class="badge badge-success">New</span></a
                  >
                  <div class="submenu-content">
                    <a href="charts-chartist.html" class="menu-item"
                      >Chartist</a
                    >
                    <a href="charts-flot.html" class="menu-item">Flot</a>
                    <a href="charts-knob.html" class="menu-item">Knob</a>
                    <a href="charts-amcharts.html" class="menu-item"
                      >Amcharts</a
                    >
                  </div>
                </div>

                <div class="nav-lavel">Apps</div>
                <div class="nav-item">
                  <a href="calendar.html"
                    ><i class="ik ik-calendar"></i><span>Calendar</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="taskboard.html"
                    ><i class="ik ik-server"></i><span>Taskboard</span></a
                  >
                </div>

                <div class="nav-lavel">Pages</div>

                <div class="nav-item has-sub">
                  <a href="#"
                    ><i class="ik ik-lock"></i><span>Authentication</span></a
                  >
                  <div class="submenu-content">
                    <a href="login.html" class="menu-item">Login</a>
                    <a href="register.html" class="menu-item">Register</a>
                    <a href="forgot-password.html" class="menu-item"
                      >Forgot Password</a
                    >
                  </div>
                </div>
                <div class="nav-item has-sub">
                  <a href="#"
                    ><i class="ik ik-file-text"></i><span>Other</span></a
                  >
                  <div class="submenu-content">
                    <a href="profile.html" class="menu-item">Profile</a>
                    <a href="invoice.html" class="menu-item">Invoice</a>
                  </div>
                </div>
                <div class="nav-item">
                  <a href="layouts.html"
                    ><i class="ik ik-layout"></i><span>Layouts</span
                    ><span class="badge badge-success">New</span></a
                  >
                </div>
                <div class="nav-lavel">Other</div>
                <div class="nav-item has-sub">
                  <a href="javascript:void(0)"
                    ><i class="ik ik-list"></i><span>Menu Levels</span></a
                  >
                  <div class="submenu-content">
                    <a href="javascript:void(0)" class="menu-item"
                      >Menu Level 2.1</a
                    >
                    <div class="nav-item has-sub">
                      <a href="javascript:void(0)" class="menu-item"
                        >Menu Level 2.2</a
                      >
                      <div class="submenu-content">
                        <a href="javascript:void(0)" class="menu-item"
                          >Menu Level 3.1</a
                        >
                      </div>
                    </div>
                    <a href="javascript:void(0)" class="menu-item"
                      >Menu Level 2.3</a
                    >
                  </div>
                </div>
                <div class="nav-item">
                  <a href="javascript:void(0)" class="disabled"
                    ><i class="ik ik-slash"></i><span>Disabled Menu</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="javascript:void(0)"
                    ><i class="ik ik-award"></i><span>Sample Page</span></a
                  >
                </div>
                <div class="nav-lavel">Support</div>
                <div class="nav-item">
                  <a href="javascript:void(0)"
                    ><i class="ik ik-monitor"></i><span>Documentation</span></a
                  >
                </div>
                <div class="nav-item">
                  <a href="javascript:void(0)"
                    ><i class="ik ik-help-circle"></i
                    ><span>Submit Issue</span></a
                  >
                </div>
              </nav>
            </div>
          </div>
        </div>
        <div class="main-content">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row align-items-end">
                <div class="col-lg-8">
                  <div class="page-header-title">
                    <i class="ik ik-layers bg-blue"></i>
                    <div class="d-inline"></br>
                      <h5>Add rider</h5>
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
                        <a href="vehicals.html">rider</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        rider data
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
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
        <footer class="footer">
          <div class="w-100 clearfix">
            <span class="textenter text-sm-left d-md-inline-block"
              >Copyright © 2018 ThemeKit v1.0. All Rights Reserved.</span
            >
            <span class="float-none float-sm-right mt-1 mt-sm-0 textenter"
              >Crafted with <i class="fa fa-heart text-danger"></i> by
              <a href="http://lavalite.org/" class="text-dark" target="_blank"
                >Lavalite</a
              ></span
            >
          </div>
        </footer>
      </div>
    </div>

    <div
      class="modal fade apps-modal"
      id="appsModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="appsModalLabel"
      aria-hidden="true"
      data-backdrop="false"
    >
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <i class="ik ik-x-circle"></i>
      </button>
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="quick-search">
            <div class="container">
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                  <div class="input-wrap">
                    <input
                      type="text"
                      id="quick-search"
                      class="form-control"
                      placeholder="Search..."
                    />
                    <i class="ik ik-search"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body d-flex align-items-center">
            <div class="container">
              <div class="apps-wrap">
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-users"></i><span>Accounts</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-shopping-cart"></i><span>Sales</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-briefcase"></i><span>Purchase</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-clipboard"></i><span>Pages</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-message-square"></i><span>Chats</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-map-pin"></i><span>Contacts</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-calendar"></i><span>Events</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-bell"></i><span>Notifications</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-pie-chart"></i><span>Reports</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                </div>
                <div class="app-item">
                  <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-settings"></i><span>Settings</span></a
                  >
                </div>
                <div class="app-item">
                  <a href="#"
                    ><i class="ik ik-more-horizontal"></i><span>More</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>'
        );
    </script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="../node_modules/screenfull/dist/screenfull.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/chartist/dist/chartist.min.js"></script>
    <script src="../node_modules/flot-charts/jquery.flot.js"></script>
    <script src="../node_modules/flot-charts/jquery.flot.categories.js"></script>
    <script src="../node_modules/flot.curvedlines/curvedLines.js"></script>
    <script src="../node_modules/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
    <script src="../dist/js/theme.min.js"></script>
    <script src="../js/widget-data.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] ||
          (b[l] = function () {
            (b[l].q = b[l].q || []).push(arguments);
          });
        b[l].l = +new Date();
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = "https://www.google-analytics.com/analytics.js";
        r.parentNode.insertBefore(e, r);
      })(window, document, "script", "ga");
      ga("create", "UA-XXXXX-X", "auto");
      ga("send", "pageview");
    </script>
  </body>
</html>
