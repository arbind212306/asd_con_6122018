
<?php
//$url = $this->Url->build('/webroot');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Console</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?= $this->Html->css('bootstrap.min'); ?>
  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- jvectormap -->
  <?= $this->Html->css(['jquery-jvectormap','dataTables.bootstrap.min','font-awesome.min','ionicons.min']); ?>
  <!-- Theme style -->
  <?= $this->Html->css('AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?= $this->Html->css('skins/_all-skins.min'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- header section starts here --> 
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- <span class="logo-mini"><b>A</b>LT</span> -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dashboard  </b></span>
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
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>

<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<!--      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>-->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Managr Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
              <?php $client_add=$this->Url->build(['controller'=>'Admin','action'=>'clientAdd']); ?>
              <?php $client_list=$this->Url->build(['controller'=>'Admin','action'=>'viewClients']); ?>
          <ul class="treeview-menu">
         
            <li><a href="<?php echo  $client_add ?>"><i class="fa fa-circle-o"></i> Add Client</a></li>
            <li class="active"><a href="<?php echo  $client_list ?>"><i class="fa fa-circle-o"></i> View Client</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Service Manager</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'addService']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> View </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Database Configuration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'Admin', 'action' => 'addDb']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Admin', 'action' => 'ViewDb']) ?>"><i class="fa fa-circle-o"></i> View </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Business Unit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'BusinessUnit', 'action' => 'add']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'BusinessUnit', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> View </a></li>
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Industry</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'Industry', 'action' => 'add']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Industry', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> View </a></li>
          </ul>
        </li>

        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
     <!-- Main content -->
    <section class="content">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                   <div class="box-header with-border">
              <h3 class="box-title text-center" style="margin-left: 10px;">Add Database Configuration</h3>
            </div> 
      <div class="row">
          <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
           <?= $this->Form->create('',['id'=>'add_db']); ?>
        <!-- left column -->
       <div class="col-md-12 " >
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
                <div class="form-group" style="padding-top:10px;">
                  <label for="client_type">Client Name<span style="color: red">*</span></label>
                <div class="form-group">
               
                  <select class="form-control" id="client_id" name="client_id">
                      <option value="">- Select -</option>
                  <?php 
                  if(!empty($result)):
                     foreach($result as $client): 
                  ?>
                  <option value="<?= $client['client_id'] ?>"><?= $client['client_name']?></option>
                  <?php
                  endforeach;
                  endif;
                  ?>
                  </select>
                <span id="check_client_id"></span>
                </div>
                </div>
          <div class="form-group" style="padding-top:10px;">
                <label for="client_name">Host Name<span style="color: red">*</span></label>
    
                    <input type="text" id="host_name"  name="host_name" class="form-control"  placeholder="">
                    <span id="check_host_name"></span>
                </div>
                 
			  <div class="form-group">
                  <label for="client_name">Username<span style="color: red">*</span></label>
		
                    <input type="text" id="username"  name="username" class="form-control"  placeholder="">
                <span id="check_username"></span>
                          </div> 
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-5 col-xs-12 col-sm-5">
                     <div class="box-header with-border">
                        </div>
                    
             <div class="box-body">
                   
                 <div class="form-group" style="padding-top:2px">
                  <label for="client_type">Service Name<span style="color: red">*</span></label>
                <div class="form-group">
               
                  <select class="form-control" id="service_id" name="service_id">
                       <option value="">Select</option>
                    <option value="MV236">Myvoice</option>
                    <option value="SB598">Spring Board</option>
                    <option value="AMS353">Attendance Management System</option>
                    <option value="HRMS254">Human Resource Managment System</option>

                   
                  </select>
                <span id="check_service_id"></span>
                </div>
                </div>
                 <div class="form-group" >
                  <label for="website">Database Name<span style="color: red">*</span></label>
                  <input type="text" name="db_name" class="form-control" id="db_name" placeholder="">
                  <span id="check_db_name"></span>
                </div>
                <div class="form-group">
                <label>Password<span style="color: red">*</span></label>
                    <input type="password" id="db_auth"  name="db_auth" class="form-control"  placeholder="">
                <span id="check_db_auth"></span>
              </div>        
          </div>
    
      </div>
        <div class="col-md-12">
        <div class="box-footer text-center">
                <button type="button"  id="myForm" class="btn btn-primary" >Add</button>
              </div>
            </div>
         
          </div>
                
       <?= $this->Form->end();?>
	 </div>
                  </div>
      <!-- /.row -->
    </section>
   
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    Copyright &copy; 2018, <strong>Quatrro Global Service Pvt Ltd.</strong> All rights
    reserved.
  </footer>
  
   <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
       
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

