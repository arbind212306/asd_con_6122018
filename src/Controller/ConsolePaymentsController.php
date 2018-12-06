<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsolePayments Controller
 *
 *
 * @method \App\Model\Entity\ConsolePayment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsolePaymentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$value=10;
	 $this->viewBuilder()->layout('admin_layout');
        $consolePayments = $this->ConsolePayments->find('all')->toArray();

        $this->set(compact('consolePayments','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console Payment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consolePayment = $this->ConsolePayments->get($id, [
            'contain' => []
        ]);

        $this->set('consolePayment', $consolePayment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$value=10;
	 $this->viewBuilder()->layout('admin_layout');
        $consolePayment = $this->ConsolePayments->newEntity();
        if ($this->request->is('post')) {
            $consolePayment = $this->ConsolePayments->patchEntity($consolePayment, $this->request->getData());
            if ($this->ConsolePayments->save($consolePayment)) {
                $this->Flash->success(__('The console payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console payment could not be saved. Please, try again.'));
        }
        $this->set(compact('consolePayment','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$value=10;
	 $this->viewBuilder()->layout('admin_layout');
        $consolePayment = $this->ConsolePayments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consolePayment = $this->ConsolePayments->patchEntity($consolePayment, $this->request->getData());
            if ($this->ConsolePayments->save($consolePayment)) {
                $this->Flash->success(__('The console payment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console payment could not be saved. Please, try again.'));
        }
        $this->set(compact('consolePayment','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consolePayment = $this->ConsolePayments->get($id);
        if ($this->ConsolePayments->delete($consolePayment)) {
            $this->Flash->success(__('The console payment has been deleted.'));
        } else {
            $this->Flash->error(__('The console payment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
