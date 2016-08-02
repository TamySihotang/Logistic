<?php
/* @var $this TbDescPenambahanController */
/* @var $model TbDescPenambahan */

$this->breadcrumbs=array(
	'Tb Desc Penambahans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbDescPenambahan', 'url'=>array('index')),
	array('label'=>'Manage TbDescPenambahan', 'url'=>array('admin')),
);
?>

<h1>Create TbDescPenambahan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>