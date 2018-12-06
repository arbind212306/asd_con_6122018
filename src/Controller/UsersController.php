<?php
namespace App\Controller;
ob_start();
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\NotFoundException;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;


class UsersController extends AppController {
  public function initialize() {
    parent::initialize();
    $this->viewBuilder()->layout('admin_layout');
  }
  
  public function beforeFilter(Event $event) {
    $this->loadComponent('Flash');


    parent::beforeFilter($event);

    $this->Auth->allow(['login', 'logout','dashboard']);
  }

  public function dashboard() {
   $value = 1;
   $this->viewBuilder()->layout('admin_layout');
   $clientmasterTable = TableRegistry::get('clientmaster');
   $query = $clientmasterTable->find('all');
   $client_number = $query->count();

   $contractmasterTable = TableRegistry::get('client_service_aggrement');
   $query1 = $contractmasterTable->find('all');
   $contract_number = $query1->count();

   $this->set(compact('value','client_number','contract_number'));
 }



 public function login() {
  $this->viewBuilder()->layout('');
  $this->loadModel('Users');
  if ($this->request->is('post')) {
            //$user = $this->Auth->identify();

    $user = $this->Auth->identify($this->request->data);
			//pr( $user);
    if ($user) {
      $this->Auth->setUser($user);

      $session=$this->request->session();
      $service_clientid=$session->read('Auth.User.id'); 


      return $this->redirect(['controller' => 'Users', 'action' => 'dashboard']);
                //return $this->redirect($this->Auth->redirectUrl());
    }
    $this->Flash->set('Invalid Username or Password, try again.', [
      'element' => 'error'
    ]);
            //$login_error=$this->Flash->error(__('Invalid Email Id or Password, try again'));
  }
  $this->set(compact('user'));
}



	 // public function redirecturlafterlogin() {

