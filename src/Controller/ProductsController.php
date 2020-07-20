<?php
declare(strict_types=1);

namespace App\Controller;


/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['index']); 

    }
    public function index()
    {   
        $this->paginate = [
            'contain' => ['Categories', 'Measurements'],
        ];
        $products = $this->paginate($this->Products);
        $categories = $this->Products->Categories->find('all', ['limit' => 200]);

        $this->set(compact('products', 'categories'));
    }
    
    
    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Categories', 'Measurements', 'Purchases'],
        ]);

        $this->set(compact('product'));
    }

}
