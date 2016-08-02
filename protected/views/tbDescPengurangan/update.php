<?php
/* @var $this TbDescPenguranganController */
/* @var $model TbDescPengurangan */

$this->breadcrumbs=array(
	'Tb Desc Pengurangans'=>array('index'),
	$model->id_desc_kurang=>array('view','id'=>$model->id_desc_kurang),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbDescPengurangan', 'url'=>array('index')),
	array('label'=>'Create TbDescPengurangan', 'url'=>array('create')),
	array('label'=>'View TbDescPengurangan', 'url'=>array('view', 'id'=>$model->id_desc_kurang)),
	array('label'=>'Manage TbDescPengurangan', 'url'=>array('admin')),
);
?>

<h1>Update TbDescPengurangan <?php echo $model->id_desc_kurang; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>