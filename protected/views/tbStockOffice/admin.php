<?php
/* @var $this TbStockOfficeController */
/* @var $model TbStockOffice */

$this->breadcrumbs=array(
	'Tb Stock Offices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbStockOffice', 'url'=>array('index')),
	array('label'=>'Create TbStockOffice', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-stock-office-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tb Stock Offices</h1>

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
	'id'=>'tb-stock-office-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_stock_office',
		'id_office',
		'id_status_spare',
		'id_spare',
		'id_sn',
		'stock_total',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
