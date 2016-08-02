<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('index'),
	$model->id_sn,
);

$this->menu=array(
	array('label'=>'List TbSnSpare', 'url'=>array('index')),
	array('label'=>'Create TbSnSpare', 'url'=>array('create')),
	array('label'=>'Update TbSnSpare', 'url'=>array('update', 'id'=>$model->id_sn)),
	array('label'=>'Delete TbSnSpare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sn),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbSnSpare', 'url'=>array('admin')),
);
?>

<h1>View TbSnSpare #<?php echo $model->id_sn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_sn',
            
                'id_office',
		'id_spare',
		'id_status_spare',
		'serial_number',
	),
)); ?>
