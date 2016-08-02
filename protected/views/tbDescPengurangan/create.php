<?php
/* @var $this TbDescPenguranganController */
/* @var $model TbDescPengurangan */

$this->breadcrumbs=array(
	'Tb Desc Pengurangans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbDescPengurangan', 'url'=>array('index')),
	array('label'=>'Manage TbDescPengurangan', 'url'=>array('admin')),
);
?>

<h1>Create TbDescPengurangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>