<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;

/**
 * ProductsPurchases Controller
 *
 * @property \App\Model\Table\ProductsPurchasesTable $ProductsPurchases
 * @method \App\Model\Entity\ProductsPurchase[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsPurchasesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Purchases', 'Providers', 'Products'],
        ];
        $productsPurchases = $this->paginate($this->ProductsPurchases);

        $this->set(compact('productsPurchases'));
    }
         public function logout()
{
    $this->Flash->success('You are now logged out.');
    return $this->redirect($this->Auth->logout());
}

    /**
     * View method
     *
     * @param string|null $id Products Purchase id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsPurchase = $this->ProductsPurchases->get($id, [
            'contain' => ['Purchases', 'Providers', 'Products'],
        ]);

        $this->set(compact('productsPurchase'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsPurchase = $this->ProductsPurchases->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsPurchase = $this->ProductsPurchases->patchEntity($productsPurchase, $this->request->getData());
            if ($this->ProductsPurchases->save($productsPurchase)) {
                $this->Flash->success(__('The products purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products purchase could not be saved. Please, try again.'));
        }
        $purchases = $this->ProductsPurchases->Purchases->find('list', ['limit' => 200]);
        $providers = $this->ProductsPurchases->Providers->find('list', ['limit' => 200]);
        $products = $this->ProductsPurchases->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsPurchase', 'purchases', 'providers', 'products'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Purchase id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsPurchase = $this->ProductsPurchases->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsPurchase = $this->ProductsPurchases->patchEntity($productsPurchase, $this->request->getData());
            if ($this->ProductsPurchases->save($productsPurchase)) {
                $this->Flash->success(__('The products purchase has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products purchase could not be saved. Please, try again.'));
        }
        $purchases = $this->ProductsPurchases->Purchases->find('list', ['limit' => 200]);
        $providers = $this->ProductsPurchases->Providers->find('list', ['limit' => 200]);
        $products = $this->ProductsPurchases->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsPurchase', 'purchases', 'providers', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Purchase id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsPurchase = $this->ProductsPurchases->get($id);
        if ($this->ProductsPurchases->delete($productsPurchase)) {
            $this->Flash->success(__('The products purchase has been deleted.'));
        } else {
            $this->Flash->error(__('The products purchase could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
