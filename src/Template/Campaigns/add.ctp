<?php

$urlGetFields = $this->Url->build([
    "controller" => "Campaigns",
    "action" => "getFields",
//    true
]);

$urlSetMessage = $this->Url->build([
    "controller" => "Campaigns",
    "action" => "message",
//    true
]);

$urlCampaings = $this->Url->build([
    "controller" => "Campaigns",
    "action" => "index",
//    true
]);

$urlComposeMessage = $this->Url->build([
    "controller" => "Campaigns",
    "action" => "composeMessage",
//    true
]);

?>
<!--<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</div>-->






<div class="col-lg-12">
    <h1 class="page-header">
        <?= __('Add Campaign') ?>
        <small> Create a new campaign </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <?= $this->html->link('Campaigns', '/campaigns/index'); ?>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> <?= __('Add Campaign') ?>
        </li>
    </ol>
    
    <div class="campaigns form large-10 medium-9 columns">
        
        <?= $this->Form->create($campaign, [
                                            'enctype' => 'multipart/form-data', 
                                            'align' => [
                                                'sm' => [
                                                    'left' => 6,
                                                    'middle' => 6,
                                                    'right' => 12
                                                ],
                                                'md' => [
                                                    'left' => 4,
                                                    'middle' => 4,
                                                    'right' => 4
                                                ]
                                            ],
                                            'id' => 'addCampaignForm',
                                            'class' => 'form-horizontal'
                                            
            ]) ?>
        <!--<fieldset>-->
        <div id="rootwizard">
            <ul>
                    <li><a href="#tab1" data-toggle="tab"> Data </a></li>
                    <li><a href="#tab2" data-toggle="tab"> Recipients</a></li>
                    <li><a href="#tab3" data-toggle="tab"> Message </a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    
                    
                    <?php
//                        $this->Form->templates([
//                            'inputContainer' => '<div class="control-group">{{content}}</div>'
//                        ]);
                        
//                        $this->Form->templates([
//                            'inputFormGroup' => '<div class="control-group">{{label}}{{input}}</div>'
//                        ]);
                    
                        echo $this->Form->input('client_id', ['options' => $clients]);
                        echo $this->Form->input('name'/*, ['type' => 'textarea']*/);
//                        echo '  <script type="text/javascript">
//                                        CKEDITOR.replace(\'name\');
//                                        console.log(\'name\');
//                                </script>';
                        echo $this->Form->input('namefrom');
                        echo $this->Form->input('mailfrom');
                        echo $this->Form->input('response_to');
                        //            echo $this->Form->input('subject');
                        echo $this->Form->input('startDate');
//                        echo $this->Form->input('endDate');
                        
                        //            echo $this->Form->input('html');
                        
                    ?>
                    
                    
                                        
<!--                        <div class="control-group">                        
                            <label class="control-label" for="email">Email</label>
                            <div class="controls">
                              <input type="text" id="emailfield" name="emailfield" class="required email">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="name">Name</label>
                            <div class="controls">
                              <input type="text" id="namefield" name="namefield" class="required">
                            </div>
                        </div>-->
                                        
                </div>
                
                
                <div class="tab-pane" id="tab2">
                    <?php
                        echo $this->Form->input('recipients_attach', ['type' => 'file']);                    
                    ?>
<!--                    <div class="control-group">
                      <label class="control-label" for="url">URL</label>
                      <div class="controls">
                        <input type="text" id="urlfield" name="urlfield" class="required url">
                      </div>
                    </div>-->
                </div>
                
                <div class="tab-pane" id="tab3">
                    <h2> Configure your newsletter </h2>
                    <?php
//                        $fields = array();
//                        foreach ($campaign['fields'] as $field) {
//                            $fields[$field['name']] = sprintf('[#%s]', $field['description']);
//                        }
                        
                        echo '<div id="tags"> Podés usar las siguientes variables en tu plantilla para personalizar el envió: .</div>';

                        echo $this->Form->input('subject');
                        echo $this->Form->input('html', ['type' => 'text', 'id' => 'html']);
                        
                        echo sprintf('<div id="message"> Newsletter Design </div>');
