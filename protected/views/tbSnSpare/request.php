<?php
/* @var $this TbSnSpareController */
/* @var $model TbSnSpare */

$this->breadcrumbs=array(
	'Tb Sn Spares'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Serial Number', 'url'=>array('index')),
	//array('label'=>'Create TbSnSpare', 'url'=>array('create')),
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

<?php echo CHtml::link('<b>Pencarian Lebih Lanjut</b>','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
 $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
            $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->id_user));
            //$SnSpare = TbSnSpare::model()->findByAttributes(array('id_office'=>$modelBranchOffice->id_office));
            $Request = TbRequest::model()->findByAttributes(array('id_author'=>$modelBranchOffice->id_author));
$this->widget('zii.widgets.grid.CGridView', array(
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
                            
		//array(
//                        'link'=>array(
//                        'header'=>'Action',
//                        'type'=>'raw',
//                        'value'=> 'CHtml::button("Request",array("onclick"=>"document.location.href=\'".Yii::app()->controller->createUrl("tbSnSpare/request2",array("id"=>$data->id_sn))."\'"))',
//                       'visible'=>Yii::app()->user->id,
//                            ),
//			'class'=>'CButtonColumn',
//		),
                            array(
                                'header'=>'Deliver / Request',
                                'class'=>'CButtonColumn',
                                'template'=>'{request}{deliver}',
                                'buttons'=>array(
                                    'request'=>array(
                                        'label'=>'Request This Sparepart',
                                        'url'=>'Yii::app()->createUrl("tbSnSpare/requestspare",array("id"=>$data->id_sn))',
                                        'imageUrl'=>Yii::app()->baseUrl.'/images/Request-Button.png',
                                        'visible'=>'$data->id_office !='.$modelBranchOffice->id_office,
                                    ),
                                      'deliver'=>array(
                                        'label'=>'Deliver To Customer',
                                        'url'=>'Yii::app()->createUrl("tbSnSpare/delivercustomer",array("id"=>$data->id_sn))',
                                        'imageUrl'=>Yii::app()->baseUrl.'/images/Delivery-Button.jpg',
                                        'visible'=>'$data->id_office == '.$modelBranchOffice->id_office,
                                        
                                          ),
//                                    'YouRequested'=>array(
//                                        'label'=>'You Request this part',
//                                        'url'=>'',
//                                        'imageUrl'=>'',
//                                        //'visible'=>$data->tbRequests->status_request=="Request",
//                                    ),
                                ),
                                ),
//                                'class'=>'CButtonColumn',
//                                'template'=>'{waiting}{deliver}',
//                                'buttons'=>array(
//                                  'waiting'=>array(
//                                      'label'=>'Waiting For Response',
//                                      'url'=>'',
//                                      'imageUrl'=>Yii::app()->baseUrl.'/images/Waiting-Response.png',
//                                      'visible'=>'$data->office !='.$modelRequest1->id_author == $modelBranchOffice->id_author && $modelRequest1->id_destiny == $modelBranchOffice->id_office &&
//                                                $modelRequest1->status == "Requested",
//                                  ),  
//                                ),
                                
                           
//                            array(
//                                'header'=>'Deliver / Request',
//                                'class'=>'CButtonColumn',
//                                'template'=>'{deliver}',
//                                'buttons'=>array(
//                                    'deliver'=>array(
//                                        'label'=>'Deliver To Customer',
//                                        'url'=>'Yii::app()->createUrl("tbSnSpare/delivercustomer",array("id"=>$data->id_sn))',
//                                        'imageUrl'=>Yii::app()->baseUrl.'/images/Delivery-Button.jpg',
//                                        'visible'=>'$data->id_office == '.$modelBranchOffice->id_office,
//                                    ),
//                                ),
//                                ),
                            
                            
	),
)); ?>
