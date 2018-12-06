
<?php
//$url = $this->Url->build('/webroot');
//pr($results);
?>


<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
   
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
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
     <li class="<?php if($value == 1) echo"active";?>">
          <a href="<?php echo $this->Url->build(['controller'=>'Users','action'=>'dashboard']) ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                      </a>
                      
        </li>
        <li class="<?php if($value == 2) echo"active";?>">
          <a href="<?php echo $this->Url->build(['controller'=>'Admin','action'=>'viewClients']) ?>">
            <i class="fa fa-users"></i> <span>Manage Client</span>
            
          </a>
                         
        
        </li>
        <li class="<?php if($value == 3) echo"active";?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'manageContract']) ?>">
            <i class="fa fa-files-o"></i>
            <span>Contract</span>
                    </a>
             </li>
          <!--<ul class="treeview-menu">
            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'addService']) ?>"><i class="fa fa-circle-o"></i> Add </a></li>
            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'manageContract']) ?>"><i class="fa fa-circle-o"></i> View </a></li>
          </ul> -->
       
        <li class="treeview  <?php if(($value == 4) || ($value == 5) || ($value == 6) || ($value == 7) || ($value == 8) || ($value == 9) || ($value == 10) || ($value == 11) || ($value == 12) ) echo"active";?>">
          <a href="#">
            <i class="fa fa-wrench"></i> <span>Masters </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" <?php if($value == 4) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Admin', 'action' => 'view-db']) ?>"><i class="fa fa-circle-o"></i> Database Configuration</a></li>
            <li class=" <?php if($value == 5) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'BusinessUnit', 'action' => 'manageBusinessUnit']) ?>"><i class="fa fa-circle-o"></i> Business Unit </a></li>
            <li class=" <?php if($value == 6) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Industry', 'action' => 'manageIndustry']) ?>"><i class="fa fa-circle-o"></i> Industry </a></li>
            
             <li class=" <?php if($value == 7) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsoleModeOfPayment', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> Mode of Payment</a></li>
            <li class=" <?php if($value == 8) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsoleBillingFrequency', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> Billing Frequency </a></li>
            <li class=" <?php if($value == 9) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsoleInvoiceFrequenies', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> Invoice Frequency </a></li>
            
            <li class=" <?php if($value == 10) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsolePayments', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> Payment Option</a></li>
            <li class=" <?php if($value == 11) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsoleInvoiceCycles', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> Invoice Cycle </a></li>
            <li class=" <?php if($value == 12) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'ConsoleNoOfUser', 'action' => 'index']) ?>"><i class="fa fa-circle-o"></i> No of users </a></li>
            
            
         </ul>
        </li>
        
        
        
      <!--   <li class="">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">
            <i class="fa fa-database"></i> <span>Client Login</span>
           
          </a>
         
        </li> -->
        
        
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

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
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
     <!-- Main content -->
    <section class="content">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                   <div class="box-header with-border">
              <h3 class="box-title text-center" style="margin-left: 10px;">Add Database</h3>
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
                      <option value=""> Select </option>
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
                     <?php 
                  if(!empty($results)):
                     foreach($results as $services): 
                  ?>
                  <option value="<?= $services['product_id'] ?>"><?= $services['product_name']?></option>
                  <?php
                  endforeach;
                  endif;
                  ?>
                   
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
  
  

  