  //       //$this->viewBuilder()->layout('');
  //       $user = $this->Auth->user();
  //       $session = $this->request->session();
  //       return $this->redirect(['controller' => 'Users', 'action' => 'dashboard']);
  //           }

public function logout(){
 $session=$this->request->session();
 $session->destroy();
 return  $this->redirect($this->Auth->logout());
}

public function servicedelete() {

 $this->autoRender=false;
 $id=$this->request->data('id');
 $this->request->allowMethod(['post', 'delete']);
 $servicedeleteTable=TableRegistry::get('console_client_service');
 $$servicedelete = $servicedeleteTable->get($id);
 if ($servicedeleteTable->delete($servicedelete)) {
  $this->Flash->success(__('The console billing frequency has been deleted.'));
} else {
  $this->Flash->error(__('The console billing frequency could not be deleted. Please, try again.'));
}
}
     public function invoiceDetails(){

       $value="17";
      $this->viewBuilder()->layout('admin_layout');
	  $this->set(compact('value'));
     }




public function getservice(){
  if($this->request->is('ajax')){
    $this->autoRender=false;
    $client_id=$this->request->data('client_id');
    $clientmastertable=TableRegistry::get('console_client_service');
    $servicemastertable=TableRegistry::get('services');
    $fetchclient=$clientmastertable->find('all')->where(['client_id'=>$client_id])->group('service_id')->toArray();

    $html='';

    if(!empty($fetchclient)){
     $html .= '<select class="form-control select2" name="service_id">';
     $html .= '<option value="">-Select Service -</option>';
     foreach($fetchclient as $service_records){
       $service_record=$service_records->service_id;
       $servicename= $servicemastertable->find('all')->where(['id'=>$service_record])->toArray();
       foreach($servicename as $service_namerecord){
        $html .= '<option value="'.$service_namerecord->id.'">'.$service_namerecord['product_name'].'</option>';
      }
    }
    $html .= '</select>';

  }
  echo json_encode($html);
}
}


public function editContract($id=null){
  $value = 3;
  $clientmasterTable = TableRegistry::get('clientmaster');
  $recordclientmaster = $clientmasterTable->find('all')->where(['client_id'=>$id])->contain(['client_service_aggrement'])->toArray();


  $clientmaster = TableRegistry::get('client_service_aggrement');
  $result_clientmaster = $clientmaster->find('all')->where(['client_id'=>$id])->contain(['business_unit',
    'industry','console_mode_of_payment','console_billing_frequency'])->toArray();
  $ConsoleClientServicemaster = TableRegistry::get('console_client_service');
  $ConsoleClientService = $ConsoleClientServicemaster->find('all')->where(['client_id'=>$id])->contain(['console_no_of_user',
    'services','console_payments','console_invoice_frequenies'])->toArray();

  $userTable1 = TableRegistry::get('images');
  $client_con_images=$userTable1->find('all')->where(['client_id'=>$id])->toArray();


  $this->loadModel('Services');
  $paymentTable=TableRegistry::get('console_payments');
  $payment=$paymentTable->find('all',array('fields'=>array('id','payment_mode'),'condition'=>array('status'=>1)))->toArray();

  $console_invoice_frequeniesTable=TableRegistry::get('console_invoice_frequenies');
  $console_invoice_frequenies=$console_invoice_frequeniesTable->find('all',array('fields'=>array('id','invoice_frequency_name'),'condition'=>array('status'=>1)))->toArray();

  $invoice_cycleTable=TableRegistry::get('console_invoice_cycles');
  $invoice_cycle=$invoice_cycleTable->find('all',array('fields'=>array('id','invoice_cycle_name'),'condition'=>array('status'=>1)))->toArray();


  $console_no_of_userTable=TableRegistry::get('console_no_of_user');
  $console_no_of_userss=$console_no_of_userTable->find('all',array('fields'=>array('id','name'),'condition'=>array('status'=>1)))->toArray();



  $this->loadModel('Services');
  $serviceResult = $this->Services->getServiceDetails();

  $client = TableRegistry::get('BusinessUnit');
  $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
  $result = []; 
  foreach($result_client as $d){
    $result[] = $d->toArray();
  }
  $this->loadModel('Services');
  $serviceResult = $this->Services->getServiceDetails();

  $service_id_count='';
		//$service_id=$this->request->data('service_id');
  if(!empty($_POST['service_id'])){
   $service_id_count=count($_POST['service_id']);

 }

           //query for counting total no of files
 $count = '';
 if (!empty($_FILES['image']['name'])) {
  $count = count($_FILES['image']['name']);

}



            // all these masters


$this->set(compact('result','ConsoleClientService', 'client_con_images','serviceResult','console_billing_frequency','payment','console_no_of_userss','console_invoice_frequenies','result_clientmaster','recordclientmaster','value'));
if($this->request->is('post')){



  $bu_id=$this->request->data('bu_id');
  $industry_id=$this->request->data('industry_id');
  $client_id=$this->request->data('client_id');
  $temination_fee_clause=$this->request->data('temination_fee_clause');
  $escalation_terms=$this->request->data('escalation_terms');
  $company_code=$this->request->data('company_code');

  $contract_create_date=$this->request->data('contract_create_date');
  $contract_expiry_date=$this->request->data('contract_expiry_date');
  $mode_of_payment=$this->request->data('mode_of_payment');
  $billing_frequency=$this->request->data('billing_frequency');

  $userTable = TableRegistry::get('client_service_aggrement');
  $userData=$userTable->newEntity();
  $userData->bu_id=$bu_id;
  $userData->industry_id=$industry_id;
  $userData->client_id=$client_id;
  $userData->temination_fee_clause=$temination_fee_clause;
  $userData->escalation_terms=$escalation_terms;
  $userData->company_code=$company_code;
  $userData->contract_create_date=$contract_create_date;
  $userData->contract_expiry_date=$contract_expiry_date;
  $userData->mode_of_payment=$mode_of_payment;
  $userData->billing_frequency=$billing_frequency;


  if($userTable->save($userData)){

   $id = $userData->id;

                 //query for inserting images
   if ($count > 0) {
    for ($j = 0; $j < $count; $j++) {
                        //get the temp file path
      $temFilePath = $_FILES['image']['tmp_name'][$j];
                        //make sure you have file
                       //$images= $_POST['image'][$j];
                            //set our new file path
      $fileName[] = $_FILES['image']['name'][$j];
      $files = time() . "_" . str_replace("", "_", $_FILES['image']['name'][$j]);
      $newFilePath = WWW_ROOT . DS . 'upload' . DS . $files;
      $imageTable = TableRegistry::get('images');
      $imageData = $imageTable->newEntity();
      move_uploaded_file($temFilePath, $newFilePath);
      $imageData->client_id = $id;
      $imageData->image = $files;
      $imageTable->save($imageData);


    }
  }



  if($service_id_count > 0)
  {
   for($i=0 ; $i<$service_id_count ; $i++){

     $service_id = $_POST['service_id'][$i];
     $service_type = $_POST['service_type'][$i];
                        //$client_id = $_POST['client_id'][$i];
     $payment_option = $_POST['payment_option'][$i];
     $invoice_frequency = $_POST['invoice_frequency'][$i];
     $sale_price = $_POST['sale_price'][$i];
     $no_of_users = $_POST['no_of_users'][$i];
     $effective_date = $this->request->data['effective_date'][$i];
     $bill_start_date = $this->request->data['bill_start_date'][$i];

     $expiry_date= $this->request->data['expiry_date'][$i];
     $status = $this->request->data['status'][$i];

     $console_client_serviceTable = TableRegistry::get('ConsoleClientService');
     $console_client_service = $console_client_serviceTable->newEntity();

     $console_client_service->service_id =  $service_id;
     $console_client_service->service_type = (string) $service_type;
     $console_client_service->client_id =  $client_id;
     $console_client_service->payment_option = (string) $payment_option;
     $console_client_service->invoice_frequency = (string) $invoice_frequency;
     $console_client_service->sale_price= (string) $sale_price;
     $console_client_service->no_of_users = (string) $no_of_users;
     $console_client_service->effective_date = $effective_date;
     $console_client_service->bill_start_date = $bill_start_date;
     $console_client_service->expiry_date = $expiry_date;
     $console_client_service->status = $status;

     $console_client_serviceTable->save($console_client_service);

   }
 }



}
$sucessful = 'Service has been successfully add';
$class = 'alert alert-success alert-dismissible fade in';
$iclass = 'fa fa-check';
$close = '&times';
    //$message = "Service has been successfully add";
        //$this->Flash->set($message, ['element' => 'success']);

}
$this->set(compact('sucessful', 'class', 'iclass', 'close'));
}

public function manageInvoice(){
  $value = 15; 
  $time = Time::now();
  $this->viewBuilder()->layout('admin_layout');
  $client = TableRegistry::get('BusinessUnit');
  $console_billing_frequency = TableRegistry::get('console_billing_frequency');
  $billing_frequency = TableRegistry::get('console_billing_frequency');
   $dummy_invoice = TableRegistry::get('invoice');
  $result_billing_frequency = $billing_frequency->find('all')->where(['status'=>1])->toArray();
  $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
  $result = []; 
  foreach($result_client as $d){
    $result[] = $d->toArray();
  }
  if($this->request->is('post'))
  {//pr($_POST);die();
    
    $bu_id = $this->request->data('bu_id');
    $industry_id = $this->request->data('industry_id');
    $client_id = $this->request->data('client_id');
    $status = $this->request->data('status');
    $billing_frequency = $this->request->data('billing_frequency');
    $biling_date = $this->request->data('biling_date');
    $invoice_note = $this->request->data('invoice_note');
   
    $userData=$dummy_invoice->newEntity();
    $userData->bu_id=$bu_id;
    $userData->industry_id=$industry_id;
    $userData->created=$time;
    $userData->client_id=$client_id;
    $userData->frequency=$billing_frequency;
    $userData->billing_month=$biling_date;
    $userData->invoice_note=$invoice_note;
  if($dummy_invoice->save($userData)){
    $sucessful = 'Dummy invoice generated sucessfully';
    $class = 'alert alert-success alert-dismissible fade in';
    $iclass = 'fa fa-check';
    $close = '&times';

  }
}

  $this->set(compact('value','result','result_billing_frequency','sucessful','class','iclass','close'));
}


public function addContract(){
  $value = 3;
  $client = TableRegistry::get('BusinessUnit');
  $result_client = $client->find('all', ['fields' => ['bu_name','id']]);
  $result = []; 
  foreach($result_client as $d){
    $result[] = $d->toArray();
  }
  $this->loadModel('Services');
  $serviceResult = $this->Services->getServiceDetails();

  $service_id_count='';
		//$service_id=$this->request->data('service_id');
  if(!empty($_POST['service_id'])){
   $service_id_count=count($_POST['service_id']);

 }

           //query for counting total no of files
 $count = '';
 if (!empty($_FILES['image']['name'])) {
  $count = count($_FILES['image']['name']);

}



            // all these masters
$console_billing_frequencyTable=TableRegistry::get('console_billing_frequency');
$console_billing_frequency=$console_billing_frequencyTable->find('all',array('fields'=>array('id','name'),'condition'=>array('status'=>1)))->toArray();

$console_mode_of_paymentTable=TableRegistry::get('console_mode_of_payment');
$console_mode_of_payment=$console_mode_of_paymentTable->find('all',array('fields'=>array('id','name'),'condition'=>array('status'=>1)))->toArray();


$this->set(compact('result', 'serviceResult','console_billing_frequency','console_mode_of_payment','value'));
if($this->request->is('post')){



  $bu_id=$this->request->data('bu_id');
  $industry_id=$this->request->data('industry_id');
  $client_id=$this->request->data('client_id');
  $temination_fee_clause=$this->request->data('temination_fee_clause');
  $escalation_terms=$this->request->data('escalation_terms');
  $company_code=$this->request->data('company_code');

  $contract_create_date=$this->request->data('contract_create_date');
  $contract_expiry_date=$this->request->data('contract_expiry_date');
  $mode_of_payment=$this->request->data('mode_of_payment');
  $billing_frequency=$this->request->data('billing_frequency');

  $userTable = TableRegistry::get('client_service_aggrement');
  $userData=$userTable->newEntity();
  $userData->bu_id=$bu_id;
  $userData->industry_id=$industry_id;
  $userData->client_id=$client_id;
  $userData->temination_fee_clause=$temination_fee_clause;
  $userData->escalation_terms=$escalation_terms;
  $userData->company_code=$company_code;
  $userData->contract_create_date=$contract_create_date;
  $userData->contract_expiry_date=$contract_expiry_date;
  $userData->mode_of_payment=$mode_of_payment;
  $userData->billing_frequency=$billing_frequency;


  if($userTable->save($userData)){

   $id = $userData->id;
                //query for inserting images
   if ($count > 0) {
    for ($j = 0; $j < $count; $j++) {
                        //get the temp file path
      $temFilePath = $_FILES['image']['tmp_name'][$j];
                        //make sure you have file
                       //$images= $_POST['image'][$j];
                            //set our new file path
      $fileName[] = $_FILES['image']['name'][$j];
      $files = time() . "_" . str_replace("", "_", $_FILES['image']['name'][$j]);
      $newFilePath = WWW_ROOT . DS . 'upload' . DS . $files;
      $imageTable = TableRegistry::get('images');
      $imageData = $imageTable->newEntity();
      move_uploaded_file($temFilePath, $newFilePath);
      $imageData->client_id = $id;
      $imageData->image = $files;
      $imageTable->save($imageData);


    }
  }



  if($service_id_count > 0)
  {
   for($i=0 ; $i<$service_id_count ; $i++){

     $service_id = $_POST['service_id'][$i];
     $service_type = $_POST['service_type'][$i];
                        //$client_id = $_POST['client_id'][$i];
     $payment_option = $_POST['payment_option'][$i];
     $invoice_frequency = $_POST['invoice_frequency'][$i];
     $sale_price = $_POST['sale_price'][$i];
     $no_of_users = $_POST['no_of_users'][$i];
     $effective_date = $this->request->data['effective_date'][$i];
     $bill_start_date = $this->request->data['bill_start_date'][$i];

     $expiry_date= $this->request->data['expiry_date'][$i];
     $status = $this->request->data['status'][$i];

     $console_client_serviceTable = TableRegistry::get('ConsoleClientService');
     $console_client_service = $console_client_serviceTable->newEntity();

     $console_client_service->service_id =  $service_id;
     $console_client_service->service_type = (string) $service_type;
     $console_client_service->client_id =  $client_id;
     $console_client_service->payment_option = (string) $payment_option;
     $console_client_service->invoice_frequency = (string) $invoice_frequency;
     $console_client_service->sale_price= (string) $sale_price;
     $console_client_service->no_of_users = (string) $no_of_users;
     $console_client_service->effective_date = $effective_date;
     $console_client_service->bill_start_date = $bill_start_date;
     $console_client_service->expiry_date = $expiry_date;
     $console_client_service->status = $status;

     $console_client_serviceTable->save($console_client_service);

   }
 }



}

    // $message = "Service has been successfully add";
    //     $this->Flash->set($message, ['element' => 'success']);
$sucessful = 'Service added sucessfully';
$class = 'alert alert-success alert-dismissible fade in';
$iclass = 'fa fa-check';
$close = '&times';
$this->set(compact('sucessful','class','iclass','close'));

}
}


public function manageContract(){
  $value = 3;
  $variable = 'post';
  $client_services_details='';
  $client_services_details1='';
  $userTable = TableRegistry::get('client_service_aggrement');
  $userTable1 = TableRegistry::get('images');
  $client = TableRegistry::get('BusinessUnit');

  if($this->request->is('post'))
  {
    $variable = 'filter';
    //  pr($_POST);
    $bu_id = $this->request->data('bu_id');
    $industry_id = $this->request->data('industry_id');
    $client_id = $this->request->data('client_id');
    $status = $this->request->data('status');   
    $conn = ConnectionManager::get ('default'); 
      //echo $bu_id;
    if((!empty($bu_id)) && $bu_id == 'all')
    {
     $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])->toArray();
     $client_services_details1=$userTable1->find('all')->toArray();
          // pr($client_services_details);die();
         // $sql = "select csa.*,bu.bu_name,ind.industry_name from client_service_aggrement as csa inner join business_unit as bu on  bu.id = csa.bu_id inner join  industry as ind on ind.id = csa.industry_id where csa.bu_id = '".$bu_id."'";
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
   }
   if((!empty($bu_id)) && $bu_id != 'all')
   {
     $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])
     ->where("client_service_aggrement .bu_id=$bu_id")->toArray();
     $client_services_details1=$userTable1->find('all')->toArray();
          // pr($client_services_details);die();
         // $sql = "select csa.*,bu.bu_name,ind.industry_name from client_service_aggrement as csa inner join business_unit as bu on  bu.id = csa.bu_id inner join  industry as ind on ind.id = csa.industry_id where csa.bu_id = '".$bu_id."'";
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
   }

   if(!empty($industry_id))
   {

     $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])
     ->where("client_service_aggrement .bu_id=$bu_id")->andwhere("client_service_aggrement .industry_id=$industry_id")->toArray();
     $client_services_details1=$userTable1->find('all')->toArray();
         // $sql = "select csa.*,bu.bu_name,ind.industry_name from client_service_aggrement as csa inner join business_unit as bu on  bu.id = csa.bu_id inner join  industry as ind on ind.id = csa.industry_id where csa.bu_id = '".$bu_id."' and csa.industry_id = '".$industry_id."'";
         // "select * from client_service_aggrement where bu_id = '".$bu_id."' and industry_id = '".$industry_id."'";
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
   }
   if(!empty($client_id))
   {
     $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])
     ->where("client_service_aggrement .bu_id=$bu_id")->andwhere("client_service_aggrement .industry_id=$industry_id")->andwhere("client_service_aggrement .client_id=$client_id")->toArray();
     $client_services_details1=$userTable1->find('all')->toArray();
         // $sql = "select csa.*,bu.bu_name,ind.industry_name from client_service_aggrement as csa inner join business_unit as bu on  bu.id = csa.bu_id inner join  industry as ind on ind.id = csa.industry_id where csa.bu_id = '".$bu_id."' and csa.industry_id = '".$industry_id."' and csa.client_id = '".$client_id."'";
         // "select * from client_service_aggrement where bu_id = '".$bu_id."' and industry_id = '".$industry_id."' and client_id = '".$client_id."'";
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
   }
   if((!empty($status)) && ($status == 'all'))
   {

    $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])->toArray();

    $client_services_details1=$userTable1->find('all')->toArray();
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
  }
  if((!empty($status)) && ($status != 'all'))
  {

    $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])
    ->where("client_service_aggrement.status=$status")->toArray();
    $client_services_details1=$userTable1->find('all')->toArray();
        //$subcategory = $conn->execute($sql)->fetchAll('assoc');
  }
}


