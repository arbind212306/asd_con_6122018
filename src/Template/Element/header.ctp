<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
  <?php
  if($value == 1)
  {
    echo "Dashboard | Console";
  }
  if($value == 2)
  {
    echo "Manage Clients | Console";
  }
  if($value == 3)
  {
    echo "Manage Contract | Console";
  }
  if($value == 4)
  {
    echo "Database Configuration Master | Console";
  }
  if($value == 5)
  {
    echo "Business Unit Master | Console";
  }
  if($value == 6)
  {
    echo "Industry Master | Console";
  }
  if($value == 7)
  {
    echo "Mode of Payment Master | Console";
  }
  if($value == 8)
  {
    echo "Billing Frequency Master | Console";
  }
  if($value == 9)
  {
    echo "Invoice Frequency Master | Console";
  }
  if($value == 10)
  {
    echo "Payment Master | Console";
  }
  if($value == 11)
  {
    echo "Invoice Cycle Master | Console";
  }
  if($value == 12)
  {
    echo "No. of User Master | Console";
  }
   if($value == 15)
  {
    echo "Generate Dummy Invoice | Console";
  }
  if($value == 16)
  {
    echo "View Dummy Invoice | Console";
  }
  ?>  
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?= $this->Html->css('bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- jvectormap -->
  <?= $this->Html->css(['jquery-jvectormap','dataTables.bootstrap.min','ionicons.min']); ?>
  <!-- Theme style -->
  <?= $this->Html->css('AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?= $this->Html->css('skins/_all-skins.min'); ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- link for custom style of every elements of console -->
  <?= $this->Html->css('custom-style'); ?>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- link below for using jquery date picker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- header section starts here --> 
<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b>LT</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Console</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!--<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
              <span class="hidden-xs">Admin</span> 
               
            </a>
            <ul class="dropdown-menu">
              </li>
              <!-- Menu Footer -->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
              <?php $logout=$this->Url->build(['controller'=>'Users','action'=>'logout']);?>
              <a href="<?= $logout ?>" class="btn btn-flat">Log out</a>
          </li> 
        </ul>
      </div>

    </nav>
  </header>
  <style> 
    .active {
  background-color: #666;
  color: white;
}
  </style>

<!-- header section ends here -->

<!-- script for assigning webroot as global variable and using it in js file -->
<script>
    var webroot = '<?= $this->Url->build('/',true) ?>';
</script>