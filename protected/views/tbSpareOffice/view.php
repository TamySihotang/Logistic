<?php
/* @var $this TbSpareOfficeController */
/* @var $model TbSpareOffice */

$this->breadcrumbs=array(
	'Tb Spare Offices'=>array('index'),
	$model->id_spare_office,
);

$this->menu=array(
	array('label'=>'List TbSpareOffice', 'url'=>array('index')),
	array('label'=>'Create TbSpareOffice', 'url'=>array('create')),
	array('label'=>'Update TbSpareOffice', 'url'=>array('update', 'id'=>$model->id_spare_office)),
	array('label'=>'Delete TbSpareOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_spare_office),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbSpareOffice', 'url'=>array('admin')),
);
?>

<h1>View TbSpareOffice #<?php echo $model->id_spare_office; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_spare_office',
		'id_office',
		'id_spare',
		'id_sn',
		'id_status_spare',
	),
)); ?>
