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

/**
 * ConsoleModeOfPayment Controller
 *
 * @property \App\Model\Table\ConsoleModeOfPaymentTable $ConsoleModeOfPayment
 *
 * @method \App\Model\Entity\ConsoleModeOfPayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsoleModeOfPaymentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$value=7;
		 $this->viewBuilder()->layout('admin_layout');
        $consoleModeOfPayment = $this->paginate($this->ConsoleModeOfPayment);

        $this->set(compact('consoleModeOfPayment','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console Mode Of Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consoleModeOfPayment = $this->ConsoleModeOfPayment->get($id, [
            'contain' => []
        ]);

        $this->set('consoleModeOfPayment', $consoleModeOfPayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {$value=7;
		 $this->viewBuilder()->layout('admin_layout');
        $consoleModeOfPayment = $this->ConsoleModeOfPayment->newEntity();
        if ($this->request->is('post')) {
            $consoleModeOfPayment = $this->ConsoleModeOfPayment->patchEntity($consoleModeOfPayment, $this->request->getData());
            if ($this->ConsoleModeOfPayment->save($consoleModeOfPayment)) {
                $this->Flash->success(__('The console mode of payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console mode of payment could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleModeOfPayment','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console Mode Of Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {$value=7;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleModeOfPayment = $this->ConsoleModeOfPayment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consoleModeOfPayment = $this->ConsoleModeOfPayment->patchEntity($consoleModeOfPayment, $this->request->getData());
            if ($this->ConsoleModeOfPayment->save($consoleModeOfPayment)) {
                $this->Flash->success(__('The console mode of payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console mode of payment could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleModeOfPayment','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console Mode Of Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consoleModeOfPayment = $this->ConsoleModeOfPayment->get($id);
        if ($this->ConsoleModeOfPayment->delete($consoleModeOfPayment)) {
            $this->Flash->success(__('The console mode of payment has been deleted.'));
        } else {
            $this->Flash->error(__('The console mode of payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
