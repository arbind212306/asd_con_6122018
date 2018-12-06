
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <div class="box box-primary">
      <div class="row">
          <div class="box-header with-border">
              <h3 class="box-title" style="margin-left: 10px;">View clients</h3>
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
        <div class="col-xs-12 margin-top-lg ">
                <?php echo $this->Form->create(null, ['url' => false]); ?>
                
            <table class="table table-striped" id="report_table" >
                <thead>
                <tr>
                    <th>id</th>
                    <th>Bu Name</th>
                    <th>Bu Desctiption</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
           <?php foreach ($businessUnit as $businessUnit): ?>
            <tr>
                <td><?= $this->Number->format($businessUnit->id) ?></td>
                <td><?= h($businessUnit->bu_name) ?></td>
				  <td><?= h($businessUnit->bu_desc) ?></td>
                <td><?php $status= $businessUnit->status ?>
                 <?php  if($status == '1') { ?>
                Active
                  <?php } else {?>
                  Deactive
                  <?php } ?>
                
                </td>
                <td class="actions">
                  
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessUnit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessUnit->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
   
                </tbody>
            </table>
         
        </div>
	     
    <!-- /.content -->

  <!-- /.content-wrapper -->
    <!-- /.content -->
  </section></div>
  <!-- /.content-wrapper -->







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





















