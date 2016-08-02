<?php
/* @var $this TbRequestController */
/* @var $model TbRequest */

$this->breadcrumbs=array(
	'Tb Requests'=>array('index'),
	$model->id_request=>array('view','id'=>$model->id_request),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbRequest', 'url'=>array('index')),
	array('label'=>'Create TbRequest', 'url'=>array('create')),
	array('label'=>'View TbRequest', 'url'=>array('view', 'id'=>$model->id_request)),
	array('label'=>'Manage TbRequest', 'url'=>array('admin')),
);
?>

<h1>Update TbRequest <?php echo $model->id_request; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>