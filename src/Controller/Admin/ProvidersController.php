<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;

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

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $provider = $this->Providers->newEmptyEntity();
        if ($this->request->is('post')) {
            $provider = $this->Providers->patchEntity($provider, $this->request->getData());

            //Recuperar datos de Sunat
            
            $cookie = array(
                'cookie'        => array(
                    'use'       => true,
                    'file'      => __DIR__ . "/cookie.txt"
                )
            );
            $config = array(
                'representantes_legales'    => true,
                'cantidad_trabajadores'     => true,
                'establecimientos'          => true,
                'cookie'                    => $cookie
            );
            $sunat = new \Sunat\ruc( $config );
            
            $ruc = $_POST['ruc'];
            
            $search = $sunat->consulta( $ruc );
            
            if( $search->success == true )
            {
                $nombre = $search->result->razon_social;
                $direccion = $search->result->direccion;
                //Nuevos valores
                $estado = $search->result->estado;
                //Cambio de valores en la cascara
                $provider->name = $nombre;
                $provider->direction = $direccion;
                $provider->ruc = $ruc;

                if ($this->Providers->save($provider)) {
                    $this->Flash->success(__('El proveedor ha sido guardado.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('El proveedor no pudo ser guardado, Intente de nuevo.'));



            }else{
                $this->Flash->success(__('No existe el ruc'));
            }
        }
        $districts = $this->Providers->Districts->find('list', ['limit' => 200]);
        $provinces = $this->Providers->Provinces->find('list', ['limit' => 200]);
        $departments = $this->Providers->Departments->find('list', ['limit' => 200]);
        $this->set(compact('provider', 'districts', 'provinces', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $provider = $this->Providers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $provider = $this->Providers->patchEntity($provider, $this->request->getData());
            if ($this->Providers->save($provider)) {
                $this->Flash->success(__('El proveedor ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El proveedor no pudo ser guardado, Intente de nuevo.'));
        }
        $districts = $this->Providers->Districts->find('list', ['limit' => 200]);
        $provinces = $this->Providers->Provinces->find('list', ['limit' => 200]);
        $departments = $this->Providers->Departments->find('list', ['limit' => 200]);
        $this->set(compact('provider', 'districts', 'provinces', 'departments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Provider id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        //$provider = $this->Providers->get($id);
        $provider = $this->Providers->get($id, [
            'contain' => ['ProductsPurchases'],
        ]);

        if (count($provider->products_purchases) == 0) {
            if ($this->Providers->delete($provider)) {
                $this->Flash->success(__('El proveedor ha sido eliminado.'));
            } else {
                $this->Flash->error(__('El proveedor no pudo ser eliminado, Intente de nuevo.'));
            }
        }else{
            $this->Flash->error(__('No se pudo eliminar, el proveedor tiene productos relacionados.'));

        }

        return $this->redirect(['action' => 'index']);
    }
}
