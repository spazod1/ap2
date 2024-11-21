<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackagesUsers Controller
 *
 * @property \App\Model\Table\PackagesUsersTable $PackagesUsers
 * @method \App\Model\Entity\PackagesUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PackagesUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Packages'],
        ];
        $packagesUsers = $this->paginate($this->PackagesUsers);

        $this->set(compact('packagesUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Packages User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packagesUser = $this->PackagesUsers->get($id, [
            'contain' => ['Users', 'Packages'],
        ]);

        $this->set(compact('packagesUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packagesUser = $this->PackagesUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $packagesUser = $this->PackagesUsers->patchEntity($packagesUser, $this->request->getData());
            if ($this->PackagesUsers->save($packagesUser)) {
                $this->Flash->success(__('The packages user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packages user could not be saved. Please, try again.'));
        }
        $users = $this->PackagesUsers->Users->find('list', ['limit' => 200])->all();
        $packages = $this->PackagesUsers->Packages->find('list', ['limit' => 200])->all();
        $this->set(compact('packagesUser', 'users', 'packages'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Packages User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packagesUser = $this->PackagesUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packagesUser = $this->PackagesUsers->patchEntity($packagesUser, $this->request->getData());
            if ($this->PackagesUsers->save($packagesUser)) {
                $this->Flash->success(__('The packages user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packages user could not be saved. Please, try again.'));
        }
        $users = $this->PackagesUsers->Users->find('list', ['limit' => 200])->all();
        $packages = $this->PackagesUsers->Packages->find('list', ['limit' => 200])->all();
        $this->set(compact('packagesUser', 'users', 'packages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Packages User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packagesUser = $this->PackagesUsers->get($id);
        if ($this->PackagesUsers->delete($packagesUser)) {
            $this->Flash->success(__('The packages user has been deleted.'));
        } else {
            $this->Flash->error(__('The packages user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
