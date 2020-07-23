<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VisualizationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['index','circular']); 

    }
    public function index()
    {   
       $this->productos_categorias();
       //$this->set(compact('w'));
        
    }
    public function productos_categorias(){ 
        $conn = ConnectionManager::get('default'); 
        $stmt = $conn->execute('SELECT * FROM categories');
        $categories = $stmt ->fetchAll();
        $productos = array();
        $cont = 0;
        for ($i = 0; $i < count($categories); $i++) :
            $consulta = $conn->execute('SELECT * FROM products WHERE category_id ='.$categories[$i][0]);
            $productos[$cont] = $consulta ->fetchAll();
            $cont++;
        endfor;
        return $this->set(compact('categories','productos'));
    }
    
}
