<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessUnit $businessUnit
 */
?>


<!-- header section ends here -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	
	  <section class="content-header">
       <h1 class="box-title heading-title " >Edit Business Unit</h1>
    </section>
    
<!-- Left side column. contains the logo and sidebar -->

 

    <section class="content" style="padding-top:10px;">
            <div class="box box-primary">
             <!-- <form action="" name="myForm"  method="post" enctype = "multipart/form-data" onsubmit="return(validate());"> -->
                   
      <div class="row">
          <?php $flash_message = $this->Flash->render() ?>
    <?php if (!empty(@$flash_message)) { ?>
    <div class="col-md-10 col-sm-12 col-xs-12">
    <div class="alert alert-success alert-dismissible" style="text-align:center;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Business Unit has been  successfully updated.</h4>
               </div>
              </div>
       
       
    <?php } ?>
          
       <?= $this->Form->create($businessUnit) ?>
        <!-- left column -->
       <div class="col-md-12 " >
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          
            
			  <div class="form-group">
                  <label for="bu_name">Bu Name</label>
		
                  <input type="text" id="bu_name"  name="bu_name" class="form-control"  placeholder="" value="<?= $businessUnit->bu_name ; ?>">
                <span class="error_label" id="check_bu_name"></span>
                          </div>
						  
						   <div class="form-group">
                  <label for="description">Bu Desc</label>
                  <textarea   name="bu_desc" class="form-control" id="bu_desc" ><?= $businessUnit->bu_desc ; ?></textarea>
                  <span class="error_label" id="check_bu_desc"></span>
                </div>
            
            <div class="form-group">
                  <label for="status">Status</label>
                <div class="form-group">
               <?php //echo $this->Form->control('status',(['name'=>'status','class'=>'form-control','id'=>'status']));?>
                  <select class="form-control" name="status" id="status">
                     <?php $status=$businessUnit->status ;       
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
if($('#bu_name').val()=='')
  {
    $('#bu_name').css('border','1px solid red');
    $('#check_bu_name').text('Please enter Business Unit Name ');
    $('#check_bu_name').addClass('error_label');
    valid = false;
    $('#bu_name').focus();
  }
 else
  {
    $('#bu_name').css('border','1px solid #cccccc');   
    $('#check_bu_name').text('');
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



