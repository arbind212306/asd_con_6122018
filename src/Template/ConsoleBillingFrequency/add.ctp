
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsoleModeOfPayment $consoleModeOfPayment
 */
?>

<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header" >
       <h1 class="box-title heading-title ">Add Console Billing Frequency</h1>
    </section>
<!-- Left side column. contains the logo and sidebar -->

 

    <section class="content"  style="padding-top:10px;">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                  
      <div class="row">
         
    <!--<div class="col-md-10 col-sm-12 col-xs-12">
    <div class="alert alert-success alert-dismissible" style="text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>  Console Mode Of Payment has been  successfully inserted.</h4>
               </div>
              </div>-->
       
       
  
          
        <?= $this->Form->create($consoleBillingFrequency) ?>
        <!-- left column -->
       <div class="col-md-12 " >
            <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          
            
			  <div class="form-group">
                  <label for="name">Name</label>
		
                    <input type="text" id="name"  name="name" class="form-control"  placeholder="">
                <span class="error_label" id="check_name"></span>
                          </div>
						  
						   
            
            <div class="form-group">
                  <label for="status">Status</label>
                <div class="form-group">
                
                  <select class="form-control" name="status" id="status">
                     
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                   
                  </select>
                    <span class="error_label" id="check_status"></span>
                </div>
                </div>
				
        </div>
        <!--/.col (left) -->
       
        <div class="col-md-11">
        <div class="box-footer text-center">
                <button type="submit" name="submit" id="myForm" class="btn btn-primary" >Submit</button>
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
   
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
<!-- ./wrapper -->
<?= $this->Html->script('jquery.min'); ?>
 <script type="text/javascript">
   $('#myForm').click(function(){
    var valid = true;
if($('#name').val()=='')
  {
    $('#name').css('border','1px solid red');
    $('#check_name').text('Please enter Console Billing Frequency Name ');
    $('#check_name').addClass('error_label');
    valid = false;
    $('#name').focus();
  }
 else
  {
    $('#name').css('border','1px solid #cccccc');   
    $('#check_name').text('');
   }
   
   
   
   
   if($('#status').val()=='')
  {
    $('#status').css('border','1px solid red');
    $('#check_status').text('Please enter status ');
    $('#check_status').addClass('error_label');
    valid = false;
    $('#status').focus();
  }
 else
  {
    $('#status').css('border','1px solid #cccccc');   
    $('#check_status').text('');
   }
  
   if(valid == true)
        {

           //dispalyAccusedListing();
        }
        else
        {
            return false;
        }

    });

   </script>

     <style>
         .error_label {
                   color:red;   
         }
        </style>




























