<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsoleModeOfPayment $consoleModeOfPayment
 */
?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessUnit $businessUnit
 */
?>


<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header" >
       <h1 class="box-title heading-title ">Edit Console Mode Of Payment</h1>
    </section>
<!-- Left side column. contains the logo and sidebar -->

 

    <section class="content"  style="padding-top:10px;">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                  
      <div class="row">
          
          
      <?= $this->Form->create($consoleModeOfPayment) ?>
        <!-- left column -->
       <div class="col-md-12 " >
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
           <div class="form-group">
                  <label for="name"> Name</label>
		
                  <input type="text" id="name"  name="name" class="form-control"  placeholder="" value="<?= $consoleModeOfPayment->name ; ?>">
                <span class="error_label" id="check_name"></span>
                          </div>
						  
						  
            
            <div class="form-group">
                  <label for="status">Status</label>
                <div class="form-group">
               <?php //echo $this->Form->control('status',(['name'=>'status','class'=>'form-control','id'=>'status']));?>
                  <select class="form-control" name="status" id="status">
                     <?php $status=$consoleModeOfPayment->status ;       
                    ?>
                     <?php  if($status == '1') { ?>
                    <option value="1">Active</option>
                     <option value="0">Inactive</option>
                     <?php } else {?>
                    <option value="0">Inactive</option>
                     <option value="1">Active</option>
                   <?php } ?>
                   
                  </select>
                    <span class="error_label" id="check_status"></span>
                </div>
                </div>
		
        </div>
        <!--/.col (left) -->
       
        <div class="col-md-8">
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
    $('#check_name').text('Please enter Console Mode Of Payment  ');
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


