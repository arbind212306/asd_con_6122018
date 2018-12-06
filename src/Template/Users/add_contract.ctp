<!--Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <section class="content-header">
     <h1 class="box-title heading-title" >Add Contract</h1>
    </section>
    <!-- Main content -->
    <section class="content">
         <div class="<?php echo @$class; ?>">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><?php echo @$close; ?></a>
                   <i class="<?php echo @$iclass; ?>"></i><?php echo @$sucessful; ?>.
                </div>
        <!-- SELECT2 EXAMPLE -->
         <?= $this->Form->create('',array('enctype'=>'multipart/form-data')); ?>
        
        <div class="box box-primary">
             <div class="box-body">
                <div class="row">
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Business Unit </label>
                            <select class="form-control select2" name="bu_id" onchange="getClientInfo(this);" style="width: 100%;">
                                <option selected="selected"> Select </option>
                                <?php
                                if (!empty($result)):
                                    foreach ($result as $client):
                                        ?>
                                        <option value="<?= $client['id'] ?>"><?= $client['bu_name'] ?></option>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Industry Name</label>

                            <select class="form-control select2" name="industry_id" id="industry_name" onchange="clientname(this);"  style="width: 100%;">
                                <option selected="selected"> Select </option>

                            </select>


                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Client Name</label>
                            <select class="form-control select2" name="client_id" name="client_name" id="client_name" onchange="getclientid(this);" style="width: 100%;">
                                <option selected="selected"> Select </option>

                            </select>

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Client Id  <span id="client_id"></span></label>
                            <input type="text" class="form-control" id="clientid"  style="height: 30px;" name="clientid" readonly="readonly">

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="form-control select2" multiple="multiple" id="service" 
                                           onchange="getServiceRow();" name="service" style="width: 100%;">
                                           <option value="all">All</option>
                                <?php
                                    if (!empty($serviceResult)):
                                        foreach ($serviceResult as $service):
                                ?>
                                   <option value="<?= $service['id'] ?>"> <?= $service['product_name'] ?> </option>
                                <?php endforeach;
                                    endif; ?>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>

                    <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Company Code</label>
                                    <input class="form-control" id="companyCode" type="text" name="company_code" readonly="readonly">
                                </div>
                                <!-- /.form-group -->
                            </div>
                    <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Mode of Payment</label>
                                    <select class="form-control select2" name="mode_of_payment">
                                        <option value="">Select</option>
                                        <?php foreach($console_mode_of_payment as $console_mode_of_payments ){ ?>
                                        <option value="<?= $console_mode_of_payments['id']; ?>"> <?= $console_mode_of_payments['name']; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>         
                        <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Billing Frequency</label>
                                    <select class="form-control " name="billing_frequency" style="width: 100%;">
                                        <option value="0" selected="selected">Select</option>
                                         <?php foreach($console_billing_frequency as $console_billing_frequencys ){ ?>
                                        <option value="<?= $console_billing_frequencys['id']; ?>"> <?= $console_billing_frequencys['name']; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Create date</label>
                                    <input type ="date"class="form-control" id="create_date" type="text" name="contract_create_date" ">
                                </div>
                                <!-- /.form-group -->
                            </div>        
                    <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Expiry date</label>
                                    <input type="date" class="form-control" id="expiry_date" type="text" name="contract_expiry_date">
                                </div>
                                <!-- /.form-group -->
                            </div>
                          <div class="col-md-3">
                                <div class="form-group">
                                    <label>Termination fee clause</label>
                                    <textarea class="form-control" rows="3" name="temination_fee_clause" style="width: 246px;height: 36px;"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Escalation Terms</label>
                                    <textarea class="form-control" rows="3"  name="escalation_terms" style="width: 246px;height: 36px;"></textarea>
                                </div>
                                <!-- /.form-group -->
                            </div>
                              
                </div>
                <!-- /.row -->
                <!-- /.row -->
                        <a href="javascript:void(0);" id="anc_add_more">Add More File</a>
                        <div class="form-group">
                <label>Upload Contract</label>

                <input type="file" name="image[]">
            </div>
            <!-- /.box-body -->
            <div id='spn_inputs'>
            <!-- <div class="input-append">
              <div class="uneditable-input span3" ><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div>
          </div> -->
      </div>
        </div>
        <!-- /.box -->

        <!-- div for adding more product ends here -->
       

        <!-- /.col (left) -->
        
        <!-- div starts here for client search -->
       <div class="row">
          <div class="col-md-12">
              <div class="box " id="product_details" style="">
                  <div class="box-body ">
                      <div class="row">
                       <div class="box-body con-fixed-div">
                            <table class="table table-bordered scroll"  width="100%" id="service-table">
                              <tbody>
                                <tr>
                                    <th style="">Service Name</th>
                                    <th>Apply</th>
                                    <th>Service Type</th>
                                    <th style="">Sale Price</th>
                                    <th style="">Payment Option</th>
                                    <th>Invoice Frequency</th>
                                    <th>Invoice Cycle</th>
                                    <th style="">No of users</th>
                                    <th style="">Effective Date</th>
                                    <th>Expiry Date</th>
                                    <th>Bill Start Date</th>
                                    <th style="">Action</th>
                              </tr>
</tbody>
                              <!--<td id="appendServiceTr" ></td> -->
                              <tbody id="appendServiceTr">
                              
                            </tbody>
                            </table>
                        </div>
                      </div>
                  </div>
                  
                  <div class="col-md-12">
                  <br>
     <input class="btn btn-primary" style="margin-left: 980px;width: 80px" value="Add"  type="submit" >
         
          </div>
              </div>
          </div>
      </div>
      <!-- div ends here for client search -->
      
                    
      
      <!--div start for submit button -->
       
      <!-- div ends here for submit button -->
      
      
       <?= $this->Form->end(); ?>
      
    </section>
    <!-- /.content -->
</div>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->Html->script(['service_manager','select2.full.min']); ?>


<script>
////code for activation date picker    
//$(".date").datepicker();
////code for deactivation date picker
//$(".date").datepicker();
//code for create date date picker    
// $("#create_date").datepicker();
//code for expiry date picker
// $("#expiry_date").datepicker();
$('.select2').select2();

</script>
<script>
        /* JS for Uploader */
        $(function() {
            /* Append More Input Files */
            var counter = 1;
            $('#anc_add_more').click(function() {
                $('#spn_inputs').append('<div class="file_row_'+counter+'"> <input type="file" id="upload_attachment_'+counter+'" name="image[]"><input type ="button" value="Remove" style="margin-left: 20%;margin-top: -48px;" class="btn btn-primary" id="upload_remove_'+counter+'" onclick="return removetag(' + counter + ');" ></div>');
                counter ++;

            });



        });

function removetag(counter)
{
 $('#upload_attachment_' + counter).remove();  
 $('#upload_remove_' + counter).remove(); 
}
 </script>
<!-- <style type="text/css">
    .select2-results ul li {
    background-color: red;
}
}
</style>
