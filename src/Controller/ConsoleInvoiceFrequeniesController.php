<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsoleInvoiceFrequenies Controller
 *
 *
 * @method \App\Model\Entity\ConsoleInvoiceFrequeny[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsoleInvoiceFrequeniesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
		$value=9;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceFrequenies = $this->ConsoleInvoiceFrequenies->find('all')->toArray();;

        $this->set(compact('consoleInvoiceFrequenies','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console Invoice Frequeny id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->get($id, [
            'contain' => []
        ]);

        $this->set('consoleInvoiceFrequeny', $consoleInvoiceFrequeny);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$value=9;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->newEntity();
        if ($this->request->is('post')) {
            $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->patchEntity($consoleInvoiceFrequeny, $this->request->getData());
            if ($this->ConsoleInvoiceFrequenies->save($consoleInvoiceFrequeny)) {
                $this->Flash->success(__('The console invoice frequeny has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console invoice frequeny could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleInvoiceFrequeny','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console Invoice Frequeny id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$value=9;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->patchEntity($consoleInvoiceFrequeny, $this->request->getData());
            if ($this->ConsoleInvoiceFrequenies->save($consoleInvoiceFrequeny)) {
                $this->Flash->success(__('The console invoice frequeny has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console invoice frequeny could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleInvoiceFrequeny','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console Invoice Frequeny id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consoleInvoiceFrequeny = $this->ConsoleInvoiceFrequenies->get($id);
        if ($this->ConsoleInvoiceFrequenies->delete($consoleInvoiceFrequeny)) {
            $this->Flash->success(__('The console invoice frequeny has been deleted.'));
        } else {
            $this->Flash->error(__('The console invoice frequeny could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
