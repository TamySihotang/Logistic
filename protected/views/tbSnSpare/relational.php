<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs = array(
    'Tb Sn Spares' => array('index'),
    $model->id_spare,
);
?>

<h1>View Spare <?php echo $model->aliasname; ?></h1>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'tb-sn-spare-grid',
    'type' => 'bordered condensed',
    'dataProvider' => $SnSpare->searchSpare($model->id_spare),
//	'filter'=>$model,
    'columns' => array(
        'idSpare.aliasname',
        'serial_number',
        array(
            'name'=>'Location',
            'value'=>'(tbOffice::model()->findByPk($data->id_office)->branch_office)'
            ),
//         array(
//                    'class'=>'CDataColumn',
//                    'type'=>'raw',
////                    'value'=>'CHtml::link($data->getStockOffice($data->id_spare), array("tbOffice/viewSummary&id=".$data->id_spare),array("target"=>"_blank"))',
//                        'value'=>'$data->getStockOffice($data->id_spare)',
//                    'header'=>_('Good Part'),
//                ), 
//        'idOffice.branch_office',
        'idStatusSpare.status',
        
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
<hr>