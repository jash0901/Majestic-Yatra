<?php session_start(); 
require "../lib/doctorloginvalidation.php";  ?>
<?php include_once "lib/connection.php";
  require "lib/model.php";
  require "lib/validation.php";?>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
 <body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="index.php">Majestic Yatra</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->

      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="UpdatePrices.php"><i class="fa fa-dollar fa-lg"></i> Update Prices</a></li>
          <li><a class="dropdown-item" href="viewprofile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="../signout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
  </header>
  <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../profilepics/<?= $_SESSION['pic'] ?>" style="height: 60px;width: 60px;" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['name'] ?></p>
          <p class="app-sidebar__user-designation">Website Doctor</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="viewrequests.php"><i class="app-menu__icon fa fa-road"></i><span class="app-menu__label">View Requests</span></a></li>
        <li><a class="app-menu__item" href="service.php"><i class="app-menu__icon fa fa-road"></i><span class="app-menu__label">Current Ongoing Service</span></a></li>
        <li><a class="app-menu__item" href="allocationhistory.php"><i class="app-menu__icon fa fa-road"></i><span class="app-menu__label">View Previous History</span></a></li>
        <li><a class="app-menu__item" href="../Blogs"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">Blogs</span></a></li>
          </ul>
        </li>
      </ul>
    </aside>
