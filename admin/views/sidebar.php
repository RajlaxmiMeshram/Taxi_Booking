 <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <?php
          $link = $_SERVER['PHP_SELF'];
          $link_array = explode('/',$link);
          $page = end($link_array);
      ?>
      
      <li <?php if($page=="index.php") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?> >
        <a class="nav-link" href="index.php">
          <div class="wrapped">
            <i class="fas fa-fw fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;
            <span>Dashboard</span>
          </div>
        </a>
      </li>
      <li <?php if($page=="#") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="#">
          <div class="wrapped">
            <i class="fas fa-fw fa-folder"></i>&nbsp;&nbsp;&nbsp;
            <span>Page 1</span>
          </div></a>
      </li>
      <li <?php if($page=="#") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="#">
          <div class="wrapped">
            <i class="fas fa-fw fa-folder"></i>&nbsp;&nbsp;&nbsp;
            <span>Page 2</span>
          </div></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>&nbsp;&nbsp;&nbsp;
            <span>Dropdown</span></a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Dropdown Message</h6>
          <a class="dropdown-item" href="datatables.php">Datatables</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="forms.php">Forms</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="charts.php">Charts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="carousel.php">Carousel</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cardview.php">Card, Button & Modal</a>
        </div>
      </li>
      <li <?php if($page=="#") { ?>  class="active nav-item" <?php } else { ?>  class="nav-item" <?php } ?>>
        <a class="nav-link" href="#">
          <div class="wrapped">
            <i class="fas fa-fw fa-folder"></i>&nbsp;&nbsp;&nbsp;
            <span>Page 3</span>
          </div></a>
      </li>

      <li class="list_divider"></li>

      <li class="nav-item signout">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <div class="wrapped">
            <i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;
            <span>Sign Out</span>
          </div></a>
      </li>
      
    </ul>