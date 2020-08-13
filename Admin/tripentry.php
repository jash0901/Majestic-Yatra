<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MajesticYatra-BlogCatEntry</title>
  </head>
  <body>
     <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Majestic Yatra</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Website Admin</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label" style="font-size:14px; ">Enter Location Information</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="city-entry.html"><i class="icon fa fa-circle-o"></i> Enter cities</a></li>
            <li><a class="treeview-item" href="state-entry.html" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Enter States</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>Enter Countries</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>Enter Routes</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">View Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="city-entry.html"><i class="icon fa fa-circle-o"></i>View all users</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>View Travelers</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>View Mechanics</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>View Doctors</a></li>
            <li><a class="treeview-item" href="country-entry.html"><i class="icon fa fa-circle-o"></i>View Hotels</a></li>
          </ul>
        </li>
         <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-paper-plane"></i><span class="app-menu__label">View Blogs</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Verify Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-user-md"></i>Verify Doctors</a></li>
            <li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-wrench"></i>Verify Mechanics</a></li>
            <li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-hotel"></i>Verify Hotels</a></li>
            <li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-car"></i>Verify Vehicle Rental Providers</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">View Information</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i>View Blog Categories</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>View States</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>View Countries</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>View Cities</a></li>
            <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i>View Routes</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-road"></i><span class="app-menu__label">View Trips</span></a></li>
        <li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">View Feedbacks</span></a></li>
          </ul>
        </li>
      </ul>
    </aside>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="center-block">
        <h1>Majestic Yatra</h1>
    </div>
      <div class="login-box" style="height: 1200px;">
       <form class="login-form" action="tripentryprocess.php" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Traveler-Register</h3>
          <div class="form-group">
            <label class="control-label">Title</label>
            <input class="form-control" type="text" name="name" placeholder="Enter Name" autofocus required>
          </div>
          <div class="form-group">
            <label class="control-label">language</label>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
           <div class="form-group">
            <label class="control-label">Accomodation Type</label>
            <input class="form-control" type="Text" name="phn" placeholder="Phone" required>
          </div>
          <div class="form-group">
            <label class="control-label">Travel Method</label>
           <input class="form-check-input" type="radio" name="gender" value="Male" checked="True" style="margin-right: 5px;margin-left: 5px;"><label style="margin-left:20px;">By Air</label>
            <input class="form-check-input" type="radio" name="gender" value="Female" checked="True" style="margin-left: 5px;"><label style="margin-left:20px;">By Train</label><br>
              <input class="form-check-input" type="radio" name="gender" value="Female" checked="True" style="margin-left: 97px;"><label style="margin-left:115px;">By Road</label>
          </div>
            <div class="form-group">
            <label class="control-label">Budget</label>
            <input class="form-control" type="Text" name="lang" placeholder="First Language" required>
          </div>
           <div class="form-group">
                  <label class="control-label">Trip Description</label>
                  <textarea class="form-control" rows="4" name="gaddr" placeholder="Enter your address"></textarea>
          </div>  
          <div class="form-group">
            <label class="control-label">Preferred Gender</label><br>
           <input class="form-check-input" type="radio" name="gender" value="Male" checked="True" style="margin-right: 5px;margin-left: 5px;"><label style="margin-left:20px;">Male</label>
            <input class="form-check-input" type="radio" name="gender" value="Female" checked="True" style="margin-left: 5px;"><label style="margin-left:20px;">Female</label>
          </div>
         <div class="form-group">
                    <label for="city_id">Trip Starting date</label>
          <input class="form-control" name="dte" type="date"></div>
         <div class="form-group">
                    <label for="state_id">Trip Ending Date</label>
                    <input class="form-control" name="dte" type="date"></div>
         <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="breg"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register as Traveller</button>
          </div>
         <!-- <div class="form-group">
                    <label for="pfp">Profile Picture</label>
                    <input class="form-control-file" id="pfp" type="file" aria-describedby="fileHelp"></div> -->
        </form>
      </div>
    </section>
   <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>