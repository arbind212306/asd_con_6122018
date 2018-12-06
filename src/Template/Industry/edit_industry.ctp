<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessUnit $businessUnit
 */
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" >
       <h1 class="box-title heading-title " >Edit Industry</h1>
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
                <h4><i class="icon fa fa-check"></i> Industry has been  successfully updated.</h4>
               </div>
              </div>
       
       
    <?php } ?>
          <?php foreach($businesses as $businesse){
          
          } ?>
       <?= $this->Form->create(@$industry) ?>
        <!-- left column -->
       <div class="col-md-12 " >
            <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-5 col-xs-12 col-sm-5">
          <!-- general form elements -->
      
            <br> 
          
            
			  <div class="form-group">
                  <label for="bu_name">Bu id</label>
		
                  <input type="text" id="bu_id"  name="bu_id" class="form-control"  placeholder="" value="<?= $businesse->business_unit->bu_name ; ?>">
                <span class="error_label" id="check_bu_id"></span>
                          </div>
						  
						   <div class="form-group">
                  <label for="description">Bu Desc</label>
                  <input type="text" id="industry_name"  name="industry_name" class="form-control"  placeholder="" value="<?= $businesse->industry_name ; ?>">
                 
                  <span class="error_label" id="check_industry_name"></span>
                </div>
            
            <div class="form-group">
                  <label for="status">Status</label>
                <div class="form-group">
              
                  <select class="form-control" name="status" id="status">
                    <?php $status=$businesse->status 
                    
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
if($('#industry_name').val()=='')
  {
    $('#industry_name').css('border','1px solid red');
    $('#check_industry_name').text('Please enter industry Name ');
    $('#check_industry_name').addClass('error_label');
    valid = false;
    $('#industry_name').focus();
  }
 else
  {
    $('#industry_name').css('border','1px solid #cccccc');   
    $('#check_industry_name').text('');
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




