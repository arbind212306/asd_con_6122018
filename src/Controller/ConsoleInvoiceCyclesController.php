<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsoleInvoiceCycles Controller
 *
 * @property \App\Model\Table\ConsoleInvoiceCyclesTable $ConsoleInvoiceCycles
 *
 * @method \App\Model\Entity\ConsoleInvoiceCycle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsoleInvoiceCyclesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$value=11;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceCycles = $this->ConsoleInvoiceCycles->find('all')->toArray();;

        $this->set(compact('consoleInvoiceCycles','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console Invoice Cycle id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->get($id, [
            'contain' => []
        ]);

        $this->set('consoleInvoiceCycle', $consoleInvoiceCycle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$value=11;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->newEntity();
        if ($this->request->is('post')) {
            $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->patchEntity($consoleInvoiceCycle, $this->request->getData());
            if ($this->ConsoleInvoiceCycles->save($consoleInvoiceCycle)) {
                $this->Flash->success(__('The console invoice cycle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console invoice cycle could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleInvoiceCycle','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console Invoice Cycle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {$value=11;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->patchEntity($consoleInvoiceCycle, $this->request->getData());
            if ($this->ConsoleInvoiceCycles->save($consoleInvoiceCycle)) {
                $this->Flash->success(__('The console invoice cycle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console invoice cycle could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleInvoiceCycle','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console Invoice Cycle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consoleInvoiceCycle = $this->ConsoleInvoiceCycles->get($id);
        if ($this->ConsoleInvoiceCycles->delete($consoleInvoiceCycle)) {
            $this->Flash->success(__('The console invoice cycle has been deleted.'));
        } else {
            $this->Flash->error(__('The console invoice cycle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