$result_client = $client->find('all', ['fields' => ['bu_name','id']]);
$result = []; 
foreach($result_client as $d){
  $result[] = $d->toArray();
}


$this->viewBuilder()->layout('admin_layout');
if($variable == 'post')
{
  $client_services_details=$userTable->find('all')->contain(['clientmaster','business_unit','industry'])->toArray();
  $client_services_details1=$userTable1->find('all')->toArray();

}

$this->set(compact('client_services_details','client_services_details1','value','result'));
}


public function getClientDetails(){
  if($this->request->is('ajax')){
    $this->autoRender = false;
    $id = $this->request->data('id');


    $client = TableRegistry::get('Industry');
    $client_details = $client->find('all', ['fields' => ['id', 'industry_name'], 
      'conditions' => ['bu_id' => $id]])->toArray();


    $result =  '<option value="" >Select</option>'; 
    foreach ($client_details as $key => $d){

      $result .= '<option value="' . $d->id . '" >' . $d->industry_name . '</option>';
    }
    header('Content-Type: application/json');
    echo  json_encode(  $result);


  }
}


public function clientname(){
  if($this->request->is('ajax')){
    $this->autoRender = false;
    $id = $this->request->data('id');
    $client = TableRegistry::get('clientmaster');
    $client_details = $client->find('all', ['fields' => ['client_id', 'client_name'], 
      'conditions' => ['industry_name' => $id]])->toArray();

    $result =  '<option value="" >Select</option>'; 
    foreach ($client_details as $key => $d){

      $result .= '<option value="' . $d->client_id . '" >' . $d->client_name . '</option>';
    }
    header('Content-Type: application/json');
    echo  json_encode(  $result);

  }
}

