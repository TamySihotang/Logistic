<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $model TbAuthorBranchOffice */

$this->breadcrumbs=array(
	'Tb Author Branch Offices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbAuthorBranchOffice', 'url'=>array('index')),
	array('label'=>'Manage TbAuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Create TbAuthorBranchOffice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>