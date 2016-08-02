<?php
/* @var $this TbSpareOfficeController */
/* @var $model TbSpareOffice */

$this->breadcrumbs=array(
	'Tb Spare Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbSpareOffice', 'url'=>array('index')),
	array('label'=>'Manage TbSpareOffice', 'url'=>array('admin')),
);
?>

<h1>Create TbSpareOffice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>