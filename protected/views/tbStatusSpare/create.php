<?php
/* @var $this TbStatusSpareController */
/* @var $model TbStatusSpare */

$this->breadcrumbs=array(
	'Tb Status Spares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbStatusSpare', 'url'=>array('index')),
	array('label'=>'Manage TbStatusSpare', 'url'=>array('admin')),
);
?>

<h1>Create TbStatusSpare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>