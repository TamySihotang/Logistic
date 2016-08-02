<?php
/* @var $this TbDescKerusakanController */
/* @var $model TbDescKerusakan */

$this->breadcrumbs=array(
	'Tb Desc Kerusakans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbDescKerusakan', 'url'=>array('index')),
	array('label'=>'Manage TbDescKerusakan', 'url'=>array('admin')),
);
?>

<h1>Create TbDescKerusakan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>