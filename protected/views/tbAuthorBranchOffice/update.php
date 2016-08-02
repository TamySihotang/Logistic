<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $model TbAuthorBranchOffice */

$this->breadcrumbs=array(
	'Tb Author Branch Offices'=>array('index'),
	$model->id_author=>array('view','id'=>$model->id_author),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbAuthorBranchOffice', 'url'=>array('index')),
	array('label'=>'Create TbAuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'View TbAuthorBranchOffice', 'url'=>array('view', 'id'=>$model->id_author)),
	array('label'=>'Manage TbAuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Update TbAuthorBranchOffice <?php echo $model->id_author; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>