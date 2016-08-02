<?php
/* @var $this TbRequestController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Requests',
);

$this->menu=array(
	//array('label'=>'Create TbRequest', 'url'=>array('create')),
	//array('label'=>'Manage TbRequest', 'url'=>array('admin')),
);
?>

<h1>My Request</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'tb-request-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
            	//'id_request',
		//'order_number',
            //
            array('name'=>'id_author',
                  'value'=>function($data){
                            return $data->idAuthor->author_name;
                  }
                ),
            array('name'=>'Requester Office',
                  'value'=>function($data){
                    return $data->idDestiny->branch_office;
                  }
                ),
            
            array('name'=>'Spare Office',
                'value'=>function($data){
                    return $data->idOrigin->branch_office;
                }
                ),
            
            array('name'=>'id_spare',
                  'value'=>function($data){
                    return $data->idSpare->aliasname;
                  }
                ),
            array('name'=>'id_sn',
                  'value'=>function($data){
                    return $data->idSn->serial_number;
                  }
                    ),
            //'start_date',
            //'end_date',
            'status_request',
            array(
                'header' => 'Cancel Request?',
                'class' => 'CButtonColumn',
                'template'=> '{cancel}',
                'buttons'=>array(
                    'cancel'=>array(
                        'label'=> 'Cancel This Request?',
                        'url'=>'Yii::app()->createUrl("tbRequest/cancelrequest",array("id"=>$data->id_request))',
                        'imageUrl'=>Yii::app()->baseUrl. '/images/Cancel-Request.jpg',
                        'visible'=>'$data->status_request=="Request"',
                        //'click'=>'js:function(){alert("cancel it");return false;}',
                    ),
                ),
            ),
            
            array(
                'header' => 'Cancel Delivery?',
                'class' => 'CButtonColumn',
                'template'=> '{canceldelivery}',
                'buttons'=>array(
                    'canceldelivery'=>array(
                        'label'=> 'Cancel This Delivery?',
                        'url'=>'Yii::app()->createUrl("tbRequest/canceldelivery",array("id"=>$data->id_request))',
                        'imageUrl'=>Yii::app()->baseUrl. '/images/Cancel-Request.jpg',
                        'visible'=>'$data->status_request=="In Delivery"',
                        'click'=>'',
                    ),
                ),
            ),                
		
        ),
)); ?>

