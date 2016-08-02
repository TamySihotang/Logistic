<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs = array(
    'Tb Sn Spares' => array('index'),
    $model->id_sn,
);

$this->menu=array(
    array('label'=>'Create Serial Number', 'url'=>'http://localhost/logistic_nec4/index.php?r=tbSpare/admin'),
    array('label'=>'Create Sparepart', 'url'=>'http://localhost/logistic_nec4/index.php?r=tbSpare/create'),
);
?>

<h1>SpareList <?php // echo $model->idOffice->branch_office;  ?></h1>

<?php
$this->widget('booster.widgets.TbGridView', array(
    'id' => 'tb-sn-spare-grid',
    'type' => 'striped bordered condensed ',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        //'id_sn',

        array(
            'name' => 'id_spare',
            'value' => function($data) {
        return $data->idSpare->aliasname;
    }
        ),
        'serial_number',
        array(
            'name' => 'Location',
            'value' => function($data) {
        return $data->idOffice->branch_office;
    }
        ),
        array(
            'name' => 'id_status_spare',
            'value' => function($data) {
        return $data->idStatusSpare->status;
    }
        ),
        array(
            'class' => 'booster.widgets.TbButtonColumn',
        ),
    ),
));
?>
<hr>

