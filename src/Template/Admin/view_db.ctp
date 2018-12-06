
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
        
        <small></small>
      </h1>
      
      <div class="box box-primary">
     <div class="row">
          <div class="box-header with-border">
              <div class="col-md-11 col-sm-12 col-xs-12">
              <h2 class="box-title" style="margin-left: 10px;margin-top: 5px;">View Databases</h2>
              </div>
              <div class="col-md-1 col-sm-12 col-xs-12">
                  <a href="<?= $this->Url->build(['controller' => 'admin', 'action' => 'addDb']) ?>" class="btn btn-primary" style="margin-left: -7px;">
              <i class="fa fa-plus fa-fw"></i>Add</a>
              </div>
                     <div class="col-xs-12 margin-top-lg ">
                <?php echo $this->Form->create(null, ['url' => false]); ?>
                
            <table class="table table-striped" id="report_table" >
                <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Service Id</th>
                    <th>DB Name</th>
                    <th>Host Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
            <?php foreach ($db_list as $db_lists) {?>
              <tr>
                    <td><?php echo $db_lists['Clientmasters']['client_name']?></td>
                    <td><?php echo $db_lists['service_id']?></td>
                    <td><?php echo $db_lists['db_name']?></td>
                    <td><?php echo $db_lists['host_name']?></td>
                    <td>
                        
                         <!-- <button type="button" class="btn btn-primary btn-sm" data-sidebar-button onclick="return editclient('<?php echo $client_lists['client_id'];?>')"><i class="fa fa-pencil"></i> Edit</button> -->
                          <i class="fa fa-edit" title="Edit DB details" data-toggle="modal" data-target="#edituser"  onclick="return editclient('<?php echo $db_lists['db_id'];?>')"></i>
                         <i class="fa fa-eye"  title="View DB details" data-toggle="modal" data-target="#viewuser" title="View client details"  onclick="return viewclient('<?php echo $db_lists['db_id'];?>')"></i>
                          <?php if($db_lists['status'] == 1){?>
                          <i class="fa fa-toggle-on" title="Disable DB"  onclick="return  disableuser('<?php echo $db_lists['db_id']?>');"></i>
                        <?php } else{?>
                        <i class="fa fa-toggle-off" title="Enable DB"  onclick="return enableuser('<?php echo $db_lists['db_id']?>');"></i>
                        <?php } ?>
                         <i class="fa fa-trash-o"  title="Delete DB"onclick="return deleteclient('<?php echo  $db_lists['db_id'];?>')"></i>
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
                <h4 class="modal-title" id="myModalLabel">Update  Details</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_name">Database Name<span style="color: red">*</span></label>
                            <input id="db_name" name="db_name" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_empID">Hostname<span style="color: red">*</span></label>
                            <input id="host_name" name="host_name" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_email">Username<span style="color: red">*</span></label>
                            <input id="username" name="username" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_up_mobile">password<span style="color: red">*</span></label>
                            <input type="password" id="db_auth" name="db_auth" class="form-control"/>
                        </div>
                    </div>
                   
                </div>
                
                
                
                            <input type="hidden" id="db_id" name="db_id" class="form-control" />
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
                <h4 class="modal-title" id="myModalLabel">Database Detail</h4>
            </div>
     
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_bu">Database name: </label>
                           <span id="db_name1"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_clientcode">Host name:</label>
                            <span id="host_name1"></span>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_name">Username </label>
                           <span id="username1"></span>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="report_email">Service Id:</label>
                            <span id="service_id1"></span>
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
 $editclient = $this->Url->build(['controller' => 'Admin','action' => 'editdb']);
 $deleteclient = $this->Url->build(['controller' => 'Admin','action' => 'deleteclient']);
 $url_updatedbdetails = $this->Url->build(['controller' => 'Admin', 'action' => 'updatedbdetails']);
 $url_enableuser = $this->Url->build(['controller' => 'Admin', 'action' => 'enableuser']);
 $url_disableuser = $this->Url->build(['controller' => 'Admin', 'action' => 'disableuser']);

 ?>

function editclient(db_id)
{
  $.ajax({
        type:"POST",
        url: "<?= $editclient; ?>",
        data:{'db_id':db_id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
            //alert(data); //value right now is in this variable ... i want to send this variable value to the controller
          data = JSON.parse(data);
           $('#db_name').val(data[0].db_name);
           $('#host_name').val(data[0].host_name);
           $('#username').val(data[0].username);
           $('#db_auth').val(data[0].db_auth);
           $('#db_id').val(data[0].db_id);
          
        },

        error : function() {
           alert("Value NOT reaching to controller ");
           //console.log(data);
        }


    });
}

function viewclient(db_id)
{
  $.ajax({
        type:"POST",
        url: "<?= $editclient; ?>",
        data:{'db_id':db_id},
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
        success : function(data) {
            //alert(data); //value right now is in this variable ... i want to send this variable value to the controller
            console.log(data);
          data = JSON.parse(data);
          console.log(data);
          console.log(data[0].db_name);
           $('#db_name1').text(data[0].db_name);
           $('#host_name1').text(data[0].host_name);
           $('#username1').text(data[0].username);
           $('#service_id1').text(data[0].service_id);
          
           
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
          //alert("User details updated");
           var db_name = $('#db_name').val();
           var host_name =  $('#host_name').val();
           var username = $('#username').val();
           var db_auth = $('#db_auth').val();
           var db_id = $('#db_id').val();
  

         $.ajax({
        type:"POST",
        url: "<?= $url_updatedbdetails; ?>",
        data: {
             db_name : db_name,
             host_name : host_name,
             username : username,
             db_auth : db_auth,
             db_id : db_id
        },
        beforeSend: function (xhr) { // Add this line
        xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
    }, 
       success : function(data) {
          alert("Details Updated");
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

