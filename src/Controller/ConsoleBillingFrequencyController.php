<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsoleBillingFrequency Controller
 *
 *
 * @method \App\Model\Entity\ConsoleBillingFrequency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsoleBillingFrequencyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$value=8;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleBillingFrequency = $this->ConsoleBillingFrequency->find('all')->toArray();

        $this->set(compact('consoleBillingFrequency','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console Billing Frequency id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consoleBillingFrequency = $this->ConsoleBillingFrequency->get($id, [
            'contain' => []
        ]);

        $this->set('consoleBillingFrequency', $consoleBillingFrequency);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$value=8;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleBillingFrequency = $this->ConsoleBillingFrequency->newEntity();
        if ($this->request->is('post')) {
            $consoleBillingFrequency = $this->ConsoleBillingFrequency->patchEntity($consoleBillingFrequency, $this->request->getData());
            if ($this->ConsoleBillingFrequency->save($consoleBillingFrequency)) {
                $this->Flash->success(__('The console billing frequency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console billing frequency could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleBillingFrequency','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console Billing Frequency id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$value=8;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleBillingFrequency = $this->ConsoleBillingFrequency->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consoleBillingFrequency = $this->ConsoleBillingFrequency->patchEntity($consoleBillingFrequency, $this->request->getData());
            if ($this->ConsoleBillingFrequency->save($consoleBillingFrequency)) {
                $this->Flash->success(__('The console billing frequency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console billing frequency could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleBillingFrequency','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console Billing Frequency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consoleBillingFrequency = $this->ConsoleBillingFrequency->get($id);
        if ($this->ConsoleBillingFrequency->delete($consoleBillingFrequency)) {
            $this->Flash->success(__('The console billing frequency has been deleted.'));
        } else {
            $this->Flash->error(__('The console billing frequency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
