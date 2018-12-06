<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Service Manager
            <!--<small>Preview</small>-->
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li><a href="#">Forms</a></li>-->
            <li class="active">Service Manager</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
         <?= $this->Form->create(''); ?>
        
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Service</h3>

                <!--          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                          </div>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                   
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Business Unit </label>
                            <select class="form-control select2" name="bu_id" onchange="getClientInfo(this);" style="width: 100%;">
                                <option selected="selected">- Select -</option>
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
                                <option selected="selected">- Select -</option>

                            </select>


                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Client Name</label>
                            <select class="form-control select2" name="client_id" name="client_name" id="client_name"   style="width: 100%;">
                                <option selected="selected">- Select -</option>

                            </select>

                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3">  
                        <!-- /.form-group -->
                        <div class="form-group">
                            <button type="button" id="service-go-btn" class="btn btn-primary">Go</button>
                        </div>
                        <!-- /.form-group -->
                    </div>  
                   
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- div for adding more product ends here -->
        <div class="row" id="row_1">
            <div class="col-md-12">

                <div class="box box-primary" id="product_details" style="">
                    <!--            <div class="box-header">
                                  <h3 class="box-title">Input masks</h3>
                                </div>-->
                    <div class="box-body">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-3">  
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="form-control select2" multiple="multiple" id="service" 
                                           onchange="getServiceRow();" name="service" style="width: 100%;">
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
                                    <input class="form-control" id="companyCode" type="text" name="company_code">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            
                            
                            
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Mode of Payment</label>
                                    <select class="form-control select2" name="mode_of_payment">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div> 
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Billing Frequency</label>
                                    <select class="form-control " name="billing_frequency" style="width: 100%;">
                                        <option value="0" selected="selected">-Select Frequency-</option>
                                        <option value="5"> Monthly </option>
                                        <option value="12"> Bi Weekly </option><option value="8"> Per Quarter </option>
                                        <option value="9"> Half Yearly  </option>
                                        <option value="10"> Annual </option>
                                        <option value="11"> Weekly </option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                            </div> 
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Create date</label>
                                    <input class="form-control" id="create_date" type="text" name="contract_create_date">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">  
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Expiry date</label>
                                    <input class="form-control" id="expiry_date" type="text" name="contract_expiry_date">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Termination fee clause</label>
                                    <textarea class="form-control" rows="3" name="temination_fee_clause"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Escalation Terms</label>
                                    <textarea class="form-control" rows="3"  name="escalation_terms"></textarea>
                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>    
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (left) -->
        </div>

        <!-- /.col (left) -->
        
        <!-- div starts here for client search -->
       <div class="row">
          <div class="col-md-12">
              <div class="box box-primary" id="product_details" style="">
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
                              <!-- <tr id="hideServiectTr" >

                                <td>

                                    <select class="form-control select2" id="get_service"  name="service_list[]">

                                        <option value="">-Select Service-</option>
                                        <option value="1"> Hris</option>
                                        <option value="2"> Myvoice </option>
                                    </select>
                                </td>
                                <td><input type="checkbox" value="Apply"></td>
                                <td>
                                    <select class="form-control select2" name="service_type[]">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option>
                                        <option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select> 
                                </td>
                                 <td>

                                    <select class="form-control select2" name="sale_price[]">
                                        <option value="">-Select Price-</option>

                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="payment_option[]">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="invoice_frequency[]">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="invoice_cycle[]">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                 </td>
                                 <td>
                                    <select class="form-control select2" name="no_of_users[]">
                                        <option value="">-Select Payment Mode-</option>
                                        <option value="3"> EFT </option>
                                        <option value="4"> Bill Pay </option>
                                        <option value="7"> Other </option><option value="5"> Cheque </option>
                                        <option value="6"> Credit Card </option>  
                                    </select>
                                 </td>
                                 <td> 

                                    <input class="form-control" id="expiry_date" type="date" name="effectiveDate[]">

                                 </td>
                                 <td>

                                    <input class="form-control" id="expiry_date" type="date" name="expiryDate[]">

                                 </td>
                                 <td>

                                    <input class="form-control" id="expiry_date" type="date" name="billDate[]"> 

                                 </td>
                                 <td><input class="form-control" value="1" type="hidden" name="status[]"> </td>
                              </tr> -->
                              
                            </tbody>
                            </table>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- div ends here for client search -->
      
      <!--div start for submit button -->
       <div class="row">
          <div class="col-md-12 ">
              <div class="box box-primary" id="product_details" style="">
      <input class="btn btn-success" value="Add" type="submit" >
         </div>
          </div>
      </div>
      <!-- div ends here for submit button -->
      
      
       <?= $this->Form->end(); ?>
      
    </section>
    <!-- /.content -->
</div>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?= $this->Html->script(['service_manager','select2.full.min']); ?>
<?= $this->Html->css(['select2.min.css']); ?>
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