<?php /*pr($client_list); die();*/?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	 <section class="content-header">
     <h1 class="box-title heading-title" >View Client</h1>
    </section>
    <section class="content" style="padding-top:10px;">
    
      
      <div class="box box-primary">
      <div class="row">
          <div class="box-header with-border">
              
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                  <a href="<?= $this->Url->build(['controller' => 'admin', 'action' => 'clientAdd']) ?>" class="btn btn-primary" style="margin-left: -7px;">
              <i class="fa fa-plus fa-fw"></i>Add</a>
              </div>
              <div class="col-xs-12 margin-top-lg ">
                <?php echo $this->Form->create(null, ['url' => false]); ?>
                
            <table class="table table-striped" id="report_table" >
                <thead>
                <tr>
                    <th>Client Type</th>
                    <th>Client Name</th>
                    <th>Mobile No</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
            <?php foreach ($client_list as $client_lists) {?>
              <tr>
                    <td><?php echo $client_lists['client_type']?></td>
                    <td><?php echo $client_lists['client_name']?></td>
                    <td><?php echo $client_lists['mobile']?></td>
                    <td><?php $image = $client_lists['logo'];   
                    echo $this->Html->image("../webroot/upload/$image", array('alt' => '', 'style' => 'width:70px')); 

                     ?></td>
                    <td>
                        
                         <!-- <button type="button" class="btn btn-primary btn-sm" data-sidebar-button onclick="return editclient('<?php echo $client_lists['client_id'];?>')"><i class="fa fa-pencil"></i> Edit</button> -->
                          <i class="fa fa-edit" title="Edit client details"  data-toggle="modal" data-target="#edituser"  onclick="return editclient('<?php echo $client_lists['client_id'];?>')"></i>
                         <i class="fa fa-eye" data-toggle="modal" data-target="#viewuser" title="View client details"  onclick="return viewclient('<?php echo $client_lists['client_id'];?>')"></i>
                          <?php if($client_lists['status'] == 1){?>
                          <i class="fa fa-toggle-on" title="Disable User"  onclick="return  disableuser('<?php echo $client_lists['client_id']?>');"></i>
                        <?php } else{?>
                        <i class="fa fa-toggle-off" title="Enable User"  onclick="return enableuser('<?php echo $client_lists['client_id']?>');"></i>
                        <?php } ?>
                         <i class="fa fa-trash-o" data-toggle="modal" title="Delete client"onclick="return deleteclient('<?php echo  $client_lists['client_id'];?>')"></i>
                         <!--  <button type="button" class="btn btn-danger btn-sm" data-sidebar-button onclick="return deleteclient('<?php echo  $client_lists['client_id'];?>')"><i class="fa fa-trash-o"></i> Delete</button>  -->            

                    </td>
                </tr>
           <?php } ?>
                 
   
                </tbody>
            </table>
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

<div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="edituser">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Details</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_name">Client type<span style="color: red">*</span></label>
                            <input id="report_up_name" name="report_up_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_empID">Client name<span style="color: red">*</span></label>
                            <input id="report_up_empID" name="report_up_empID" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_email">Email ID<span style="color: red">*</span></label>
                            <input id="report_up_email" name="report_up_email" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_mobile">Mobile No.</label>
                            <input id="report_up_mobile" name="report_up_mobile" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_role">Website<span style="color: red">*</span></label>
                            <input id="report_up_role" name="report_up_role" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_loc">Work Location</label>
                            <input id="report_up_loc" name="report_up_loc" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_city">City</label>
                            <input id="report_up_city" name="report_up_city" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_position">State<span style="color: red">*</span></label>
                            <input id="report_up_position" name="report_up_position" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                
                            <input type="hidden" id="report_clientid" name="report_clientid" class="form-control" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-default" data-dismiss="modal" id="btnUpdate">Update</button>
                 
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="viewuser" tabindex="-1" role="dialog" aria-labelledby="viewuser">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Client Detail</h4>
            </div>
     
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_bu">Client Type: </label>
                           <span id="report_type"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_clientcode">Client code:</label>
                            <span id="report_clientcode"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_name">Client Name: </label>
                           <span id="report_name"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_email">Email ID:</label>
                            <span id="report_email"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                         <div class="form-group">
                            <label for="report_mobile">Mobile</label>
                            <span id="report_mobile"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_role">Website:</label>
                            <span id="report_role"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_loc">Address:</label>
                            <span id="report_loc"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_city">City:</label>
                            <span id="report_city"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_position">State:</label>
                            <span id="report_position"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_position">Contact person name:</label>
                            <span id="cpname"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_position">Contact person email:</label>
                            <span id="cpemail"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_position">Contact person mobile:</label>
                            <span id="cpmobile"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



  <?php echo $this->Html->script(['jquery.min']); ?>
