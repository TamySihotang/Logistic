<?php
/* @var $this TbDescKerusakanController */
/* @var $model TbDescKerusakan */

$this->breadcrumbs=array(
	'Tb Desc Kerusakans'=>array('index'),
	$model->id_desc_rusak,
);

$this->menu=array(
	array('label'=>'List TbDescKerusakan', 'url'=>array('index')),
	array('label'=>'Create TbDescKerusakan', 'url'=>array('create')),
	array('label'=>'Update TbDescKerusakan', 'url'=>array('update', 'id'=>$model->id_desc_rusak)),
	array('label'=>'Delete TbDescKerusakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_desc_rusak),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbDescKerusakan', 'url'=>array('admin')),
);
?>

<h1>View TbDescKerusakan #<?php echo $model->id_desc_rusak; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_desc_rusak',
		'id_sn',
		'description',
	),
)); ?>
