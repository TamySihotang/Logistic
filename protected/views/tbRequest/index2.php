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

<h1>Request For You</h1>

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
            
            array('name'=>'Your Office',
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
            array(
                'name'=>'Date Request',
                'value'=>function($data){
                        return $data->start_date;
                }
            ),
            
            //'end_date',
            'status_request',
//            array(
//                'header' => 'Cancel Request?',
//                'class' => 'CButtonColumn',
//                'template'=> '{cancel}',
//                'buttons'=>array(
//                    'cancel'=>array(
//                        'label'=> 'Cancel This Request?',
//                        'url'=>'Yii::app()->createUrl("tbRequest/cancelrequest",array("id"=>$data->id_request))',
//                        'imageUrl'=>Yii::app()->baseUrl. '/images/Cancel-Request.jpg',
//                        'visible'=>'$data->status_request=="In Delivery"',
//                    ),
//                ),
//            ),

                            array('header'=>'Accept Request',
                                  'class'=>'CButtonColumn',
                                  'template'=>'{accept}',
                                  'buttons'=>array(
                                      'accept'=>array(
                                          'label'=>'Accept Request',
                                          'url'=>'Yii::app()->createUrl("tbRequest/acceptrequest",array("id"=>$data->id_request))',
                                          'imageUrl'=>Yii::app()->baseUrl. '/images/Accept-Button.png',
                                          'visible'=>'$data->status_request=="Request"',                                      
                                          ),
                                  ),
                                ),
                            array('header'=>'Reject Request',
                                  'class'=>'CButtonColumn',
                                  'template'=>'{reject}',
                                  'buttons'=>array(
                                      'reject'=>array(
                                          'label'=>'Reject Request',
                                          'url'=>'Yii::app()->createUrl("tbRequest/rejectrequest",array("id"=>$data->id_request))',
                                          'imageUrl'=>Yii::app()->baseUrl. '/images/Reject-Button.jpg',
                                          'visible'=>'$data->status_request=="Request"',                                      
                                          ),
                                  ),
                                ),
                    
                    array(
                'header' => 'Accept Delivery',
                'class' => 'CButtonColumn',
                'template'=> '{acceptdelivery}',
                'buttons'=>array(
                    'acceptdelivery'=>array(
                        'label'=> 'Accept This Delivery?',
                        'url'=>'Yii::app()->createUrl("tbRequest/acceptdelivery",array("id"=>$data->id_request))',
                        'imageUrl'=>Yii::app()->baseUrl. '/images/Accept-Button.png',
                        'visible'=>'$data->status_request=="In Delivery"',
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
                    ),
                ),
            ),
        ),
)); ?>
