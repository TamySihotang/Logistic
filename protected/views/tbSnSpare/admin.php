<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbSnSpare', 'url'=>array('index')),
	array('label'=>'Create TbSnSpare', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-sn-spare-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Data Sparepart and Serial Number</h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tb-sn-spare-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_sn',
                array(
                    'name'=>'id_office',
                    'value'=> function($data){
                            return $data->idOffice->branch_office;
                            
                    }
                    ),
                            array(
                    'name'=>'id_spare',
                    'value'=> function($data){
                            return $data->idSpare->aliasname;
                            
                    }
                    ),
                            array(
                    'name'=>'id_status_spare',
                    'value'=> function($data){
                            return $data->idStatusSpare->status;
                            
                    }
                    ),
		
		'serial_number',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
