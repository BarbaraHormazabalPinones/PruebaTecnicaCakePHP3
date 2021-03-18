<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\MascotasController;
use \src\Model\Entity\Mascota;
use Cake\ORM\TableRegistry;
use Illuminate\Http\Request;
use Cake\Datasource\ConnectionManager;


/**
 * Duenos Controller
 *
 * @property \App\Model\Table\DuenosTable $Duenos
 *
 * @method \App\Model\Entity\Dueno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DuenosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $duenos = $this->paginate($this->Duenos);

        $this->set(compact('duenos'));
    }

    /**
     * View method
     *
     * @param string|null $id Dueno id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dueno = $this->Duenos->get($id, [
            'contain' => [],
        ]);

        $mascotas = TableRegistry::getTableLocator()->get('Mascotas');
        $query = $mascotas
            ->find()
            ->select(['id','nombre', 'especie', 'raza', 'color', 'edad'])
            ->where(['id_dueno' => $id]);

        $this->set(compact('dueno', $dueno, 'query', $query));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dueno = $this->Duenos->newEntity();
        if ($this->request->is('post')) {
            $dueno = $this->Duenos->patchEntity($dueno, $this->request->getData());

            if ($this->Duenos->save($dueno)) {
                $this->Flash->success(__('Se ha creado un nuevo registro.'));

                return $this->redirect(['action' => 'view',$dueno->id]);
            }
            $this->Flash->error(__('El registro no pudo ser creado. Por favor, inténtelo otra vez.'));
        }
        $this->set(compact('dueno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dueno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dueno = $this->Duenos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dueno = $this->Duenos->patchEntity($dueno, $this->request->getData());
            if ($this->Duenos->save($dueno)) {
                $this->Flash->success(__('La información del dueño ha sido actualizada exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido actualizar la información. Por favor, intentélo de nuevo.'));
        }
        $this->set(compact('dueno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dueno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dueno = $this->Duenos->get($id);
        if ($this->Duenos->delete($dueno)) {
            $this->Flash->success(__('El dueño ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El dueño seleccionado no puso ser eliminado. Por favor, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
