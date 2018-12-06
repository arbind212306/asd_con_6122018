<!--Content Wrapper. Contains page content -->
  <?php  //pr($ConsoleClientService);die;  ?>      
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
       <h1 class="box-title heading-title " >Edit Contract</h1>
    </section>
    <!-- Main content -->
    <section class="content" style="padding-top:10px;">
        <!-- SELECT2 EXAMPLE -->
         <?= $this->Form->create('',array('enctype'=>'multipart/form-data')); ?>
        
        <div class="box box-primary">
            <!-- /.box-header -->
            <?php foreach($result_clientmaster as $result_clientmasters) { ?>
                        
                    <?php }    foreach($ConsoleClientService as $ConsoleClientServicess) {
                    
                     $service_ids=$ConsoleClientServicess->service['id']; }
                    
                     
                        ?>
                      
            
            <div class="box-body">
                <div class="row">
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Business Unit </label>
                            <select class="form-control select2" name="bu_id" onchange="getClientInfo(this);" style="width: 100%;">
                                <option selected="selected" value="<?= $result_clientmasters->business_unit['id']; ?>"> <?= $result_clientmasters->business_unit['bu_name']; ?> </option>
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
                                <option selected="selected"  value="<?= $result_clientmasters->industry['id']; ?>"> <?= $result_clientmasters->industry['industry_name']; ?> </option>

                            </select>


                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Client Name</label>
                            <input type="text" class="form-control" id="client_name"  style="height: 30px;" name="client_name" readonly="readonly" value="<?php foreach($recordclientmaster as $recordclientmasters) {echo $recordclientmasters['client_name']; }?>">

                            

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Client Id  <span id="client_id"></span></label>
                            <input type="text" class="form-control" id="clientid"  style="height: 30px;" name="clientid" readonly="readonly" value="<?php
                            if(!empty($ConsoleClientServicess))
                            {

                             echo $ConsoleClientServicess['client_id'];
                            }
                            ?>"
                        </div>
                        <!-- /.form-group -->
                    </div>
                    
                    
                    
                </div>
                <div class="col-md-3">  
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="form-control select2" multiple="multiple" id="service" 
                                           onchange="getServiceRow();" name="service" style="width: 100%;">
                                         <?php  foreach ($serviceResult as $service){
                                          ?>
                                     <option value="<?php echo $service['id']; ?>"
                                       <?php if($service['id'] == $ConsoleClientServicess['service_id']){echo 'selected=selected';} ?>><?= $service['product_name'] ?> </option>
                                <?php  }
                                    
                                ?>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Company Code</label>
                                    <input class="form-control" id="companyCode" type="text" value="<?php foreach($recordclientmaster as $recordclientmasters) {echo $recordclientmasters['client_code']; }?>" name="company_code" readonly="readonly">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Mode of Payment</label>
                                    <select class="form-control select2" name="mode_of_payment">
                                        <option value="<?= $result_clientmasters->console_mode_of_payment['id']; ?>"><?= $result_clientmasters->console_mode_of_payment['name']; ?></option>
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
                                        <option value="<?= $result_clientmasters->console_billing_frequency['id']; ?>" selected="selected"><?= $result_clientmasters->console_billing_frequency['name']; ?></option>
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
                                    <input class="form-control" id="create_date" type="text" name="contract_create_date" value="<?= $result_clientmasters['contract_create_date']; ?>" onchange="current_date(this);">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Expiry date</label>
                                    <input class="form-control" id="expiry_date" type="text" value="<?= $result_clientmasters['contract_expiry_date']; ?>" name="contract_expiry_date">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Termination fee clause</label>
                                    <textarea class="form-control" rows="3" name="temination_fee_clause" value="<?= $result_clientmasters['temination_fee_clause']; ?>"  style="width: 246px;height: 36px;"><?= $result_clientmasters['temination_fee_clause']; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Escalation Terms</label>
                                    <textarea class="form-control" rows="3"  name="escalation_terms"  value="<?= $result_clientmasters->escalation_terms ; ?>" style="width: 246px;height: 36px;"><?= $result_clientmasters->escalation_terms ; ?></textarea>
                                </div>
                                <!-- /.form-group -->
                            </div>
                <!-- /.row -->
            </div>
             <a href="javascript:void(0);" id="anc_add_more">Add More File</a>
                        <div class="form-group">
                <label>Upload Contract</label>

                <input type="file" name="image[]">
            </div>
            <!-- /.box-body -->
            <div id='spn_inputs'>
            <!-- /.box-body -->
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12">
                              <?php foreach($client_con_images as $client_con_imagess) { ?>
                              <div class="col-md-2">
                         <?php $image = $client_con_imagess['image'];   
                    echo $this->Html->image("../webroot/upload/$image", array('alt' => '', 'style' => 'width:30px')); 

                     ?>
                     </div>
                              <?php } ?>
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
                                    <?php 
									
									
									foreach($ConsoleClientService as $ConsoleClientServices) { 
                                     $service_type=$ConsoleClientServices['service_type'];
                                           $service_id=$ConsoleClientServices->service['id'];
                                           $console_payment=$ConsoleClientServices->console_payment['id'];
                                           $console_no_of_user=$ConsoleClientServices->console_no_of_user['id'];
                                           $console_invoice_frequeny=$ConsoleClientServices->console_invoice_frequeny['id'];
                                           
                                           ?>
            
                              <tr id="hideServiectTr" >
                                <td>
                                    <select class="form-control select2" id="get_service"  name="service_list[]">
                                                                      <?php 
                                foreach($serviceResult as $serviceResults ){ 
                                                                              ?>
                                        <option value="<?= $serviceResults['id'];  ?>" <?php if(!empty($service_id) && $serviceResults['id'] == $service_id) echo 'selected=selected' ?> ><?= $serviceResults['product_name'] ?></option>
                                         <?php } ?>
                                        </select>
                                      </td>
                                <td><input type="checkbox"  onclick="return deletservices(<?= $ConsoleClientServices['id'];  ?>);"  value="<?= $ConsoleClientServices['id'];  ?>" checked></td>
                                <td>
                                    <select class="form-control select2" name="service_type[]">
                                       <?php   if(!empty($service_type)){ ?>
                                        <option value="<?= $ConsoleClientServices['service_type'];  ?>"> <?= $ConsoleClientServices['service_type'];  ?></option>
                                      <?php  } ?>
                                      <option value="Trial"> Trial </option>';                    
                                <option value="Paid"> Paid </option>';  
                                    </select> 
                                </td>
                                 <td>
                                     <input type="text" class="form-control " name="sale_price[]" value="<?= $ConsoleClientServices['sale_price']; ?>">
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="payment_option[]">
                                         <?php foreach($payment as $payments ){ ?>
                                       <option value="<?= $payments['id'];  ?>" <?php if(!empty($console_payment) && $payments['id'] ==  $console_payment  ) echo 'selected=selected' ; ?>><?= $payments['payment_mode'];  ?></option>
                                       <?php } ?>
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="invoice_frequency[]">
                                     
                                       <?php foreach($console_invoice_frequenies as $console_invoice_frequeniess ){ ?>
                                    <option value="<?= $console_invoice_frequeniess['id'];  ?>"<?php  if(!empty($console_invoice_frequeny) && $console_invoice_frequeniess['id'] == $console_invoice_frequeny) echo 'Selected=Selected'  ?> > <?= $console_invoice_frequeniess['invoice_frequency_name'];  ?></option>
                                       <?php } ?> 
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="invoice_cycle[]">
                                                                
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="no_of_users[]">
                                     <?php foreach($console_no_of_userss as $console_no_of_usersss ){ ?>
                                     <option value="<?= $console_no_of_usersss['id'];  ?>"<?php  if(!empty($console_no_of_user) && $console_no_of_usersss['id'] == $console_no_of_user) echo 'Selected=Selected'  ?> > <?= $console_no_of_usersss['name'];  ?></option>
                                       <?php } ?>
                                    </select>
                                 </td>
                                 <td> 

                                     <input class="form-control" id="expiry_date" type="date" name="effectiveDate[]" value="<?=  date('d-m-Y',strtotime($ConsoleClientServices['effectiveDate']));  ?>">

                                 </td>
                                 <td>

                                    <input class="form-control" id="expiry_date" type="date" name="expiryDate[]" value="<?= $ConsoleClientServices['expiryDate']; ?>">

                                 </td>
                                 <td>

                                    <input class="form-control" id="expiry_date" type="date" name="billDate[]" value="<?= $ConsoleClientServices['billDate']; ?>"> 

                                 </td>
                                 <td><input class="form-control" value="1" type="hidden" name="status[]"> </td>
                              </tr>
                              
                                <?php } ?>
                              
                            </tbody>
                            </table>
                        </div>
                      </div>
                  </div>
                   <div class="col-md-12">
                  <br>
                  <input class="btn btn-primary" style="margin-left: 980px;width: 80px" value="Update" type="submit" >
         
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
<?php $service_delete= $this->Url->build(['controller'=>'Users','action'=>'servicedelete']); ?>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<?= $this->Html->script(['service_manager']); ?>

