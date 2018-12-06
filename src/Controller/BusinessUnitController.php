<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusinessUnit Controller
 *
 * @property \App\Model\Table\BusinessUnitTable $BusinessUnit
 *
 * @method \App\Model\Entity\BusinessUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessUnitController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function manageBusinessUnit()
    {$value = 5;
        $this->viewBuilder()->layout('admin_layout');
		$businessUnit = $this->BusinessUnit->find('all');

        $this->set(compact('businessUnit','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Business Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->viewBuilder()->layout('admin_layout');
        $businessUnit = $this->BusinessUnit->get($id, [
            'contain' => []
        ]);

        $this->set('businessUnit', $businessUnit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addBusinessUnit()
    {$value = 5;
		$this->viewBuilder()->layout('admin_layout');
        $businessUnit = $this->BusinessUnit->newEntity();
        if ($this->request->is('post')) {
            $businessUnit = $this->BusinessUnit->patchEntity($businessUnit, $this->request->getData());
            if ($this->BusinessUnit->save($businessUnit)) {
                $this->Flash->success(__('The business unit has been saved.'));

				$message = "Record has been successfully insert";
        $this->Flash->set($message, ['element' => 'success']);
                //return $this->redirect(['action' => 'index']);
            }
			
            $this->Flash->error(__('The business unit could not be saved. Please, try again.'));
        }
        $this->set(compact('businessUnit','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editBusinessUnit($id = null)
    {$value = 5;
		$this->viewBuilder()->layout('admin_layout');
        $businessUnit = $this->BusinessUnit->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessUnit = $this->BusinessUnit->patchEntity($businessUnit, $this->request->getData());
            if ($this->BusinessUnit->save($businessUnit)) {
                $this->Flash->success(__('The business unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business unit could not be saved. Please, try again.'));
        }
        $this->set(compact('businessUnit','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessUnit = $this->BusinessUnit->get($id);
        if ($this->BusinessUnit->delete($businessUnit)) {
            $this->Flash->success(__('The business unit has been deleted.'));
        } else {
            $this->Flash->error(__('The business unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
