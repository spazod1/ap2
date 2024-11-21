<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Machines Controller
 *
 * @property \App\Model\Table\MachinesTable $Machines
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MachinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $machines = $this->paginate($this->Machines);

        $this->set(compact('machines'));
    }

    /**
     * View method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $machine = $this->Machines->get($id, [
            'contain' => ['Maintenances', 'Reservations'],
        ]);

        $this->set(compact('machine'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $machine = $this->Machines->newEmptyEntity();
        if ($this->request->is('post')) {
            $machine = $this->Machines->patchEntity($machine, $this->request->getData());
            if ($this->Machines->save($machine)) {
                $this->Flash->success(__('The machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The machine could not be saved. Please, try again.'));
        }
        $this->set(compact('machine'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $machine = $this->Machines->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $machine = $this->Machines->patchEntity($machine, $this->request->getData());
            if ($this->Machines->save($machine)) {
                $this->Flash->success(__('The machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The machine could not be saved. Please, try again.'));
        }
        $this->set(compact('machine'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $machine = $this->Machines->get($id);
        if ($this->Machines->delete($machine)) {
            $this->Flash->success(__('The machine has been deleted.'));
        } else {
            $this->Flash->error(__('The machine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function inventaire()
    {
        // Charger toutes les machines depuis la base de données
        $machines = $this->Machines->find('all')->toArray();

        // Passer les données des machines à la vue
        $this->set(compact('machines'));
    }
}
