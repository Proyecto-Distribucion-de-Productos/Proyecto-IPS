<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Measurements Controller
 *
 * @property \App\Model\Table\MeasurementsTable $Measurements
 * @method \App\Model\Entity\Measurement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeasurementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $measurements = $this->paginate($this->Measurements);

        $this->set(compact('measurements'));
    }
         public function logout()
{
    $this->Flash->success('You are now logged out.');
    return $this->redirect($this->Auth->logout());
}

    /**
     * View method
     *
     * @param string|null $id Measurement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $measurement = $this->Measurements->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set(compact('measurement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $measurement = $this->Measurements->newEmptyEntity();
        if ($this->request->is('post')) {
            $measurement = $this->Measurements->patchEntity($measurement, $this->request->getData());
            if ($this->Measurements->save($measurement)) {
                $this->Flash->success(__('The measurement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The measurement could not be saved. Please, try again.'));
        }
        $this->set(compact('measurement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Measurement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $measurement = $this->Measurements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $measurement = $this->Measurements->patchEntity($measurement, $this->request->getData());
            if ($this->Measurements->save($measurement)) {
                $this->Flash->success(__('The measurement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The measurement could not be saved. Please, try again.'));
        }
        $this->set(compact('measurement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Measurement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $measurement = $this->Measurements->get($id);
        if ($this->Measurements->delete($measurement)) {
            $this->Flash->success(__('The measurement has been deleted.'));
        } else {
            $this->Flash->error(__('The measurement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
