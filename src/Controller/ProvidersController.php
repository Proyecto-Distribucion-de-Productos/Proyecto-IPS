<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Providers Controller
 *
 * @property \App\Model\Table\ProvidersTable $Providers
 * @method \App\Model\Entity\Provider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProvidersController extends AppController
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
        $this->paginate = ['limit'=>100,
            'contain' => ['Districts', 'Provinces', 'Departments'],
        ];
        $providers = $this->paginate($this->Providers);

        $this->set(compact('providers'));
    }

    /**
     * View method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $provider = $this->Providers->get($id, [
            'contain' => ['Districts', 'Provinces', 'Departments', 'Phones', 'ProductsPurchases', 'Purchases'],
        ]);

        $this->set(compact('provider'));
    }

}
