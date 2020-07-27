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
        
    }
    public function mapUbicationProviders(){
        
    }
    
    
}
