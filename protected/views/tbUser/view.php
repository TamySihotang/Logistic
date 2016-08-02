<?php
/* @var $this TbUserController */
/* @var $model TbUser */

$this->breadcrumbs=array(
	'Tb Users'=>array('index'),
	$model->id_user,
);

$this->menu=array(
	array('label'=>'List TbUser', 'url'=>array('index')),
	array('label'=>'Create TbUser', 'url'=>array('create')),
	array('label'=>'Update TbUser', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete TbUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbUser', 'url'=>array('admin')),
);
?>

<h1>View TbUser #<?php echo $model->id_user; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_user',
		'username',
		'password',
	),
)); ?>
