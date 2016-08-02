<?php
/* @var $this TbSpareController */
/* @var $model TbSpare */

$this->breadcrumbs=array(
	'Tb Spares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbSpare', 'url'=>array('index')),
	array('label'=>'Manage TbSpare', 'url'=>array('admin')),
);
?>

<h1>Create TbSpare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>