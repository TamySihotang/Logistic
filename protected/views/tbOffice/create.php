<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs=array(
	'Tb Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbOffice', 'url'=>array('index')),
	array('label'=>'Manage TbOffice', 'url'=>array('admin')),
);
?>

<h1>Create TbOffice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>