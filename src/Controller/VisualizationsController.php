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
       $this->productos_proveedor();
        
    }
    public function productos_categorias(){ 
        $conn = ConnectionManager::get('default'); 
        $stmt = $conn->execute('SELECT * FROM categories');
        $productos_por_categoria = $stmt ->fetchAll();
        $products = array();
        $cont = 0;
        for ($i = 0; $i < count($productos_por_categoria); $i++) :
            $consulta = $conn->execute('SELECT * FROM products WHERE category_id ='.$productos_por_categoria[$i][0]);
            $products[$cont] = $consulta ->fetchAll();
            //Agregar una columna de cantidad de productos a a proveedores
            array_push($productos_por_categoria[$i],count($products[$i]));
            $cont++;
        endfor;
        //Productos mas frecuentes 



        return $this->set(compact('productos_por_categoria'));
    }

    public function productos_proveedor(){ 
        $conn = ConnectionManager::get('default'); 
        $stmt = $conn->execute('SELECT id,name FROM providers');
        $productos_por_proveedor = $stmt ->fetchAll();
        $product_provider = array();
        $cont = 0;
        for ($i = 0; $i < count($productos_por_proveedor); $i++) :
            $consulta = $conn->execute('SELECT id FROM products_purchases WHERE provider_id ='.$productos_por_proveedor[$i][0]);
            $product_provider[$cont] = $consulta ->fetchAll();
            //Agregar una columna de cantidad de productos a a proveedores
            array_push($productos_por_proveedor[$i],count($product_provider[$i]));
            $cont++;
        endfor;
        //proveedores mas frecuentes
        
        return $this->set(compact('productos_por_proveedor'));
    } 
}
