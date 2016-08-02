<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbSnSpare', 'url'=>array('index')),
	array('label'=>'Manage TbSnSpare', 'url'=>array('admin')),
);
?>

<h1>Create TbSnSpare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>