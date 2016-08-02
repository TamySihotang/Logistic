<?php
/* @var $this TbUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Users',
);

$this->menu=array(
	array('label'=>'Create TbUser', 'url'=>array('create')),
	array('label'=>'Manage TbUser', 'url'=>array('admin')),
);
?>

<h1>Tb Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
