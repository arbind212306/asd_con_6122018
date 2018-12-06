<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsoleNoOfUser Controller
 *
 * @property \App\Model\Table\ConsoleNoOfUserTable $ConsoleNoOfUser
 *
 * @method \App\Model\Entity\ConsoleNoOfUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsoleNoOfUserController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {$value=12;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleNoOfUser = $this->ConsoleNoOfUser->find('all')->toArray();

        $this->set(compact('consoleNoOfUser','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Console No Of User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consoleNoOfUser = $this->ConsoleNoOfUser->get($id, [
            'contain' => []
        ]);

        $this->set('consoleNoOfUser', $consoleNoOfUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$value=12;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleNoOfUser = $this->ConsoleNoOfUser->newEntity();
        if ($this->request->is('post')) {
            $consoleNoOfUser = $this->ConsoleNoOfUser->patchEntity($consoleNoOfUser, $this->request->getData());
            if ($this->ConsoleNoOfUser->save($consoleNoOfUser)) {
                $this->Flash->success(__('The console no of user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console no of user could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleNoOfUser','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console No Of User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$value=12;
	 $this->viewBuilder()->layout('admin_layout');
        $consoleNoOfUser = $this->ConsoleNoOfUser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consoleNoOfUser = $this->ConsoleNoOfUser->patchEntity($consoleNoOfUser, $this->request->getData());
            if ($this->ConsoleNoOfUser->save($consoleNoOfUser)) {
                $this->Flash->success(__('The console no of user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The console no of user could not be saved. Please, try again.'));
        }
        $this->set(compact('consoleNoOfUser','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console No Of User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consoleNoOfUser = $this->ConsoleNoOfUser->get($id);
        if ($this->ConsoleNoOfUser->delete($consoleNoOfUser)) {
            $this->Flash->success(__('The console no of user has been deleted.'));
        } else {
            $this->Flash->error(__('The console no of user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
