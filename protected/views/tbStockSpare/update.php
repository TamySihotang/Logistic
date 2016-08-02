<?php
/* @var $this TbStockSpareController */
/* @var $model TbStockSpare */

$this->breadcrumbs=array(
	'Tb Stock Spares'=>array('index'),
	$model->id_stock_spare=>array('view','id'=>$model->id_stock_spare),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbStockSpare', 'url'=>array('index')),
	array('label'=>'Create TbStockSpare', 'url'=>array('create')),
	array('label'=>'View TbStockSpare', 'url'=>array('view', 'id'=>$model->id_stock_spare)),
	array('label'=>'Manage TbStockSpare', 'url'=>array('admin')),
);
?>

<h1>Update TbStockSpare <?php echo $model->id_stock_spare; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>