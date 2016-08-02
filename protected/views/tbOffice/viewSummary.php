<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs = array(
    'Tb Sn Spares' => array('index'),
    $model->id_office,
);
?>

<h1>View Spare <?php echo $model->branch_office; ?></h1>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'tb-sn-spare-grid',
    'type' => 'bordered condensed',
    'dataProvider' => $SnSpare->searchOffice($model->id_office),
//	'filter'=>$model,
    'columns' => array(
        //'id_sn',
        'idOffice.branch_office',
        'idSpare.aliasname',
        'idStatusSpare.status',
        'serial_number',
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
<hr>