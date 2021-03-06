<?php
/* @var $this TbOfficeController */
/* @var $model TbOffice */

$this->breadcrumbs = array(
    'Tb Offices' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List TbOffice', 'url' => array('index')),
    array('label' => 'Create TbOffice', 'url' => array('create')),
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

<h1>Manage Tb Offices</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">

</div><!-- search-form -->
<?php
//$data = new TbOffice;
//$a = tbOffice::model()->findByPk($data->id_office)->id_office;
//print_r($a);
//print_r(die);
?>
<?php
$this->widget('booster.widgets.TbExtendedGridView', array(
//	'id'=>'request-grid',
    'id' => 'client-list',
    'type' => 'bordered condensed',
    'dataProvider' => $model->search(),
//	'filter'=>$model,
    'columns' => array(
        array(
            'class' => 'booster.widgets.TbRelationalColumn',
            'name' => 'Office',
            'value' => 'tbOffice::model()->findByPk($data->id_office)->branch_office',
            'url' => $this->createUrl('/tbOffice/relational', array('id' => $model->id_office)),
        ),
//        array('name'=>'id_office', 'value'=>'$data->idOffice->address_office'),
        array(
            'name' => 'PIC',
            'value' => 'tbAuthorBranchOffice::model()->findByPk($data->id_office)->author_name',
        ),

        array(
                    'class'=>'CDataColumn',
                    'type'=>'raw',
                    'value'=>'CHtml::link($data->getStockOffice($data->id_office), array("tbOffice/viewSummary&id=".$data->id_office),array("target"=>"_blank"))',
//                    'name'=>'summary',
                    'header'=>_('Good Part'),
                ),  
        
//            array('name'=>'Good Part', 'value'=>'count(tbSpareOffice::model()->findByPk($data->id_office)->id_office)'),
//             array(
//             'name'=>'name',
//             'header'=>'User Name',
//             'value'=>'$data->id_office',
//             'filter'=>false,
//             'footer'=>'' . $model->getStockOffice($model->search()->getData(), 'id_office'),
//             'footerHtmlOptions'=>array('class'=>'grid-footer'),
//         ),
//              array('name' => 'Good Part','value' => '' . $model->getStockOffice($model->id_office)),
        array(
            'class' => 'booster.widgets.TbButtonColumn',
//                    'htmlOptions'=>array('style'=>'width: 50px'),
        ),
//	),
//    'extendedSummary'=>array(
//        'title'=>'test',
//        'columns'=>array(
//            'language'=>array(
//                'label'=>'Total',
//                'types' => array(
//                    'CSS'=>array('label'=>'id_office','value'=>'$data->author_name'),
//                    'JavaScript'=>array('label'=>'id_office'),
//                    'HTML'=>array('label'=>'id_office')
//                ),
//                'class'=>'TbCountOfTypeOperation'
//            ),
//        ),
//        
//    ),
//    'extendedSummaryOptions' => array(
//        'class' => 'well pull-right',
//        'style' => 'width:300px'
    ),
));
?>

<?php
//$total_sales_employees=  TbSpareOffice::model()->countByAttributes(array(
//                        'id_office'=>1,
//                ));
//echo $total_sales_employees;
//$temp=CHtml::encode($model->id_office);
//
//        $find=  TbSpareOffice::model()->findAllByAttributes(array('id_office'=>$temp));
//        $count = count($find);
//       echo $count;
?>