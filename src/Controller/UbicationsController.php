<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class UbicationsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['index','mapProvidersProducts','mapUbicationProviders']); 

    }
    public function index()
    {   
        
    }
    public function mapProvidersProducts(){
        $this->products_purchases();
    }
    public function mapUbicationProviders(){
        
    }

    public function products_purchases() {
        $conn = ConnectionManager::get('default'); 

        $stmt = $conn->execute('SELECT purchases.date, purchases.id, departments.id FROM purchases JOIN providers ON providers.id = purchases.provider_id JOIN departments ON departments.id = providers.department_id ORDER BY date ASC');
        $purchases = $stmt ->fetchAll();
        //esta consulta es para cada purchase
        $mapa = array();
        for ($i = 0; $i < count($purchases); $i++) :
            $stmt = $conn->execute('SELECT products.name, quantity FROM products JOIN products_purchases ON products_purchases.product_id = products.id JOIN purchases ON purchases.id = products_purchases.purchase_id WHERE purchases.id = '.$purchases[$i][1]);
            $products_purchases = $stmt ->fetchAll();
            array_push($mapa, [$purchases[$i][2], $products_purchases, $purchases[$i][0]]);
            
        endfor;
        return $this->set(compact('mapa'));
    }
}
