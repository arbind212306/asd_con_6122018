<?php
namespace App\Controller;
ob_start();
use App\Controller\AppController;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Network\Request;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Dompdf\Dompdf;
/**
 * Users Controller
 *
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

  public function index()
  {
    $this->viewBuilder()->layout('admin_layout');

  }


    public function clientAdd()
    {$value = 2;
      $this->viewBuilder()->layout('admin_layout');
      $service_lists = $this->getservices();
	   $time = Time::now();
  $client = TableRegistry::get('BusinessUnit');
        $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
        $result = []; 
        foreach($result_client as $d){
            $result[] = $d->toArray();
        }  

    if($this->request->is('post')){
      $client_type = $this->request->data('client_type');
      $client_name = $this->request->data('client_name');
      $industry_name = $this->request->data('industry_name');
      $bu = $this->request->data('bu_id');
      $email_id = $this->request->data('email_id');
      $phone = $this->request->data('phone');

      $fax= $this->request->data('fax');
      $client_code = $this->request->data('client_code');
      $cp_name = $this->request->data('cp_name');
      $cp_mobile = $this->request->data('cp_mobile');
      $cp_email_id = $this->request->data('cp_email_id');
      $description = $this->request->data('description');
      $status = $this->request->data('status');
      $website = $this->request->data('website');

      // $service_needed = $this->request->data('service_needed');
      // $service_multiple=implode(",", $service_needed);
      $address1 = $this->request->data('address1');
      $address2 = $this->request->data('address2');
      $city = $this->request->data('city');
      $state = $this->request->data('state');

      $country = $this->request->data('country');
      $zip = $this->request->data('zip');
      $created_by = $this->request->data('created_by');
    
      $password= $this->request->data('password');
  $created_by = $this->request->data('created_by');
    
      $logo1= $this->request->data('logo1');
   $logo2= $this->request->data('logo2');
      $usersTable = TableRegistry::get('clientmaster');
       $temFilePath = $_FILES['logo']['tmp_name']; 
       $temFilePath1 = $_FILES['logo']['tmp_name']; 
       //$temFilePath2 = $_FILES['logo2']['tmp_name']; 
       
                            //set our new file path
     
        $files =time(). "_" . str_replace(" ", "_", $_FILES['logo']['name']);
        $files1 = time() . "_" . str_replace(" ", "_", $_FILES['logo']['name']);
        //$files2 = time() . "_" . str_replace(" ", "_", $_FILES['logo2']['name']);
        $newFilePath = WWW_ROOT  . 'upload' . DS . $files;
        $newFilePath1 = WWW_ROOT  . 'header' . DS . $files1;
       //$newFilePath4 = WWW_ROOT  . 'footer' . DS . $files2;
        move_uploaded_file($temFilePath, $newFilePath);
        move_uploaded_file($temFilePath1, $newFilePath1);
        //move_uploaded_file($temFilePath2, $newFilePath4);
      
      $usersdata = $usersTable->newEntity();
      $usersdata->client_type = $client_type;
      $usersdata->client_name = $client_name;
      $usersdata->industry_name = $industry_name;
      $usersdata->bu = $bu;
      $usersdata->email_id = $email_id;
      $usersdata->phone = $phone;
      $usersdata->fax = $fax;
      $usersdata->client_code = $client_code;
      $usersdata->cp_name = $cp_name;
      $usersdata->cp_mobile = $cp_mobile;
      $usersdata->cp_email_id = $cp_email_id;
      $usersdata->description = $description;
      $usersdata->status = $status;
      $usersdata->website = $website;
      // $usersdata->service_needed = $service_multiple;
      $usersdata->address1 = $address1;
      $usersdata->address2 = $address2;
      $usersdata->city = $city;
      $usersdata->created_on = $time;
      $usersdata->state = $state;
      $usersdata->country = $country;
      $usersdata->zip = $zip;
      $usersdata->created_by = $created_by;
     
      $usersdata->logo=  $files;
      $usersdata->header=  $logo1;
      $usersdata->footer=  $logo2;
  $usersdata->password=  $password;
      //pr($usersdata);die;
      if( $usersTable->save($usersdata)){
        $id = $usersdata->client_id;
        
               
                 $sucessful = 'Client added sucessfully';
                 $class = 'alert alert-success alert-dismissible fade in';
                 $iclass = 'fa fa-check';
                 $close = '&times';
                 $this->set(compact('sucessful','class','iclass','close'));
        // $message = "Record has been successfully insert";
        // $this->Flash->set($message, ['element' => 'success']);

      }

    }

    $this->set(compact('service_lists','result','value'));
  }





  public function upload()
  {
     $update_query = TableRegistry::get('clientmaster');
            $query = $update_query->query();
            $result = $query->update()
                    ->set(['logo' => $files,'header'=> $files1,'footer'=>$files2])
                    ->where(['client_id' => $id])
                    ->execute();

  }
  public function getservices()
  {
    // $this->autoRender = false;
    $services = TableRegistry::get('Services');
    $services_list = $services->find('all', array('fields' => array('product_name','id'), 'conditions' => array('status' => 1)))->toArray();
      // return $services_list;

    $html = '';
    foreach ($services_list as $key => $value) {
      $html .= '<option value="' . $value->id . '" >' . $value->product_name . '</option>';
    }

    return $html;
  }

  
  public function viewClients()
  { $value = 2;
    $this->viewBuilder()->setlayout('admin_layout');
    $client_details = TableRegistry::get('clientmasters');
    $client_list = $client_details->find('all',array('fields' => array('client_id','client_name','client_type','mobile','logo','status')))->toArray();
    $this->set(compact('client_list','value'));

  }

  public function editclient()
  {
    $this->autoRender = false;
    if($this->request->is('ajax'))
    {
            // var_dump($_POST);die();
      $id = $this->request->data('client_id');
      $client_detail = TableRegistry::get('clientmasters');
      $client_list = $client_detail->find('all')->where(['client_id' => $id])->toArray();
      echo(json_encode($client_list));
      
    }
  }

  public function deleteclient()
  {
    $this->autoRender = false;
    if($this->request->is('ajax')){
            // var_dump($_POST);die;
      $id = $this->request->data('client_id');
      $connection = ConnectionManager::get('default');
      $connection->delete('clientmaster', ['client_id' => $id]);
    }
  }

  public function updateclientdetails() {
   $this->autoRender = false;
   $type = $this->request->data('clienttype');
   $name = $this->request->data('clientname');
   $email = $this->request->data('clientemail');
   $address = $this->request->data('clientaddress');
   $state = $this->request->data('clientstate');
   $city = $this->request->data('clientcity');
   $clientid = $this->request->data('clientid');
   $tablename = TableRegistry::get("clientmaster");

   $conditions = array('client_id' => $clientid);
   $fields = array('client_type' => $type, 'client_name' => $name, 'city' => $city, 'address1' => $address, 'state' => $state, 'email_id' => $email);
   $tablename->updateAll($fields, $conditions);
 }



 public function enableuser()
 {
  $this->autoRender = false;
  $id = $this->request->data('id');
  $status = $this->request->data('confirmed');
  $tablename = TableRegistry::get("clientmaster");
  $conditions = array('client_id' => $id);
  $fields = array('status' => $status);
  $tablename->updateAll($fields, $conditions);

}
public function disableuser()
{
  $this->autoRender = false;
  $id = $this->request->data('id');
  $status = $this->request->data('confirmed');
  $tablename = TableRegistry::get("clientmaster");
  $conditions = array('client_id' => $id);
  $fields = array('status' => $status);
  $tablename->updateAll($fields, $conditions);

}

public function addDb()
{$value = 4;
    $this->viewBuilder()->setlayout('admin_layout');

      if($this->request->is('post'))
      {
        // pr($_POST);die();
        $service_id = $this->request->data('service_id');
        $client_id = $this->request->data('client_id');
        $host_name = $this->request->data('host_name');
        $username = $this->request->data('username');
        $db_auth = $this->request->data('db_auth');
        $db_name = $this->request->data('db_name');
  
          $dbtable = TableRegistry::get('Dbconfiguration');
          $dbconfig = $dbtable->newEntity();
          $dbconfig->client_id = $client_id;
          $dbconfig->service_id = $service_id;
          $dbconfig->host_name = $host_name;
          $dbconfig->username = $username;
          $dbconfig->db_auth = $db_auth;
          $dbconfig->db_name = $db_name;

          if( $dbtable->save($dbconfig)){
                $sucessful = 'Database Configurations Added Sucessfully';
                $class = 'alert alert-success alert-dismissible fade in';
                $iclass = 'fa fa-check';
                $close = '&times';
      }

      }


        $client = TableRegistry::get('Clientmaster');
        $result_client = $client->find('all', ['fields' => ['client_id', 'client_name', 'client_type']]);
        $result = []; 
        foreach($result_client as $d){
            $result[] = $d->toArray();
        }
         $service = TableRegistry::get('Services');
        $result_service = $service->find('all', ['fields' => ['product_id', 'product_name']]);
        $results = []; 
        foreach($result_service as $s){
            $results[] = $s->toArray();
        }
        $this->set(compact('result','results','sucessful','class','iclass','close','value'));
    }



  public function viewDb()
  {$value = 4;
    $this->viewBuilder()->setlayout('admin_layout');
    $db_details = TableRegistry::get('Dbconfiguration');
     $db_list = $db_details->find('all', array('order' => array('db_id' => 'desc')))->contain(['clientmasters'])->toArray();
    // $db_list = $db_details->find('all',array('fields' => array('db_id','client_id','service_id','db_name','host_name')))->toArray();
    $this->set(compact('db_list','value'));

  }

   public function editdb()
  {
    $this->autoRender = false;
    if($this->request->is('ajax'))
    {
      $id = $this->request->data('db_id');
      $db_detail = TableRegistry::get('Dbconfiguration');
      $db_list = $db_detail->find('all')->where(['db_id' => $id])->toArray();
      echo(json_encode($db_list));
      
    }

}

 public function updatedbdetails() {
   $this->autoRender = false;
       
        $db_id = $this->request->data('db_id');
        $host_name = $this->request->data('host_name');
        $username = $this->request->data('username');
        $db_auth = $this->request->data('db_auth');
        $db_name = $this->request->data('db_name');
   $tablename = TableRegistry::get("dbconfiguration");
   $conditions = array('db_id' => $db_id);
   $fields = array('db_id' => $db_id, 'host_name' => $host_name, 'username' => $username, 'db_auth' => $db_auth, 'db_name' => $db_name);
   $tablename->updateAll($fields, $conditions);
 }


 public function generatePdf() {
        $this->autoRender = false;
        // echo $this->request->here;
        //$last_complaint_id = $this->request->data('last_compalint_id');
        // instantiate and use the dompdf class

       
            // echo $this->request->here;
            $html = $this->genrateHtml();
             //echo $html;exit;

        
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream('Invoice');
        }
    

    public function genrateHtml() {
      

            $html = '';
            $html .= '<html>';
            $html .= '<head>';
            $html .= '<style>
                            @page {
                                margin: 100px 25px;
                            }
                            
                            header {
                                position: fixed;
                                top: -60px;
                                left: 0px;
                                right: 0px;
                                height: 50px;
                                color: black;
                                line-height: 50px;
                            }
                            
                            footer {
                                position: fixed; 
                                bottom: -60px; 
                                left: 0px; 
                                right: 0px;
                                height: 50px; 
                                color: white;
                                text-align: center;
                                line-height: 35px;
                            }
                            .example td {
                                padding: 8px;
                            }
                            .settable th {
                                padding-top: 12px;
                                padding-bottom: 12px;
                                text-align: left;
                            }
                            .settable td,th {
                                 padding: 10px;
                            }
                            .styletd {
                                font-size: 17px;
                                font-weight: bold;
                            }
                            #title {
                                text-align: center;
                                font-size: 30px;
                                font-wight: bold;
                                background-color: #17bb94;
                            }
                            h3 {
                                text-align: center;
                                margin-top: -10px;
                                fontweight: bold;
                                
                            }
                            img {
                                height: 50px;
                                width: 100px;
                                float: left;
                                margin-left: 15px;
                            }
                            
                       </style>';
            $html .= '</head>';
            $html .= '<body>';
            $html .= '<header>';
           
            $html .= '</header>';
            
            $html .= '<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
            <strong>Billed To:</strong><br>
              John Smith<br>
              1234 Main<br>
              Apt. 4B<br>
              Springfield, ST 54321
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Shipped To:</strong><br>
              Jane Smith<br>
              1234 Main<br>
              Apt. 4B<br>
              Springfield, ST 54321
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <strong>Payment Method:</strong><br>
              Visa ending **** 4242<br>
              jsmith@email.com
            </address>
          </div>
          <div class="col-xs-6 text-right">
            <address>
              <strong>Order Date:</strong><br>
              March 7, 2014<br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Item</strong></td>
                      <td class="text-center"><strong>Price</strong></td>
                      <td class="text-center"><strong>Quantity</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                    <td>BS-200</td>
                    <td class="text-center">$10.99</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$10.99</td>
                  </tr>
                                <tr>
                      <td>BS-400</td>
                    <td class="text-center">$20.00</td>
                    <td class="text-center">3</td>
                    <td class="text-right">$60.00</td>
                  </tr>
                                <tr>
                        <td>BS-1000</td>
                    <td class="text-center">$600.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$600.00</td>
                  </tr>
                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">$670.99</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Shipping</strong></td>
                    <td class="no-line text-right">$15</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right">$685.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>';
            
           
            $html .= '<footer>';
            $html .= '</footer>';
            $html .= '</body>';
            $html .= '</html>';

               echo $html;exit;
            //return $html;
        
    }

}