public function getclientid(){
  if($this->request->is('ajax')){
    $this->autoRender = false;
    $id = $this->request->data('id');
    $client = TableRegistry::get('clientmaster');
    $client_detail = TableRegistry::get('clientmasters');
    $client_list = $client_detail->find('all',['fields' => ['client_code','client_id']])->where(['client_id' => $id])->toArray();
    echo(json_encode($client_list));


  }
}




public function getProductDetails(){
  if($this->request->is('ajax')){
    $this->autoRender = false;
    $this->loadModel('Services');
    $result = $this->Services->getServiceDetails();
    $html = '';
    $html .= '<option selected="selected"> Select </option>';
    foreach ($result as $value){
      $html .= '<option value="'.$value['id'].'">'.$value['product_name'].'</option>';
    }
    echo $html;
  }
}

public function getproductcode()
{
  if($this->request->is('ajax')){
    $this->autoRender = false;
            // var_dump($_POST);die();
    $id = $this->request->data('id');
    $service = TableRegistry::get('Services');
    $service_details = $service->find('all',array('fields' => array('product_id')))->where(['id' => $id]);
    $result = [];
    foreach ($service_details as $service_details){
      $result[] = $service_details->toArray();
    }
    if(!empty($result)){
      $result = json_encode($result);
    }
    echo $result;


  }
}