<script>
////code for activation date picker    
//$(".date").datepicker();
////code for deactivation date picker
//$(".date").datepicker();
//code for create date date picker    
$("#create_date").datepicker();
//code for expiry date picker
$("#expiry_date").datepicker();
$('.select2').select2();

</script>
<script>
        /* JS for Uploader */
        $(function() {
            /* Append More Input Files */
            var counter = 1;
            $('#anc_add_more').click(function() {
                $('#spn_inputs').append(' <input type="file" id="upload_attachment_'+counter+'" name="image[]"><input type ="button" value="Remove" style="margin-left: 59%;margin-top: -48px;" class="btn btn-primary" id="upload_remove_'+counter+'" onclick="return removetag(' + counter + ');" >');
                counter ++;

            });



        });

function removetag(counter)
{
 $('#upload_attachment_' + counter).remove();  
 $('#upload_remove_' + counter).remove(); 
}

function deletservices(id){
	//alert (id);
	
	$.ajax({
	type:'POST',
	url:'<?= $service_delete;?>',
	data:{'id':id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
	success:function(data)
	{
	alert ('Services is successfully deleted');
	
	}
	
	
	});
	
	
}






 </script>
<!-- <style type="text/css">
    .select2-results ul li {
    background-color: red;
}
}
</style>
