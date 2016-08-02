<?php
/* @var $this TbAuthorBranchOfficeController */
/* @var $model TbAuthorBranchOffice */

$this->breadcrumbs=array(
	'Tb Author Branch Offices'=>array('index'),
	$model->id_author,
);

$this->menu=array(
	//array('label'=>'List TbAuthorBranchOffice', 'url'=>array('index')),
	//array('label'=>'Create TbAuthorBranchOffice', 'url'=>array('create')),
	array('label'=>'Update Data', 'url'=>array('update', 'id'=>$model->id_author)),
	//array('label'=>'Delete TbAuthorBranchOffice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_author),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage TbAuthorBranchOffice', 'url'=>array('admin')),
);
?>

<h1>Keterangan Data <?php echo $model->author_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_author',
		//'id_user',
		//'id_office',
            array(
                'label'=>$model->idOffice->getAttributeLabel('branch_office'),
                'value'=>$model->idOffice->branch_office
            ),
		'author_name',
		'email_author',
		'phone_author',
	),
)); ?>
