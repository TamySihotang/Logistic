<?php
/* @var $this TbStockController */
/* @var $model TbStock */

$this->breadcrumbs=array(
	'Tb Stocks'=>array('index'),
	$model->id_stock=>array('view','id'=>$model->id_stock),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbStock', 'url'=>array('index')),
	array('label'=>'Create TbStock', 'url'=>array('create')),
	array('label'=>'View TbStock', 'url'=>array('view', 'id'=>$model->id_stock)),
	array('label'=>'Manage TbStock', 'url'=>array('admin')),
);
?>

<h1>Update TbStock <?php echo $model->id_stock; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>