<?php
/* @var $this TbStatusSpareController */
/* @var $model TbStatusSpare */

$this->breadcrumbs=array(
	'Tb Status Spares'=>array('index'),
	$model->id_status_spare=>array('view','id'=>$model->id_status_spare),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbStatusSpare', 'url'=>array('index')),
	array('label'=>'Create TbStatusSpare', 'url'=>array('create')),
	array('label'=>'View TbStatusSpare', 'url'=>array('view', 'id'=>$model->id_status_spare)),
	array('label'=>'Manage TbStatusSpare', 'url'=>array('admin')),
);
?>

<h1>Update TbStatusSpare <?php echo $model->id_status_spare; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>