function getServiceDiv(){
  if($this->request->is('ajax')){
    $this->autoRender = false;
    $arr = $this->request->data('arr');
    $arr = explode(",", $arr);
    $this->loadModel('Services');
    $paymentTable=TableRegistry::get('console_payments');
    $payment=$paymentTable->find('all',array('fields'=>array('id','payment_mode'),'condition'=>array('status'=>1)))->toArray();

    $console_invoice_frequeniesTable=TableRegistry::get('console_invoice_frequenies');
    $console_invoice_frequenies=$console_invoice_frequeniesTable->find('all',array('fields'=>array('id','invoice_frequency_name'),'condition'=>array('status'=>1)))->toArray();

    $invoice_cycleTable=TableRegistry::get('console_invoice_cycles');
    $invoice_cycle=$invoice_cycleTable->find('all',array('fields'=>array('id','invoice_cycle_name'),'condition'=>array('status'=>1)))->toArray();


    $console_no_of_userTable=TableRegistry::get('console_no_of_user');
    $console_no_of_user=$console_no_of_userTable->find('all',array('fields'=>array('id','name'),'condition'=>array('status'=>1)))->toArray();


            //$result = $this->Services->getServiceDetails($serviceId);

    $result = $this->Services->getServiceDetails($arr);
    $html  = '';
    foreach ($result as $value):
      $html .= '<tr id="appendServiceTr">';
      $html .= '<td>';
      $html .= '<select class="form-control select2" id="get_service"  name="service_id[]">';
      $html .= '<option value="'.$value['id'].'" selecetd="selected">'.$value['product_name'].'</option>';
      $html .= '</select>';
      $html .= '</td>';                    
      $html .= '<td>';
      $html .= '<input type="checkbox" value="Apply">';
      $html .= '</td>';                        
      $html .= '<td>';                           
      $html .= '<select class="form-control select2" name="service_type[]">';    

      $html .= '<option value="">-Select service Type -</option>';
      $html .= '<option value="Trial"> Trial </option>';                    
      $html .= '<option value="Paid"> Paid </option>';                           

      $html .= '</select>';                            
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<input type="text" class="form-control " name="sale_price[]">';

      $html .= '</td>';                         
      $html .= '<td>';                    
      $html .= '<select class="form-control select2" name="payment_option[]">';
      $html .= '<option value="">Select</option>';
      foreach($payment as $payments){
        $html .= '<option value="'.$payments['id'].'"> '.$payments['payment_mode'].' </option>';
      }
      $html .= '</select>';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<select class="form-control select2" name="invoice_frequency[]">';
      $html .= '<option value="">Select</option>';
      foreach($console_invoice_frequenies as $console_invoice_frequenie){
        $html .= '<option value="'.$console_invoice_frequenie['id'].'"> '.$console_invoice_frequenie['invoice_frequency_name'].' </option>';
      }
      $html .= '</select>';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<select class="form-control select2" name="invoice_cycle[]">';
      $html .= '<option value="">Select </option>';
      foreach($invoice_cycle as $invoice_cycles){
        $html .= '<option value="'.$invoice_cycles['id'].'"> '.$invoice_cycles['invoice_cycle_name'].' </option>';
      }
      $html .= '</select>';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<select class="form-control select2" name="no_of_users[]">';
      $html .= '<option value="">Select/option>';
      foreach($console_no_of_user as $console_no_of_users){
        $html .= '<option value="'.$console_no_of_users['id'].'"> '.$console_no_of_users['name'].' </option>';
      }
      $html .= '</select>';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<input class="form-control" id="expiry_date" type="date" name="effective_date[]">';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<input class="form-control" id="expiry_date" type="date" name="expiry_date[]">';
      $html .= '</td>';
      $html .= '<td>';
      $html .= '<input class="form-control" id="expiry_date" type="date" name="bill_start_date[]">';
      $html .= '<input class="form-control" id="status" type="hidden" name="status[]" value="1">';
      $html .= '</td>';
      $html .= '<td></td>';
      $html .= '<tr>';
    endforeach;
    echo $html;

  }
}

}