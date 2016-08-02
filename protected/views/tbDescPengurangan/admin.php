<?php
/* @var $this TbDescPenguranganController */
/* @var $model TbDescPengurangan */

$this->breadcrumbs=array(
	'Tb Desc Pengurangans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbDescPengurangan', 'url'=>array('index')),
	array('label'=>'Create TbDescPengurangan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-desc-pengurangan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tb Desc Pengurangans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tb-desc-pengurangan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_desc_kurang',
		'id_sn',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
