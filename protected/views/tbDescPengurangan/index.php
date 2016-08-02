<?php
/* @var $this TbDescPenguranganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Desc Pengurangans',
);

$this->menu=array(
	array('label'=>'Create TbDescPengurangan', 'url'=>array('create')),
	array('label'=>'Manage TbDescPengurangan', 'url'=>array('admin')),
);
?>

<h1>Tb Desc Pengurangans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