//                        echo $this->Form->select('recipients_field', array(), ['empty' => 'Select email field', 'id' => 'recipientsField', 'label' => 'form-group']);
                        echo $this->Form->input('recipients_field', [   'empty' => 'Select email field', 
                                                                        'id' => 'recipientsField', 
                                                                        'label' => 'Selecciona el campo que contiene las direcciones de mail',
                                                                        'type' => 'select'
                                                                    ]
                                                );
                        echo $this->Form->input('id', [
                            'type' => 'hidden',
                            'id' => 'idCampaing'
                        ]);
                    ?>
                </div>
                
                <ul class="pager wizard">
                    <li class="previous first"><a href="javascript:;">First</a></li>
                    <li class="previous"><a href="javascript:;">Previous</a></li>
                    <li class="next last"><a href="javascript:;">Last</a></li>
                    <li class="next"><a href="javascript:;">Next</a></li>
                    <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>              
                </ul>
                
            </div>
        </div>

        <!--</fieldset>-->
        <?php // $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>    
    
</div>

<div id="myModal" class="modal fade"> <?php echo $this->Html->image('loading.gif', ['alt' => 'PLOP']); ?> </div>


  <!-- Div Modal to load composer message view -->
  <div class="modal fade" id="divComposerHtml" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Newsletter Design </h4>
        </div>
        <div class="modal-body" id="htmlDesign">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!--<form id="commentForm" method="get" action="" class="form-horizontal">
    <div id="rootwizard">
            <ul>
                    <li><a href="#tab1" data-toggle="tab"> Data </a></li>
                    <li><a href="#tab2" data-toggle="tab"> Recipients</a></li>
                    <li><a href="#tab3" data-toggle="tab"> Message </a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="tab1">
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <div class="controls">
                          <input type="text" id="emailfield" name="emailfield" class="required email">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                          <input type="text" id="namefield" name="namefield" class="required">
                        </div>
                      </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="control-group">
                                <label class="control-label" for="url">URL</label>
                                <div class="controls">
                                  <input type="text" id="urlfield" name="urlfield" class="required url">
                                </div>
                              </div>
                </div>
                    <div class="tab-pane" id="tab3">
                            3
                </div>
                    <ul class="pager wizard">
                            <li class="previous first" style="display:none;"><a href="#">First</a></li>
                            <li class="previous"><a href="#">Previous</a></li>
                            <li class="next last" style="display:none;"><a href="#">Last</a></li>
                            <li class="next"><a href="#">Next</a></li>
                    </ul>
            </div>
    </div>
</form>-->


