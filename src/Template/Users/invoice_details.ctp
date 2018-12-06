
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <section class="content-header" >
       <h1 class="box-title heading-title ">Invoice Details</h1>
    </section>
<!-- Left side column. contains the logo and sidebar -->

 

     <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i>Stratemis.
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Stratemis.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (804) 123-5432<br>
            Email: info@Stratemis.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>Company</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            Phone: (555) 539-1037<br>
            Email: john.doe@Company.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
          <b>Client ID:</b> 4F3S8J<br>
          <b>Payment Due:</b> 2/22/2014<br>
          <b>Account:</b> 968
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped" id="report_table" >
		    <thead><tr>
		      <td>Payment Terms</td>
                    <td>Customer ID</td>
                    <td>P.O. No</td>
					<td>Invoice Date</td>
					</tr>
					<tr>
		      <td><select class="form-control" name="status" id="status">
                     
               <option value="" selected="selected">--select--</option>
                                        <option value="3" > EFT </option>
                                        <option value="4" selected> Bill Pay </option>
                                        <option value="5" > Cheque </option>
                                        <option value="6" > Credit Card </option>
                                        <option value="7" > Other </option>
                   
                  </select></td>
                    <td>IND244</td>
                    <td><input class="form-control" name="status" type="text"></td>
					<td>2018-03-01</td>
					</tr>
					
					
					
					
					
		   		   </thead>
               
                 <tr>
                   <th>No.</th>
                    <th> Description</th>
                
                    <th>No Of User</th>
                    <th>Sale Price</th>
                </tr>
               <tr><td></td><td><b>Company Name </b><td></tr>
                <tbody>
                    
                          <tr>
                    <td>1</td>
                    <td>wipro</td>
                    <td>6985741452</td>
                    <td><input type="text" value="333" readonly></td>
                  
                </tr>
                         <tr><td></td><td><b>Miscellaneous Fee</b><td></tr>  
                        
                             <tr>
                    <td></td>
                    <td><select class="form-control" name="status" id="status">
                     
                     <option value="" selected="selected">Select Miscellaneous Fee</option>
                                        <option value="1" > Double Billing Month </option>
                                        <option value="2" > Start up Fee </option>
                                        <option value="3" > Termination Fees </option>
                                        <option value="4" > Penalties </option>
                                        <option value="5" > Late Fees </option>
                                        <option value="6" > UPS Charges </option>
                                        <option value="7" > Direct Supplies </option>
                                        <option value="8" > Storage Facility </option>
                   
                  </select><br>
                    <input type="text" class="form-control"  placeholder="note" >
                    </td>
                    <td></td>
                    <td><input type="text" class="form-control" value="333" readonly></td>
                  
                </tr>
   
                </tbody>
            </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
       

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr>
              
              <tr>
                <th>Total:</th>
                <td>$265.24</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
           <div class="col-xs-12">
          <div class="col-xs-2"></div>
           <div class="col-xs-7">
          <textarea  class="form-control"  placeholder="Note" ></textarea>
          <br>
           </div>
          </div>
        <div class="col-xs-12 text-center">
          <button type="button" class="btn btn-primary " style="margin-right: 5px;">
            Cancel
          </button>
          <button type="button" class="btn btn-success "><i class="fa fa-credit-card"></i> Save
          </button>
        
        </div>
      </div>
    </section></div>
  <!-- /.content-wrapper -->

  <?php echo $this->Html->script(['jquery.min']); ?>
<!--   <script type="text/javascript" src="~/Scripts/jquery.js"></script> -->
  
<script>
    $(document).ready(function () {
    $('#report_table').DataTable({
       "aaSorting" : [],
       "columns": [
              {"width": "4%"},
              {"width": "8%"},
              {"width": "4%"},
              {"width": "6%"}
          ],
         
    });
});


</script>
<style>
    #report_table {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
    }

    #report_table td, #report_table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #report_table tr:nth-child(even){background-color: #f2f2f2;}

    #report_table tr:hover {background-color: #ddd;}

    #report_table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3c8dbc;
        color: white;
    }
    .dataTables_filter{
      margin-top: 14px;
    }
    .dataTables_length{
      margin-top: 14px;
    }
</style>


