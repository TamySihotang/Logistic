<?php
/* @var $this TbSpareController */
/* @var $model TbSpare */

$this->breadcrumbs=array(
	'Tb Spares'=>array('index'),
	$model->id_spare=>array('view','id'=>$model->id_spare),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbSpare', 'url'=>array('index')),
	array('label'=>'Create TbSpare', 'url'=>array('create')),
	array('label'=>'View TbSpare', 'url'=>array('view', 'id'=>$model->id_spare)),
	array('label'=>'Manage TbSpare', 'url'=>array('admin')),
);
?>

<h1>Update TbSpare <?php echo $model->id_spare; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>