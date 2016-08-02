<?php
/* @var $this TbUserController */
/* @var $model TbUser */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbUser', 'url'=>array('index')),
	array('label'=>'Manage TbUser', 'url'=>array('admin')),
);
?>

<h1>Create TbUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>