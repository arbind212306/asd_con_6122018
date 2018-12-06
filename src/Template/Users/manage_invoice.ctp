<?php/* pr($client_services_details1); die();*/?>
  <div class="content-wrapper">
    <section class="content-header">
     <h1 class="box-title heading-title" >Generate Dummy Invoice</h1>
    </section>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="box box-primary">
      <div class="row">
          <div class="box-header with-border">   
            <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
     
          <?= $this->Form->create(''); ?>
                <div class="col-md-2">  
                <div class="form-group">
                <label>Business Unit</label>
                <select class="form-control select2" name="bu_id" onchange="getClientInfo(this);" style="width: 100%;" required="required">
                    <option value=""> Select </option>
                    <option value="all"> All </option>
                    <?php foreach($result as $results)
                    {
                      
                    echo '<option value="'.$results['id'].'" >'.$results['bu_name'].'</option>'; 
                          
                    }
                     ?>
                </select>
                </div> 
                </div>

                <div class="col-md-2">  
                <div class="form-group">
                <label>Industry</label>
                <select class="form-control select2" name="industry_id" id="industry_name" onchange="clientname(this);"  style="width: 100%;">
                    <option value=""> Select </option>

                </select>
                </div> 
                </div>

                <div class="col-md-2">  
                <div class="form-group">
                <label>Client</label>
                <select class="form-control select2" name="client_id" name="client_name" id="client_name" onchange="getclientid(this);" style="width: 100%;">
                    <option value="" "> Select </option>

                </select>
                </div> 
                </div>

                <div class="col-md-2">  
                <div class="form-group">
                <label>Status</label>
                <select class="form-control select2" name="status" id="status" style="width: 100%;">
                   
                    <option value=""> Select </option>
                    <option value="all"> All </option>
                    <option value="0"> New </option>
                    <option value="1"> Approved </option>
                    <option value="2"> Rejected </option>
                </select>
                </div> 
                </div>
                <div class="col-md-2 ">  
                <div class="form-group">
                      <button type="button" id="apply_filter" style="margin-top: 23px;"  class="btn btn-primary" name="apply_filter">Go</button>
                    </div>
                </div>
      
      <!--  <div class="col-md-1 col-sm-12 col-xs-12">
                  <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'add_contract']) ?>" class="btn btn-primary" style="margin-bottom: -135px;margin-left: 80px;">
              <i class="fa fa-plus fa-fw"></i>Add</a>
              </div> -->
            </br></br></br></br>

<div class="col-xs-12 margin-top-lg " id="dummy_invoice">
                <?php echo $this->Form->create(null, ['url' => false]); ?>
                   <div class="col-md-12 " >
            <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          
            <div class="form-group">
                  <label for="status">Select Frequency</label>
              <div class="form-group">
                
                  <select class="form-control" name="billing_frequency" id="billing_frequency">
                     
                   <?php
                    foreach ($result_billing_frequency as $billing_frequency) {
                       echo '<option value="'.$billing_frequency['id'].'">'.$billing_frequency['name'].'</option>';
                    }

                   ?>
                   
                  </select>
                    
                </div>
                          <div class="form-group">
                  <label for="status">Select month/Period: </label>
                  <input type="date" id="dateID" name="biling_date" />
                </div>
                           <div class="form-group">
                  <label for="description">Invoice Note</label>
                  <textarea   name="invoice_note" class="form-control" id="invoice_note" placeholder=""></textarea>
                </div>
        
        </div>

        <div class="col-md-11">
        <div class="box-footer text-center">
                <button type="submit" name="submit" class="btn btn-primary" >Generate</button>
              </div>
            </div>
         
          </div>
         
            <?php $this->Form->end(); ?>

        </div>
       

            </div>
          </div>
    

     <!-- Main content -->
    <!-- <section class="content">
            <div class="box box-primary">
      <div class="row">
          <div class="box-header with-border">
              <h3 class="box-title" style="margin-left: 10px;">View clients</h3>
            </div>
          </div>
        </section> -->
        
    <!-- /.content -->

  <!-- /.content-wrapper -->
    <!-- /.content -->
  </section></div>
  <!-- /.content-wrapper -->

  <?php echo $this->Html->script(['jquery.min','service_manager']); ?>
<!--   <script type="text/javascript" src="~/Scripts/jquery.js"></script> -->
 
<script>
    $(document).ready(function () {


  var dtToday = new Date();
  var month1 = dtToday.getMonth() + 1;  
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();
 var month = month1-2;
  if(month < 10)
      month = '0' + month.toString();
  if(day < 10)
      day = '0' + day.toString();

  var minDate = year + '-' + month + '-' + day;
  $('#dateID').attr('min', minDate);
  
     $('#dummy_invoice').hide();

     $('#apply_filter').click(function(){
        $('#dummy_invoice').show();
     })

  
    

});
</script>