<!--   <script type="text/javascript" src="~/Scripts/jquery.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
    $('#report_table').DataTable({
       "aaSorting" : [],
       "columns": [
              {"width": "4%"},
              {"width": "8%"},
              {"width": "5%"},
              {"width": "4%"},
              {"width": "6%"}
          ],
         
    });
});
<?php
 $editclient = $this->Url->build(['controller' => 'Admin','action' => 'editclient']);
 $deleteclient = $this->Url->build(['controller' => 'Admin','action' => 'deleteclient']);
 $url_updateclientdetails = $this->Url->build(['controller' => 'Admin', 'action' => 'updateclientdetails']);
 $url_enableuser = $this->Url->build(['controller' => 'Admin', 'action' => 'enableuser']);
 $url_disableuser = $this->Url->build(['controller' => 'Admin', 'action' => 'disableuser']);

 ?>

function editclient(client_id)
{
  $.ajax({
        type:"POST",
        url: "<?= $editclient; ?>",
        data:{'client_id':client_id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
           // alert(data); //value right now is in this variable ... i want to send this variable value to the controller
          data = JSON.parse(data);
           $('#report_up_name').val(data[0].client_type);
           $('#report_up_empID').val(data[0].client_name);
           $('#report_up_email').val(data[0].email_id);
           $('#report_up_mobile').val(data[0].mobile);
           $('#report_up_role').val(data[0].website);
           $('#report_up_loc').val(data[0].address1);
           $('#report_up_city').val(data[0].city);
           $('#report_up_position').val(data[0].state);
           $('#report_clientcode').val(data[0].country);
           $('#report_clientid').val(data[0].client_id);
          
        },

        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }


    });
}

function viewclient(client_id)
{
  $.ajax({
        type:"POST",
        url: "<?= $editclient; ?>",
        data:{'client_id':client_id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
           // alert(data); //value right now is in this variable ... i want to send this variable value to the controller
          data = JSON.parse(data);
           $('#report_type').html(data[0].client_type);
           $('#report_clientcode').html(data[0].client_code);
           $('#report_name').html(data[0].client_name);
           $('#report_email').html(data[0].email_id);
           $('#report_mobile').html(data[0].mobile);
           $('#report_role').html(data[0].website);
           $('#report_loc').html(data[0].address1);
           $('#report_city').html(data[0].city);
           $('#report_position').html(data[0].state);
           $('#report_bu').html(data[0].country);
           $('#cpname').html(data[0].cp_name);
           $('#cpemail').html(data[0].cp_email_id);
           $('#cpmobile').html(data[0].cp_mobile);
        },

        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }


    });
}

function deleteclient(client_id)
{
  $.ajax({
        type:"POST",
        url: "<?= $deleteclient; ?>",
        data: {'client_id':client_id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 

    success: function(data)
    {
      alert("Client deleted sucessfully");
      location.reload();
    },
    error : function(){
      alert("Value not reaching to controller");
    }

  })
}

function enableuser(id)
    {
        var confirmed = 1;
         $.ajax({
        type:"POST",
        url: "<?= $url_enableuser; ?>",
        data:{'id':id,'confirmed':confirmed},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
           //alert(data); //value right now is in this variable ... i want to send this variable value to the controller
           alert("User active sucessfully");
           location.reload();
        },
        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }
    });

    }

    function disableuser(id)
    {
         var confirmed = 0;
         $.ajax({
        type:"POST",
        url: "<?= $url_disableuser; ?>",
        data:{'id':id,'confirmed':confirmed},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
           //alert(data); //value right now is in this variable ... i want to send this variable value to the controller
           alert("User deactive sucessfully");
           location.reload();
        },
        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }
    });

    }


$('#btnUpdate').click(function(event) {
          alert("User details updated");
           var clienttype = $('#report_up_name').val();
           var clientname =  $('#report_up_empID').val();
           var clientemail = $('#report_up_email').val();
           var clientaddress = $('#report_up_loc').val();
           var clientcity = $('#report_up_city').val();
           var clientid = $('#report_clientid').val();
  

         $.ajax({
        type:"POST",
        url: "<?= $url_updateclientdetails; ?>",
        data: {
             clienttype : clienttype,
             clientname : clientname,
             clientemail : clientemail,
           
            clientaddress : clientaddress,
            clientcity : clientcity,
            clientid : clientid
        },
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
       success : function(data) {
          alert("Details updated sucessfully");
           location.reload();
        
         // alert(data);
        },
        error : function() {
           //alert("Value NOT reaching to controller ");
           
        } 
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

