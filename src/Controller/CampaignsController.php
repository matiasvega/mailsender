<?php
namespace App\Controller;


use App\Controller\AppController;
use Cake\ORM\TableRegistry;

require ROOT . '/vendor/autoload.php';

require ROOT . '/vendor/Premailer/Premailer.class.php';

use Mailgun\Mailgun;
use Premailer;
//use Cake\Utility;

/**
 * Campaigns Controller
 *
 * @property \App\Model\Table\CampaignsTable $Campaigns
 */
class CampaignsController extends AppController
{
    
    public $helpers = array(
        'Googlechart'
    );
    
    
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients']
        ];
        $this->set('campaigns', $this->paginate($this->Campaigns));
        $this->set('_serialize', ['campaigns']);
    }

    /**
     * View method
     *
     * @param string|null $id Campaign id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $campaign = $this->Campaigns->get($id, [
            'contain' => ['Clients']
        ]);
        $this->set('campaign', $campaign);
        $this->set('_serialize', ['campaign']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
                        
        $campaign = $this->Campaigns->newEntity();
        if ($this->request->is('post')) {
//            dd($this->request->data);
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->data);
            // Muevo el archivo de temp al upload dir
            $uploadDir = WWW_ROOT . 'upload' . DS . 'recipients';
            $filename = md5($campaign['recipients_attach']['name'].  time()) . '-' . $campaign['recipients_attach']['name'];
            move_uploaded_file($campaign['recipients_attach']['tmp_name'], $uploadDir . DS . $filename);
            // Actualizo el valor del campo y quito el campo temporal
//            $campaign['recipients'] = $uploadDir . DS . $filename;
            $campaign['recipients_file'] = $uploadDir . DS . $filename;
            unset($campaign['recipients_attach']);
//            dd($campaign);
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->data);            
            if ($this->Campaigns->save($campaign)) {
                // Llamo al proceso batch que importa los datos de la campaña
//                $jobPid = shell_exec(sprintf('%s/bin/cake import import %s > %s/campaign_import_%s.log & echo $!', ROOT, $campaign->id, LOGS, $campaign->id));
                $jobPid = shell_exec(sprintf('%s/bin/cake import import %s & echo $!', ROOT, $campaign->id));
//                $campaignId = $campaign->id;
//                $this->set('campaignId');
                $this->setAction('postAdd', $campaign->id);
//                dd($jobPid);
                                                
//                
                // Cuando guardo la campaña, inserto los datos de los destinatarios
                // LLamo al proceso batch que importa los datos de los destinatarios
                
//                $campaign = $this->Campaigns->get($id);
//                $idCampaign = $campaign->id;
////                d($campaign->recipients);
//                $recipients = file($campaign->recipients_file);
                
                // Inserto los campos variables que describen a los destinataros
                // Siempre vienen en la linea 0 del archivo csv
                
////                dd($recipients);
//                $fields = explode(',',  array_shift($recipients));
////                d($fields);
////                dd($recipients);
//                foreach ($fields as $k => $dataField) {
//                    $data = array(  'name' => sprintf('field%s', $k+1),
//                                    'description' => $dataField,
//                                    'campaign_id' => $idCampaign
//                                );
////                    d($data);
//                    $fieldsTable = TableRegistry::get('Fields');
//                    $field = $fieldsTable->newEntity($data);
////                    dd($field);
////                    $field = TableRegistry::get('Fields')->patchEntity($field, $this->request->data);
//                    $fieldsTable->save($field);
//                }
                
//                dd('xxx');
                // Inserto los destinatarios
//                dd($recipients);
//                foreach ($recipients as $k => $recipientsData) {
//                    $recipientsData = explode(',', $recipientsData);
////                    dd($recipientsData);
//                    $data = array();
//                    foreach ($recipientsData as $key => $value){
//                        $data[sprintf('field%s', $key+1)] = $value;
//                        $data['campaign_id'] = $idCampaign;
//                        $data['state'] = 'registered';
//                    }
////                    dd($data);
//                    
//                    $recipientsTable = TableRegistry::get('Recipients');
//                    $recipient = $recipientsTable->newEntity($data);
//                    $recipientsTable->save($recipient);
////                    d($k);
////                    dd($recipientsData);
//                }
                
//                dd('xxx');                                
//                $this->Flash->success(__('The campaign has been saved.'));
//                return $this->redirect(['action' => 'postAdd']);
            } else {
                $this->Flash->error(__('The campaign could not be saved. Please, try again.'));
            }
        }
        
        $clients = $this->Campaigns->Clients->find('list', ['limit' => 200]);
        $this->set(compact('campaign', 'clients'));
        $this->set('_serialize', ['campaign']);
//        $this->layout = 'ajax';
    }
    
    public function postAdd($campaignId){
        // Creo la campaign y la lista de envio de mails        

        $campaign = $this->Campaigns->get($campaignId, [
            'contain' => ['Fields', 'Recipients']
        ]);

        $mgClient = new Mailgun('key-96a17b68b46c03a1ac9ade7ebf2ea239');
        $domain = "envios.plopcomunicaciones.com.ar";
        
        // Create a campaign on mailgun
        // Issue the call to the client.
        $result = $mgClient->post("$domain/campaigns", array(
            'name' => $campaign['name'],
            'id'   => sprintf("campaign_%s", $campaignId)
        ));

        // Create a mailing list on mailgun, the name of mailing list is the name input of campaing
        // Issue the call to the client.
        $result = $mgClient->post("lists", array(
            'address'     => sprintf('campaign_%s@envios.plopcomunicaciones.com.ar', $campaignId),
            'description' => sprintf('Mailing list of campaign: %s', $campaign['name'])
        ));
                                
        $this->set('campaignId', $campaignId);
        $this->layout = 'ajax';
    }

    /**
     * Edit method
     *
     * @param string|null $id Campaign id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $campaign = $this->Campaigns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->data);
            if ($this->Campaigns->save($campaign)) {
                $this->Flash->success(__('The campaign has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaign could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Campaigns->Clients->find('list', ['limit' => 200]);
        $this->set(compact('campaign', 'clients'));
        $this->set('_serialize', ['campaign']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Campaign id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $campaign = $this->Campaigns->get($id);
        if ($this->Campaigns->delete($campaign)) {
            $this->Flash->success(__('The campaign has been deleted.'));
        } else {
            $this->Flash->error(__('The campaign could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function getFields($id = null) {
        $campaign = $this->Campaigns->get($id, [
            'contain' => ['Fields']
        ]);
        
        $fields = array();
        foreach ($campaign['fields'] as $k => $field) {
//            $fields[$k]['id'] = $field['name'];
//            $fields[$k]['value'] = sprintf('[#%s]', $field['description']);
            
            
            $fields[] = array('id' => $field['name'], 'value' => sprintf('%%recipient.%s%%', str_replace(["\n","\r"],"",$field['description'])));
        }
//        dd($fields);
        $this->set('fields', $fields);        
        $this->layout = 'ajax';        
    }
    
    public function message() 
    {
        $campaign = $this->Campaigns->get($this->request->data['id'], [
            'contain' => ['Fields', 'Recipients']
        ]);
        
//        dd($campaign);
        
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $campaign = $this->Campaigns->patchEntity($campaign, $this->request->data);
            if ($this->Campaigns->save($campaign)) {
                
                $mgClient = new Mailgun('key-96a17b68b46c03a1ac9ade7ebf2ea239');
                $domain = "envios.plopcomunicaciones.com.ar";

                $campaignId = $campaign['id'];
                
                
//                 Add recipients to mailing list. REVISAR QUE SE DEBE AGREGAR DE A PAQUETES DE 1000!!!!!!        
                foreach ($campaign['recipients'] as $recipient){
                    foreach ($campaign['fields'] as $field) {
        //                if (strpos($campaign['subject'], sprintf('[#%s]', $field['description']))) {
        //                    $campaign['subject'] = str_replace(sprintf('[#%s]', $field['description']), $recipient[$field['name']], $campaign['subject']);                    
        //                }
        //                if (strpos($campaign['html'], sprintf('[#%s]', $field['description']))) {
        //                    $campaign['html'] = str_replace(sprintf('[#%s]', $field['description']), $recipient[$field['name']], $campaign['html']);
        //                }
                        $recipientFields[$field['description']] = $recipient[$field['name']];
                    }
                    // Add recipients to mailing list               
                    # Issue the call to the client.
                    $recipientToList[] = array(
                        'address'     => $recipient[$campaign['recipients_field']],
        //                'subscribed'  => true,
        //                'upsert'      => true,
        //                'vars'        => utf8_encode(json_encode($recipientFields, JSON_UNESCAPED_SLASHES))
                        'vars'        => $recipientFields
                    );

                }
        //        d($recipientToList);
                $mailingListRecipients = array(
                                                'members' => json_encode($recipientToList),
                                                'upsert' => true
                                                );

        //        dd($mailingListRecipients);
                $listAddress = sprintf('campaign_%s@envios.plopcomunicaciones.com.ar', $campaignId);

                // Add recipients to mailing list
                // Issue the call to the client.
                $result = $mgClient->post("lists/$listAddress/members.json", $mailingListRecipients);

//                d($result);
                
                
                $this->Flash->success(__('The campaign has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The campaign could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('campaign'));
        $this->set('_serialize', ['campaign']);
//        $this->layout = 'ajax';
    }
    
    public function send($id = null) 
    {
        $campaign = $this->Campaigns->get($id, [
            'contain' => ['Fields', 'Recipients']
        ]);               
//        $campaignId = $id;
//        dd($campaign);
        # Instantiate the client.
                       
        
//        d($recipientArray);
//        d();
        
//        d($recipientFields);
//        dd(json_encode($recipientFields));

//            dd($recipientArray);

            $mgClient = new Mailgun('key-96a17b68b46c03a1ac9ade7ebf2ea239');
            $domain = "envios.plopcomunicaciones.com.ar";        
            $listAddress = sprintf('campaign_%s@envios.plopcomunicaciones.com.ar', $id);
//            $result = $mgClient->post("lists/$listAddress/members", $recipientArray);
//            $result = $mgClient->post("lists/$listAddress/members.json", $recipientArray);            
//            d($result);        

        // Make a massage to each recipient REVISA LA LOGICA!!! LO PUEDE HACER MAILGUN DIRECTAMENTE!!!!!!!!!!!1


        
        // Send mail to recipients of mailing list
        // Make the call to the client.
        $html = sprintf('   <html xmlns="http://www.w3.org/1999/xhtml">
                               %s
                            </html>', trim($campaign['html']));    
//        d($campaign['html']);
        
        $html = $campaign['html'];
        
        $premailer = new Premailer($html);
//        dd($premailer);
        $html = $premailer->getConvertedHtml();
        
        // Busco las imagenes en el html para reemplazar el src y mandarlas adjuntas en el mail (inline)
        $doc = new \DOMDocument();
        @$doc->loadHTML($html);

        $imgs = $doc->getElementsByTagName('img');
        
//        d($imgs);
//        d($html);
        $inlinePath = array();        
        foreach ($imgs as $img) {
//               echo $img->getAttribute('src') . '<br>';
//               echo substr($img->getAttribute('src'), (strrpos($img->getAttribute('src'), '/')+1)) . '<br>';
               $inlinePath[] = sprintf("'%s'", $img->getAttribute('src'));
               $html = str_replace($img->getAttribute('src'), sprintf('cid:%s', substr($img->getAttribute('src'), (strrpos($img->getAttribute('src'), '/')+1))), $html);
               
        }   
//        d($inlinePath);
//        d($html);
//        dd('xxx');
//        dd($html);
        
        $result = $mgClient->sendMessage($domain, 
                array(
                    'from'    => sprintf('%s <%s>', $campaign['namefrom'], $campaign['mailfrom']),
                    'to'      => sprintf('<%s>', $listAddress),
                    'subject' => $campaign['subject'],
                    'text'    => $campaign['subject'],
                    'html'    => $html,
                    'o:campaign' => sprintf("campaign_%s", $id)
                ),
                array(
                    'inline' =>  implode(',', $inlinePath)
                )
        );
//        dd($html);
//        d($recipientFields);
//        d(json_encode($recipientFields));
//        dd($campaign);
        dd($result);
                
    }
    
    public function composeMessage() {
//        $this->set('fields', $fields);
        $this->layout = 'composer';        
    }
    
    public function attachImage() {        
        if ($this->request->is('post')) {
//            dd($this->request->data);
            // Muevo el archivo de temp al upload dir
            $image = $this->request->data;
            $uploadDir = WWW_ROOT . 'upload' . DS . 'imagesNewsletters';
            $filename = md5($image['image_attach']['name'].  time()) . '-' . $image['image_attach']['name'];
            move_uploaded_file($image['image_attach']['tmp_name'], $uploadDir . DS . $filename);
            $path = 'upload/imagesNewsletters' . DS . $filename;
            
//            d($this->request->data);
//            $this->set('data', $this->request->data);
            $this->set('path', $path);
        }
        $this->layout = 'ajax';
//        dd($this->Url->build('/', true));
    }
    
    public function template() {
        $this->layout = 'composer';
    }
    
    public function statistics($id = null) {
        if (!empty($id)) {
            $campaign = $this->Campaigns->get($id, [
                'contain' => ['Fields', 'Recipients']
            ]);        
            # Instantiate the client.
            $mgClient = new Mailgun('key-96a17b68b46c03a1ac9ade7ebf2ea239');
            $domain = 'envios.plopcomunicaciones.com.ar';
            $campaignId = sprintf("campaign_%s", $id);

            # Issue the call to the client.
            $generalStats = $mgClient->get("$domain/campaigns/$campaignId/stats", array(
    //            'groupby' => 'daily_hour',
    //            'limit'   => 2
            ));
            // Aperturas totales y unicas
            $opensByDays = $mgClient->get("$domain/campaigns/$campaignId/opens", array(
                'groupby' => 'day',
    //            'limit'   => 2
            ));

            $opens = array();
            foreach ($opensByDays->http_response_body as $opensByDay) {
                $opens[] = array(
                    'day' => date('Y-m-d', strtotime($opensByDay->day)),
                    'opens' => $opensByDay->total,
                    'uniqueOpens' => $opensByDay->unique->recipient,
                ); 
            }

            // Cliks
            $clicks = $mgClient->get("$domain/campaigns/$campaignId/clicks", array(
                'groupby' => 'recipient',
                'limit'   => 2
            ));
    //        dd($clicks);

    //        dd('xxx');
            $this->set('generalStats', $generalStats);
            $this->set('opensByDays', $opens);
            $this->set('campaign', $campaign);        
    //        $this->layout = 'dashboard';            
        } else {
            $query = $this->Campaigns->find('list', [
                'keyField' => 'id',
                'valueField' => 'name'
            ]);
            $campaigns = $query->toArray();
            dd($campaigns);
            $this->set('campaigns', $campaigns);
        }

    }
    
}
