<?php
/* @var $this TbUserController */
/* @var $model TbUser */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbUser', 'url'=>array('index')),
	array('label'=>'Create TbUser', 'url'=>array('create')),
	array('label'=>'View TbUser', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage TbUser', 'url'=>array('admin')),
);
?>

<h1>Update TbUser <?php echo $model->id_user; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>