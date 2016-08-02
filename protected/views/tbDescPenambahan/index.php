<?php
/* @var $this TbDescPenambahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Desc Penambahans',
);

$this->menu=array(
	array('label'=>'Create TbDescPenambahan', 'url'=>array('create')),
	array('label'=>'Manage TbDescPenambahan', 'url'=>array('admin')),
);
?>

<h1>Tb Desc Penambahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
