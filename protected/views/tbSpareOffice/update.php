<?php
/* @var $this TbSpareOfficeController */
/* @var $model TbSpareOffice */

$this->breadcrumbs=array(
	'Tb Spare Offices'=>array('index'),
	$model->id_spare_office=>array('view','id'=>$model->id_spare_office),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbSpareOffice', 'url'=>array('index')),
	array('label'=>'Create TbSpareOffice', 'url'=>array('create')),
	array('label'=>'View TbSpareOffice', 'url'=>array('view', 'id'=>$model->id_spare_office)),
	array('label'=>'Manage TbSpareOffice', 'url'=>array('admin')),
);
?>

<h1>Update TbSpareOffice <?php echo $model->id_spare_office; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>