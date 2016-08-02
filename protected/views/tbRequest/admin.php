<?php
/* @var $this TbRequestController */
/* @var $model TbRequest */

$this->breadcrumbs=array(
	'Tb Requests'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List TbRequest', 'url'=>array('index')),
	//array('label'=>'Create TbRequest', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-request-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requests</h1>

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
	'id'=>'tb-request-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id_request',
		'order_number',
		'id_sn',
		'id_spare',
		'id_origin',
		'id_destiny',
		/*
		'id_author',
		'start_date',
		'end_date',
		'status_request',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
