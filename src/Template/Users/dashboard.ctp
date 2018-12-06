<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Dashboard</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
<?php $url1 = $this->url->build(['action' => 'viewClients' ,  'controller' =>'admin']) ?>
      <div class="row">
          <a href="<?php echo $url1?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          
          
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
                   <div class="info-box-content">
              <span class="info-box-text">Client</span>
              <span class="info-box-number"><?php $len = strlen((string) $client_number); if($len<2) {echo'0'. $client_number;}else{echo $client_number;} ?></span>
            </div>
           
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->
        <?php $url2 = $this->url->build(['action' => 'manageContract' ,  'controller' =>'users']) ?>
          <a href="<?php echo $url2 ?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-file"></i></span>
            
            <div class="info-box-content">
              <span class="info-box-text">Contract</span>
              <span class="info-box-number"><?php $len = strlen((string) $contract_number); if($len<2) {echo'0'. $contract_number;}else{echo $contract_number;} ?></span>
            </div>
          
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Invoice</span>
              <span class="info-box-number">--</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

             <div class="info-box-content">
              <span class="info-box-text">Recent Activity</span>
              <span class="info-box-number">--</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->