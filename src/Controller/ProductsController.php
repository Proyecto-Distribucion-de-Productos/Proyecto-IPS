<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


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
        $this->Auth->allow(['index','view']); 

    }
    public function index()
    {   
        $this->paginate = ['limit'=>9,
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
        $categories = $this->Products->Categories->find('all', ['limit' => 200]);
      
        $conn = ConnectionManager::get('default');
        $query = array();
        $cont = 0;
        $provider_id = -1;

        foreach ($product->purchases as $purchases) :
            if($provider_id != $purchases->provider_id){
                $provider_id = $purchases->provider_id;
                $stmt = $conn->execute('SELECT DISTINCT * FROM providers WHERE id ='.$provider_id);
                $query[$cont] = $stmt ->fetchAll()[0];
                $cont++;
            }
        endforeach;
        $this->set(compact('product','query','categories'));
    }

}
