<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('index'),
	$model->id_sn=>array('view','id'=>$model->id_sn),
	'Update',
);

$this->menu=array(
//	array('label'=>'List TbSnSpare', 'url'=>array('index')),
//	array('label'=>'Create TbSnSpare', 'url'=>array('create')),
//	array('label'=>'View TbSnSpare', 'url'=>array('view', 'id'=>$model->id_sn)),
//	array('label'=>'Manage TbSnSpare', 'url'=>array('admin')),
);
?>

<h1>Request Sparepart <?php echo $model->idOffice->branch_office; ?></h1>

<?php $this->renderPartial('_formrequestspare', array('model'=>$model,'modelRequest'=>$modelRequest)); ?>