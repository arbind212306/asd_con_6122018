

<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $consoleInvoiceFrequeny
 */
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header" >
       <h1 class="box-title heading-title ">Manage Console Invoice Frequeny</h1>
    </section>
<!-- Left side column. contains the logo and sidebar -->

 

    <section class="content"  style="padding-top:10px;">
      <div class="box box-primary">
      <div class="row">
          <div class="box-header with-border">
              
              <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                  <a href="<?= $this->Url->build(['controller' => 'ConsoleInvoiceFrequenies', 'action' => 'add']) ?>" class="btn btn-primary" style="margin-left:-7px;">
              <i class="fa fa-plus fa-fw"></i>Add</a>
              </div>
          
            <div class="col-xs-12 margin-top-lg ">
               
                   <?php echo $this->Form->create(null, ['url' => false]); ?>
            <table class="table table-striped" id="report_table" >
                <thead>
                <tr>
                    <th>id</th>
                    <th> Name</th>
                
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
       <?php foreach ($consoleInvoiceFrequenies as $consoleInvoiceFrequeny): ?>
            <tr>
                <td><?= $this->Number->format($consoleInvoiceFrequeny->id) ?></td>
                <td><?= h($consoleInvoiceFrequeny->invoice_frequency_name) ?></td>
        
                <td><?php $status= $consoleInvoiceFrequeny->status ?>
                 <?php  if($status == '1') { ?>
                Active
                  <?php } else {?>
                  Deactive
                  <?php } ?>
                
                </td>
                <td class="actions">
                  
                   <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consoleInvoiceFrequeny->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consoleInvoiceFrequeny->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleInvoiceFrequeny->id)]) ?>
               </td>
            </tr>
            <?php endforeach; ?>
   
                </tbody>
            </table>
         </div>
        </div>
          </div>
      </div>

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

