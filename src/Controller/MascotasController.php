<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Mascotas Controller
 *
 * @property \App\Model\Table\MascotasTable $Mascotas
 *
 * @method \App\Model\Entity\Mascota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MascotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        // $mascotas = $this->paginate($this->Mascotas);

        // $this->set(compact('mascotas'));

        $this->paginate = [
            'contain' => ['Duenos']
        ];

        $this->set('mascotas', $this->paginate($this->Mascotas));
    }

    /**
     * View method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => [],
        ]);

        $this->set('mascota', $mascota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add_mascota()
    {
        $mascota = $this->Mascotas->newEntity();
        if ($this->request->is('post')) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('La mascota ha sido agregada al usuario exitosamente.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La mascota no se pudo agregar. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('mascota'));
    }

    public function add($id_dueno){
        $mascota = $this->Mascotas->newEntity();
        $this->set(compact('id_dueno'));
        if ($this->request->is('post')) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('La mascota ha sido agregada al usuario exitosamente.'));
                return $this->redirect(['controller' => 'Duenos', 'action' => 'view', $id_dueno]);
            }
            $this->Flash->error(__('La mascota no pudo ser agregada. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('mascota'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('La información de la mascota ha sido actualizada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido actualizar la información. Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('mascota'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mascota = $this->Mascotas->get($id);
        if ($this->Mascotas->delete($mascota)) {
            $this->Flash->success(__('La mascota ha sido eliminada del registro.'));
        } else {
            $this->Flash->error(__('La mascota no pudo ser eliminada del registro. Por favor, intenténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