<script>
    $(document).ready(function() {
        
            $('#message').click(function() {
                console.log('composer message');               
//                $.ajax({
////                   type: 'POST',
//                   url: "<?php // echo sprintf("%s", $urlComposeMessage); ?>",
////                   data: 1,
//                   cache:false,
//                   processData: false,
//                   success: function(data,textStatus,xhr){
//                           console.log(textStatus);
//                           $("#divComposerHtml").html(data);
//                           $("#divComposerHtml").modal("show");
//                   },
//                   error: function(xhr,textStatus,error){
//                       console.log('error: ' + textStatus);
//                   }
//                });                 
//                console.log('lalalala');
//                $("#divComposerHtml").load("<?php // echo sprintf("%s", $urlComposeMessage); ?>");
                $("#htmlDesign").load("<?php echo sprintf("%s", $urlComposeMessage); ?>");
                $("#divComposerHtml").modal({
                    keyboard: true
                });
            });




            var $validator = $("#addCampaignForm").validate({
              rules: {
                emailfield: {
                  required: true,
                  email: true,
                  minlength: 3
                },
                namefield: {
                  required: true,
                  minlength: 3
                },
                urlfield: {
                  required: true,
                  minlength: 3,
                  url: true
                }
              }
            });

//            $('#rootwizard').bootstrapWizard({
//                    'tabClass': 'nav nav-pills',
//                    'onNext': function(tab, navigation, index) {
//                            var $valid = $("#addCampaignForm").valid();
//                            if(!$valid) {
//                                    $validator.focusInvalid();
//                                    return false;
//                            }
//                    }
//            });


            $('#rootwizard').bootstrapWizard({
                onNext: function(tab, navigation, index) {
//                        console.log(index);
                        var $valid = $("#addCampaignForm").valid();
                        if(!$valid) {
                                $validator.focusInvalid();
                                return false;
                        }
                                                
                        if (index==2) {                            
                            var formData = new FormData($("#addCampaignForm")[0]);                                                        
//                            console.log(formData);
                            //get form action
                            var formUrl = $("#addCampaignForm").attr('action');
//                            console.log(formUrl);                            
                            $("#myModal").modal('show');
                            $.ajax({
                                type: 'POST',
                                url: formUrl,
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache:false,
                                success: function(data,textStatus,xhr){
                                        var campaignId = data;
                                        console.log(campaignId);
                                        var formUrl = "<?php echo sprintf("%s", $urlGetFields); ?>" + '/' + campaignId;
                                        $('#idCampaing').val(campaignId);
//                                        console.log(formUrl);
//                                        console.log(campaignId);
//                                        var x = getFields(campaignId);
//                                        console.log(x);                                        
                                        $.ajax({
                                            type: 'POST',
                                            url: formUrl,
                                            data: campaignId,
                                            cache:false,
                                            dataType : 'json',
                                            processData: false,
//                                            contentType: false,
                                            success: function(data,textStatus,xhr){
            //                                      console.log('exito');
//                                                    console.log(data);
                                                    console.log(textStatus);
//                                                  var fields = jQuery.parseJSON(data);
//                                                  console.log(fields);

//                                                    var fields = $.parseJSON(data);
//                                                    console.log(fields);
//                                                  console.log(fields.length);
                                                    $("#myModal").modal('hide');
                                                  var fields = data;
                                                  // Set fields in combobox for selection
//                                                  recipientsField
                                                    console.log(fields);
                                                    var fieldItems = "";
                                                    var fieldsText = [];
                                                    for (var i = 0; i < fields.length; i++){
                                                      console.log(fields[i]);
                                                      fieldItems+= "<option value='" + fields[i].id + "'>" + fields[i].value + "</option>";
                                                      fieldsText.push(fields[i].value);
                                                    }
                                                    console.log(fieldsText);
                                                    $("#recipientsField").html(fieldItems);
                                                    $("#blackFields").html(fieldsText.join());
                                                    $("#tags").append('<p>' + fieldsText.join() + '</p>');
                                            },
                                            error: function(xhr,textStatus,error){
                //                                alertPnotify("error", "ERROR", textStatus);
                                                console.log('error: ' + textStatus);
                                            }
                                        });                             
                                        
                                      
                                },
                                error: function(xhr,textStatus,error){
    //                                alertPnotify("error", "ERROR", textStatus);
                                    console.log('error: ' + textStatus);
                                }
                            });
                        }
                        
                        
                        
                        
                        
                },                
                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index+1;
                    var $percent = ($current/$total) * 100;
                    $('#rootwizard').find('.bar').css({width:$percent+'%'});
                    
                    if($current >= $total) {
			$('#rootwizard').find('.pager .next').hide();
			$('#rootwizard').find('.pager .finish').show();
			$('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                    }                    
                }
            });
            $('#rootwizard .finish').click(function() {
                    console.log($("#addCampaignForm").attr('action'));
                    $("#addCampaignForm").attr('action', '<?php echo $urlSetMessage; ?>');
                    console.log($("#addCampaignForm").attr('action'));
                    $("#addCampaignForm").submit();
//                    alert('Finished!, Starting over!');
//                    $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });

            window.prettyPrint && prettyPrint()
    });
</script>

<style>
    #myModal {
        text-align: center;
        width: 100%;
    }
    
    #tags {
        width: 100%;
        margin-bottom: 10px;
        1background-color: orange;
    }
    
    #blackFields {
        width: 80%;
        font-weight: bold;
    }
    
    #message {
        margin-left:25%;
        cursor: pointer;
        margin-bottom:25px;
        background-color: red;
        width:500px;
        height:250px;
        background-image: url(../img/newsletter.jpg);
        background-repeat: no-repeat;
        color: #003f54;
        font-size: 5em;
        text-align: center;
        font-weight: bold;       
    }
    
    #divComposerHtml {
        display: none;        
        width: 100%;
        margin: 0;
    }
    
    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 0px solid transparent;
    }

    
</style>