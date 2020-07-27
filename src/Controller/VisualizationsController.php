<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


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
       $this->productos_frecuentes();
        
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
        
        return $this->set(compact('productos_por_categoria'));
    }

    public function productos_proveedor(){ 
        $conn = ConnectionManager::get('default'); 
        $stmt = $conn->execute('SELECT id,name FROM providers');
        $productos_por_proveedor = $stmt ->fetchAll();
        $proveedores_mas_frecuencia = array();
        $product_provider = array();
        $cont = 0;
        for ($i = 0; $i < count($productos_por_proveedor); $i++) :
            $consulta = $conn->execute('SELECT id FROM products_purchases WHERE provider_id ='.$productos_por_proveedor[$i][0]);
            $product_provider[$cont] = $consulta ->fetchAll();
            //Agregar una columna de cantidad de productos a a proveedores
            array_push($productos_por_proveedor[$i],count($product_provider[$i]));
            //Se copia los productos a productos con mas frecuencia
            array_push($proveedores_mas_frecuencia, $productos_por_proveedor[$i]);
            $cont++;
        endfor;
        //proveedores mas frecuentes
        usort($proveedores_mas_frecuencia, [$this,'sort_by']);
        //los 6 primeros no vacios
        $proveedores_seleccionados = array();
        $limite = 0;
        if(count($proveedores_mas_frecuencia) < 5)
            $limite = count($proveedores_mas_frecuencia);
        else
            $limite = 5;
        for($i = 0; $i < $limite; $i++){
            if($proveedores_mas_frecuencia[$i][2] !== 0)
                array_push($proveedores_seleccionados, $proveedores_mas_frecuencia[$i]);
        }

        return $this->set(compact('productos_por_proveedor', 'proveedores_seleccionados'));
    } 

    public function productos_frecuentes(){
        $conn = ConnectionManager::get('default'); 
        $stmt = $conn->execute('SELECT id,name FROM products');
        $productos_frecuentes = $stmt ->fetchAll();
        $cantidad = array();
        $cont = 0;

        $suma = 0;
        for ($i = 0; $i < count($productos_frecuentes); $i++) :
            $consulta = $conn->execute('SELECT SUM(quantity) FROM products_purchases WHERE product_id = '.$productos_frecuentes[$i][0]);
            $cantidad[$cont] = $consulta ->fetchAll()[0];
            $suma = array_sum($cantidad);
            //Agregar una columna de cantidad de productos a a proveedores
            array_push($productos_frecuentes[$i],$cantidad[$i][0]);
            $cont++;
        endfor;
        //proveedores mas frecuentes
        usort($productos_frecuentes, [$this,'sort_by']);
        //los 6 primeros no vacios
        $productos_seleccionados = array();
        $limite = 0;
        if(count($productos_frecuentes) < 5)
            $limite = count($productos_frecuentes);
        else
            $limite = 5;
        for($i = 0; $i < $limite; $i++){
            if($productos_frecuentes[$i][2] !== 0 && $productos_frecuentes[$i][2] !== null)
                array_push($productos_seleccionados, $productos_frecuentes[$i]);
        }
        return $this->set(compact('productos_seleccionados'));
    }

    function sort_by($a, $b) {
        return $a[2] <= $b[2];
    }
}
