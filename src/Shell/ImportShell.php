<?php

namespace App\Shell;

use Cake\Console\Shell;

class ImportShell extends Shell {
    public function main(){
        $this->out("Loader of recipients");
    }
    
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Campaigns');
    }
    
    public function import($id){
           $campaign = $this->Campaigns->get($id);
           $recipients = file($campaign->recipients_file);
            // Inserto los campos variables que describen a los destinataros
            // Siempre vienen en la linea 0 del archivo csv
           $fields = explode(',',  array_shift($recipients));
           
            foreach ($fields as $k => $dataField) {
                 $data = array(  'name' => sprintf('field%s', $k+1),
                                 'description' => $dataField,
                                 'campaign_id' => $campaign->id
                             );
            //                    d($data);
            //                 $fieldsTable = TableRegistry::get('Fields');
                 $field = $this->Campaigns->Fields->newEntity($data);
            //                    dd($field);
            //                    $field = TableRegistry::get('Fields')->patchEntity($field, $this->request->data);
                 $this->Campaigns->Fields->save($field);
            }
            
            // Inserto los datos de los destinatarios
            foreach ($recipients as $k => $recipientsData) {
                $recipientsData = explode(',', $recipientsData);
//                    dd($recipientsData);
                $data = array();
                foreach ($recipientsData as $key => $value){
                    $data[sprintf('field%s', $key+1)] = $value;
                    $data['campaign_id'] = $campaign->id;
                    $data['state'] = 'registered';
                }
//                    dd($data);

//                $recipientsTable = TableRegistry::get('Recipients');
                $recipient = $this->Campaigns->Recipients->newEntity($data);
                $this->Campaigns->Recipients->save($recipient);
//                    d($k);
//                    dd($recipientsData);
            }
           
           
           $this->out(print_r($campaign->recipients_file, true));
    }
    
}