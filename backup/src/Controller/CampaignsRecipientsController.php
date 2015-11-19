<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CampaignsRecipients Controller
 *
 * @property \App\Model\Table\CampaignsRecipientsTable $CampaignsRecipients
 */
class CampaignsRecipientsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Campaigns', 'Recipients']
        ];
        $this->set('campaignsRecipients', $this->paginate($this->CampaignsRecipients));
        $this->set('_serialize', ['campaignsRecipients']);
    }

    /**
     * View method
     *
     * @param string|null $id Campaigns Recipient id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaignsRecipient = $this->CampaignsRecipients->get($id, [
            'contain' => ['Campaigns', 'Recipients']
        ]);
        $this->set('campaignsRecipient', $campaignsRecipient);
        $this->set('_serialize', ['campaignsRecipient']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $campaignsRecipient = $this->CampaignsRecipients->newEntity();
        if ($this->request->is('post')) {
            $campaignsRecipient = $this->CampaignsRecipients->patchEntity($campaignsRecipient, $this->request->data);
            if ($this->CampaignsRecipients->save($campaignsRecipient)) {
                $this->Flash->success(__('The campaigns recipient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaigns recipient could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->CampaignsRecipients->Campaigns->find('list', ['limit' => 200]);
        $recipients = $this->CampaignsRecipients->Recipients->find('list', ['limit' => 200]);
        $this->set(compact('campaignsRecipient', 'campaigns', 'recipients'));
        $this->set('_serialize', ['campaignsRecipient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaigns Recipient id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaignsRecipient = $this->CampaignsRecipients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaignsRecipient = $this->CampaignsRecipients->patchEntity($campaignsRecipient, $this->request->data);
            if ($this->CampaignsRecipients->save($campaignsRecipient)) {
                $this->Flash->success(__('The campaigns recipient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaigns recipient could not be saved. Please, try again.'));
            }
        }
        $campaigns = $this->CampaignsRecipients->Campaigns->find('list', ['limit' => 200]);
        $recipients = $this->CampaignsRecipients->Recipients->find('list', ['limit' => 200]);
        $this->set(compact('campaignsRecipient', 'campaigns', 'recipients'));
        $this->set('_serialize', ['campaignsRecipient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaigns Recipient id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaignsRecipient = $this->CampaignsRecipients->get($id);
        if ($this->CampaignsRecipients->delete($campaignsRecipient)) {
            $this->Flash->success(__('The campaigns recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The campaigns recipient could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
