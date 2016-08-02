<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Author Branch Offices',
);

$this->menu=array(
	array('label'=>'Create TbAuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'Manage TbAuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Tb Author Branch Offices</h1>

<?php $this->widget('booster.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsCssClass'=>'items table table-striped table-condensed',
)); ?>
