<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fields Controller
 *
 * @property \App\Model\Table\FieldsTable $Fields
 */
class FieldsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campaigns']
        ];
        $this->set('fields', $this->paginate($this->Fields));
        $this->set('_serialize', ['fields']);
    }

    /**
     * View method
     *
     * @param string|null $id Field id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => ['Campaigns']
        ]);
        $this->set('field', $field);
        $this->set('_serialize', ['field']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $field = $this->Fields->newEntity();
        if ($this->request->is('post')) {
            $field = $this->Fields->patchEntity($field, $this->request->data);
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The field could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->Fields->Campaigns->find('list', ['limit' => 200]);
        $this->set(compact('field', 'campaigns'));
        $this->set('_serialize', ['field']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Field id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $field = $this->Fields->patchEntity($field, $this->request->data);
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The field could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->Fields->Campaigns->find('list', ['limit' => 200]);
        $this->set(compact('field', 'campaigns'));
        $this->set('_serialize', ['field']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Field id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $field = $this->Fields->get($id);
        if ($this->Fields->delete($field)) {
            $this->Flash->success(__('The field has been deleted.'));
        } else {
            $this->Flash->error(__('The field could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
