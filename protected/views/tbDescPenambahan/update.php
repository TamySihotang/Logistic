<?php
/* @var $this TbDescPenambahanController */
/* @var $model TbDescPenambahan */

$this->breadcrumbs=array(
	'Tb Desc Penambahans'=>array('index'),
	$model->id_desc_tambah=>array('view','id'=>$model->id_desc_tambah),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbDescPenambahan', 'url'=>array('index')),
	array('label'=>'Create TbDescPenambahan', 'url'=>array('create')),
	array('label'=>'View TbDescPenambahan', 'url'=>array('view', 'id'=>$model->id_desc_tambah)),
	array('label'=>'Manage TbDescPenambahan', 'url'=>array('admin')),
);
?>

<h1>Update TbDescPenambahan <?php echo $model->id_desc_tambah; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>