<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Markets Controller
 *
 * @property \App\Model\Table\MarketsTable $Markets
 *
 * @method \App\Model\Entity\Market[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $markets = $this->paginate($this->Markets);

        $this->set(compact('markets'));
    }

    /**
     * View method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $market = $this->Markets->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('market', $market);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $market = $this->Markets->newEmptyEntity();
        $user_id = $this->Auth->user()['user_id'];
        if ($this->request->is('post')) {
            $market = $this->Markets->patchEntity($market, $this->request->getData());
            if ($this->Markets->save($market)) {
                $this->Flash->success(__('The market has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market could not be saved. Please, try again.'));
        }
        // $users = $this->Markets->Users->find('list', ['limit' => 200]);
        // $this->set(compact('market', 'users'));
        // debug( $this->request->getSession()->read( 'Auth' ));
        // debug( $this->Auth->user());
        // $user_id = $this->Auth->user()['user_id'];
        $this->set(compact('market', 'user_id'));
        $this->set( '_serialize' , [ 'market' ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $market = $this->Markets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $market = $this->Markets->patchEntity($market, $this->request->getData());
            if ($this->Markets->save($market)) {
                $this->Flash->success(__('The market has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market could not be saved. Please, try again.'));
        }
        $users = $this->Markets->Users->find('list', ['limit' => 200]);
        $this->set(compact('market', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $market = $this->Markets->get($id);
        if ($this->Markets->delete($market)) {
            $this->Flash->success(__('The market has been deleted.'));
        } else {
            $this->Flash->error(__('The market could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
