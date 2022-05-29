<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="dashboard.php" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
    </div>
    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_info">
        <h2>Welcome,
          <?php echo $_SESSION['username']; ?></h2>
        </div>
      </div>
      <!-- /menu profile quick info -->
      <br />
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li><a><i class="fa fa-sitemap"></i> Account <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php" >My Profile</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
              </ul>
            </li>
            <li><a href="issued-books.php"><i class="fa fa-gear"></i> Issued Books</a>
              <li><a href="request-a-book.php"><i class="fa fa-gear"></i> Request a Book</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /menu footer buttons -->
      </div>
    </div>
    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="my-profile.php"> Profile</a>
                <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>