<!--          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
           /.form-group 

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
           /.form-group 

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>-->
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<?= $this->Html->script('jquery.min'); ?>
<?= $this->Html->script('bootstrap.min'); ?>
<?=  $this->Html->script('fastclick'); ?>
<?= $this->Html->script('adminlte.min'); ?>
<?= $this->Html->script('jquery.sparkline.min'); ?>
<?= $this->Html->script(['jquery-jvectormap-1.2.2.min','jquery-jvectormap-world-mill-en']); ?>
<?= $this->Html->script('jquery.slimscroll.min'); ?>
<?= $this->Html->script('Chart'); ?>
<?= $this->Html->script('demo'); ?>
     <style>
            .error_label {
            color: #f40929;
            font-size: 14px;
            }

            .success_label {
            color: #2fa01b;
            font-size: 14px;
            }
        </style>
</body>
</html>
<script>
  $(document).ready(function(){
    
   $('#myForm').click(function(){
    var valid = true;
    if($('#host_name').val()=='')
    {   
        $('#host_name').css('border','1px solid red');
        $('#check_host_name').text('Please enter hostname');
        $('#check_host_name').addClass('error_label');
        valid = false;
    }
    else {
        $('#host_name').css('border','1px solid #cccccc');
        $('#check_host_name').text('');
    }
   
    if($('#username').val()=='')
    {   
        $('#username').css('border','1px solid red');
        $('#check_username').text('Please enter username');
        $('#check_username').addClass('error_label');
        valid = false;
    }
    else {
        $('#username').css('border','1px solid #cccccc');
        $('#check_username').text('');
    }
    if($('#client_id').val()=='')
    {   
        $('#client_id').css('border','1px solid red');
        $('#check_client_id').text('Please choose an option');
        $('#check_client_id').addClass('error_label');
        valid = false;
    }
    else {
        $('#client_id').css('border','1px solid #cccccc');
        $('#check_client_id').text('');
    }
    if($('#service_id').val()=='')
    {   
        $('#service_id').css('border','1px solid red');
        $('#check_service_id').text('Please choose an option');
        $('#check_service_id').addClass('error_label');
        valid = false;
    }
    else {
        $('#service_id').css('border','1px solid #cccccc');
        $('#check_service_id').text('');
    }
    if($('#db_name').val()=='')
    {   
        $('#db_name').css('border','1px solid red');
        $('#check_db_name').text('Please enter database name');
        $('#check_db_name').addClass('error_label');
        valid = false;
    }
    else {
        $('#db_name').css('border','1px solid #cccccc');
        $('#check_db_name').text('');
    }
    if($('#db_auth').val()=='')
    {   
        $('#db_auth').css('border','1px solid red');
        $('#check_db_auth').text('Please enter database password');
        $('#check_db_auth').addClass('error_label');
        valid = false;
    }
    else {
        $('#db_auth').css('border','1px solid #cccccc');
        $('#check_db_auth').text('');
    }

     if(valid == true)
      {
        $('#add_db').submit();
      }
       else
       {
         return false;
       }

   });


  });
</script>
  
  

  