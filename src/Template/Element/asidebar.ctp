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


 
             <li class="treeview  <?php if(($value == 15) || ($value == 16) || ($value == 17) ) echo"active";?>">
          <a href="#">
            <i class="fa fa-file-o"></i></i> <span>Invoice </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=" <?php if($value == 15) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'manageInvoice']) ?>"><i class="fa fa-circle-o"></i> Generate Dummy Invoice</a></li>
            <li class=" <?php if($value == 16) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'viewDummyInvoice']) ?>"><i class="fa fa-circle-o"></i> View Dummy Invoice </a></li>
              <li class=" <?php if($value == 17) echo"active";?>"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'invoiceDetails']) ?>"><i class="fa fa-circle-o"></i> Invoice Details </a></li>
         </ul>
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
        
        
        
        <!-- <li class="">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">
            <i class="fa fa-database"></i> <span>Client Login</span>
           
          </a>
         
        </li>
         -->
        
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
