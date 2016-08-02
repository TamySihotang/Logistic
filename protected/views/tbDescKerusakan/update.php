<?php
/* @var $this TbDescKerusakanController */
/* @var $model TbDescKerusakan */

$this->breadcrumbs=array(
	'Tb Desc Kerusakans'=>array('index'),
	$model->id_desc_rusak=>array('view','id'=>$model->id_desc_rusak),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbDescKerusakan', 'url'=>array('index')),
	array('label'=>'Create TbDescKerusakan', 'url'=>array('create')),
	array('label'=>'View TbDescKerusakan', 'url'=>array('view', 'id'=>$model->id_desc_rusak)),
	array('label'=>'Manage TbDescKerusakan', 'url'=>array('admin')),
);
?>

<h1>Update TbDescKerusakan <?php echo $model->id_desc_rusak; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>