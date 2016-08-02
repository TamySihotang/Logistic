<?php
/* @var $this TbDescPenguranganController */
/* @var $model TbDescPengurangan */

$this->breadcrumbs=array(
	'Tb Desc Pengurangans'=>array('index'),
	$model->id_desc_kurang,
);

$this->menu=array(
	array('label'=>'List TbDescPengurangan', 'url'=>array('index')),
	array('label'=>'Create TbDescPengurangan', 'url'=>array('create')),
	array('label'=>'Update TbDescPengurangan', 'url'=>array('update', 'id'=>$model->id_desc_kurang)),
	array('label'=>'Delete TbDescPengurangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_desc_kurang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbDescPengurangan', 'url'=>array('admin')),
);
?>

<h1>View TbDescPengurangan #<?php echo $model->id_desc_kurang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_desc_kurang',
		'id_sn',
		'description',
	),
)); ?>
