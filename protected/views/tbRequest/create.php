<?php
/* @var $this TbRequestController */
/* @var $model TbRequest */

$this->breadcrumbs=array(
	'Tb Requests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbRequest', 'url'=>array('index')),
	array('label'=>'Manage TbRequest', 'url'=>array('admin')),
);
?>

<h1>Create TbRequest</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>