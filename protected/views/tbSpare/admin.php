<?php
/* @var $this TbSpareController */
/* @var $model TbSpare */
$this->breadcrumbs=array(
	'Tb Spares'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List TbSpare', 'url'=>array('index')),
	array('label'=>'Create TbSpare', 'url'=>array('create')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-spare-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Manage Tb Spares</h1>
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php
    $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'horizontalForm',
        'type' => 'horizontal',
    )
);
?>
<?php echo $form->typeAheadGroup(
    $model,
    'aliasname',
    array(
        'widgetOptions' => array(
            'options'=>array(
                'hint' => true,
                'highlight' => true,
                'minLength' => 1
            ),
            'datasets'=>compact('aliasname')         
        ),
        'labelOptions' => array(
            'label' => 'Search Your Sparepart',
        )
    )
);
?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'tb-spare-grid',
	'dataProvider'=>$model->search(),
        'type' => 'striped bordered condensed',
	'filter'=>$model,
        'template' => "{items}",
	'columns'=>array(
		'id_spare',
		'category',
		'series',
		'type',
		'model',
		'aliasname',
		
		'partno',
		'description',
		'suband',
		'hilo',
		
//		array(
//			'class'=>'CButtonColumn',
//                        
//		),
            'link'=>array(
                        'header'=>'Go to...',
                        'type'=>'raw',
                        'value'=> 'CHtml::button("add SN",array("onclick"=>"document.location.href=\'".Yii::app()->controller->createUrl("tbSnSpare/create",array("id"=>$data->id_spare))."\'"))',
                ), 
            
//             array(
//            'name' => 'id_spare', 'type' => 'raw', 
//            'value' => 'CHtml::link("view", array("tbSnSpare/create", "id"=>$data->id_spare))', 
//            'header' => 'Status'),
 //   ),
                
	),
    
    
    
    
    
)); ?>
<?php
$this->endWidget();
unset($form);?>