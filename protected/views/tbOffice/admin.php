<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs=array(
	'Tb Offices'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List TbOffice', 'url'=>array('index')),
	array('label'=>'Create TbOffice', 'url'=>array('create'),'visible'=>!Yii::app()->user->isGuest),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-office-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Kantor</h1>

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
	'id'=>'tb-office-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_office',
		//'branch_office',
                array(
                    'name'=>'branch_office',
                    'value'=>function($data){
                        return $data->branch_office;
                    },
                    
                ),
		//'address_office',
		//'email_office',
		'phone_office',
                 
                 array(
                     'header' => 'View',
                     'class' =>'CButtonColumn',
                     'template' => '{view}',
                 ),
	),
                            
)); ?>
