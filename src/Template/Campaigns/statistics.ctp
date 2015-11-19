<?= 
    $this->Html->script(['https://www.google.com/jsapi']);       
d($campaigns);  


?>




<div class="col-lg-12">
    <h1 class="page-header">
        <?= __('Campaign Statistics') ?>
        <small> <?php echo sprintf('Statistics to campaign %s', $campaign['name']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <?= $this->html->link('Campaigns', '/campaigns/index'); ?>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> <?= __('Campaign Statistics') ?>
        </li>
    </ol>
    
    
    
    <div class="campaigns form large-10 medium-9 columns">
        <div id="statisticsTable">
        <?php

            $html[] = '<table class="table table-bordered table-hover table-striped">';
            $html[] = $this->Html->tableCells([
                    ['Fecha de Envio', $campaign['startDate']],
                    ['Total de Suscriptores', count($campaign['recipients'])],
                    ['Emails enviados', $generalStats->http_response_body->total->sent],
                    ['Rebotes', $generalStats->http_response_body->total->dropped],
                    ['Emails entregados', $generalStats->http_response_body->total->delivered],
                    ['Aperturas totales', $generalStats->http_response_body->total->opened],
                    ['Aperturas únicas', $generalStats->http_response_body->unique->opened->recipient],
                
                ],
                    ['class' => 'table table-hover table-striped']
                );
            $html[] = '</table>';
        
            echo implode("\n", $html);
            
            $dataColumnChart = array();
            $dataColumnChart['options']['title'] = 'General Statistics';
            $dataColumnChart['divContenedor']= 'columnChartDiv';
            $dataColumnChart['tipoGrafica'] = 'ColumnChart';
            $dataColumnChart['options']['width'] = '750';
            $dataColumnChart['options']['height'] = '300';
            $dataColumnChart['items'] = [
                    ["'Item'", "'Cantidad'"],
                    ["'Total de Suscriptores'", count($campaign['recipients'])],
                    ["'Emails enviados'", $generalStats->http_response_body->total->sent],
                    ["'Rebotes'", $generalStats->http_response_body->total->dropped],
                    ["'Emails entregados'", $generalStats->http_response_body->total->delivered],
                    ["'Aperturas totales'", $generalStats->http_response_body->total->opened],
                    ["'Aperturas únicas'", $generalStats->http_response_body->unique->opened->recipient],
            ];
            
            $dataLineChart = array();
            $dataLineChart['options']['title'] = 'Opens by Days';
            $dataLineChart['divContenedor']= 'lineChartDiv';
            $dataLineChart['tipoGrafica'] = 'LineChart';
            $dataLineChart['items'] = [
                    ["'Día'", "'Total Aperturas'", "'Aperturas Únicas'"],
            ];
            
            foreach ($opensByDays as $opensByDay) {
//                dd($day);
                $dataLineChart['items'][] = array (sprintf("'%s'", $opensByDay['day']), $opensByDay['opens'], $opensByDay['uniqueOpens']);
            }
            
//            d($dataLineChart);
            
            
//            d($opensByDays);
//            dd($dataGrafica);
            
//            d($generalStats);
//            d($campaign);
//            d($generalStats->http_response_body->total);
        ?>            
        </div>
        <div id="columnChartDiv"> </div>      
    </div>    
    <div id="lineChartDiv"> </div>
</div>

<?php 
    echo $this->Googlechart->paint($dataColumnChart);
    echo $this->Googlechart->paint($dataLineChart);
?>

<style>
    #statisticsTable {
        float:left;
        width:30%;
        max-width:50%;
    }
    #columnChartDiv {
        float:left;
        width:70%;
        max-width:70%;
    }
    #lineChartDiv {
        clear: both;
    }
</style>