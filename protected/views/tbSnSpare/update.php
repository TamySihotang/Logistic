<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('index'),
	$model->id_sn=>array('view','id'=>$model->id_sn),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbSnSpare', 'url'=>array('index')),
	array('label'=>'Create TbSnSpare', 'url'=>array('create')),
	array('label'=>'View TbSnSpare', 'url'=>array('view', 'id'=>$model->id_sn)),
	array('label'=>'Manage TbSnSpare', 'url'=>array('admin')),
);
?>

<h1>Update TbSnSpare <?php echo $model->id_sn; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>