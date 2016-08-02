<?php
/* @var $this TbDescPenambahanController */
/* @var $model TbDescPenambahan */

$this->breadcrumbs=array(
	'Tb Desc Penambahans'=>array('index'),
	$model->id_desc_tambah,
);

$this->menu=array(
	array('label'=>'List TbDescPenambahan', 'url'=>array('index')),
	array('label'=>'Create TbDescPenambahan', 'url'=>array('create')),
	array('label'=>'Update TbDescPenambahan', 'url'=>array('update', 'id'=>$model->id_desc_tambah)),
	array('label'=>'Delete TbDescPenambahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_desc_tambah),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbDescPenambahan', 'url'=>array('admin')),
);
?>

<h1>View TbDescPenambahan #<?php echo $model->id_desc_tambah; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_desc_tambah',
		'id_sn',
		'description',
	),
)); ?>
