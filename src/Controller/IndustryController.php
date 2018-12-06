<?php
namespace App\Controller;
use Cake\Network\Request;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Industry Controller
 *
 * @property \App\Model\Table\IndustryTable $Industry
 *
 * @method \App\Model\Entity\Industry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IndustryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function manageIndustry()
    {$value = 6;
       $this->viewBuilder()->layout('admin_layout');
     $industry = $this->Industry->find('all')->contain(['BusinessUnit'])->toArray();


        $this->set(compact('industry','value'));
    }

    /**
     * View method
     *
     * @param string|null $id Industry id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {$value = 6;
$this->viewBuilder()->layout('admin_layout');
        $industry = $this->Industry->get($id, [
            'contain' => ['Businesses']
        ]);

        $this->set('industry', $industry);
        $this->set(compact('value'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addIndustry()
    {$value = 6;
$this->viewBuilder()->layout('admin_layout');

 $client_detail = TableRegistry::get('BusinessUnit');
      $businesses = $client_detail->find('all')->toArray();

        $industry = $this->Industry->newEntity();
        if ($this->request->is('post')) {
            $industry = $this->Industry->patchEntity($industry, $this->request->getData());
        
        //pr($industry);die;
        
            if ($this->Industry->save($industry)) {
                //$this->Flash->success(__('The industry has been saved.'));
$message = "Industry Unit has been  successfully inserted.";
        $this->Flash->set($message, ['element' => 'success']);
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The industry could not be saved. Please, try again.'));
        }
       
        $this->set(compact('industry', 'businesses','value'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Industry id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editIndustry($id = null)
    {
$value = 6;
$this->viewBuilder()->layout('admin_layout');
        
    
$businesses = $this->Industry->find('all')->where(['Industry.id'=>$id])->contain(['BusinessUnit']);



        if ($this->request->is(['patch', 'post', 'put'])) {
            $industry = $this->Industry->patchEntity($industry, $this->request->getData());
            if ($this->Industry->save($industry)) {
                $this->Flash->success(__('The industry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The industry could not be saved. Please, try again.'));
        }
      
        $this->set(compact('industry', 'businesses','value'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Industry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $industry = $this->Industry->get($id);
        if ($this->Industry->delete($industry)) {
            $this->Flash->success(__('The industry has been deleted.'));
        } else {
            $this->Flash->error(__('The industry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
