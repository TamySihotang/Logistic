<?php

class TbRequestController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','selectspare','selectsn'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','index2','rejectrequest','acceptdelivery','acceptrequest','canceldelivery','cancelrequest'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new TbRequest;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TbRequest']))
		{
			$model->attributes=$_POST['TbRequest'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_request));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TbRequest']))
		{
			$model->attributes=$_POST['TbRequest'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_request));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
        
        
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
                $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->id_user));
		$dataProvider=new CActiveDataProvider('TbRequest',array('criteria'=> array('condition'=>'id_destiny='. $modelBranchOffice->id_office)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionIndex2()
	{
                $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
                $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->id_user));
		$dataProvider=new CActiveDataProvider('TbRequest',array('criteria'=> array('condition'=>'id_origin='. $modelBranchOffice->id_office)));
		$this->render('index2',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TbRequest('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TbRequest']))
			$model->attributes=$_GET['TbRequest'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TbRequest the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TbRequest::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TbRequest $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tb-request-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionSelectspare()
        {
            $id_origin = $_POST['TbRequest']['id_origin'];
            
            $list = TbSpareOffice::model()->findAll('id_office = :id_origin',array(':id_origin'=>$id_origin));
            $list = CHtml::listData($list,'id_office','id_spare');
            
            echo CHtml::tag('option', array('value' => ''), 'Choose Spare',true);
            
            foreach ($list as $idkantor => $idspare){
////                $idspare = 'id_spare';
//                 $sql= 'SELECT aliasname FROM tb_spare INNER JOIN tb_sn_spare ON tb_spare.'. $idspare . '= tb_sn_spare.' . $idspare;
//                 $command = Yii::app()->db->createCommand($sql);
//                 $result = $command->execute();
//                 //$modelSpare = TbSpare::model()->findByAttributes(array('id_spare' => $idspare));
//       $user = Yii::app()->db->createCommand()
//	    ->join('TbSnSpare')
//	    ->select('aliasname')
//	    ->from('TbSpare')
//	    ->group('id_spare')   
//	    ->queryAll();
                
                echo CHtml::tag('option',array('value'=>$idkantor), CHtml::encode($idspare),true);
                
            }
        }
        
         public function actionSelectsn()
        {
            $id_spare = $_POST['TbRequest']['id_spare'];
            
            $list = TbSnSpare::model()->findAll('id_spare = :id_spare',array(':id_spare'=>$id_spare));
            $list = CHtml::listData($list,'id_office','serial_number');
            
            echo CHtml::tag('option', array('value' => ''), 'Choose Serial Number',true);
            
            foreach ($list as $idspares => $idsn){
               
                echo CHtml::tag('option',array('value'=>$idspares), CHtml::encode($idsn),true);
                
            }
        }
        
        public function actionListrequest(){
            $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
            $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->user));
            $id_origin = $modelBranchOffice->id_office;
            $criteria = new CDbCriteria();
            $criteria->addCondition('id_origin = ' . $id_origin . 'AND status_request ="Request"');
            
            $dataProvider = new CactiveDataProvider('TbRequest',array('criteria'=>$criteria));
            $this->render('Listrequest',array('dataProvider'=>$dataProvider));
        }
        
        public function actionRequestspare($id){
            $model=$this->loadModel($id);
            $modelRequest= new TbRequest;
            $modelSpareOffice= new TbSpareOffice;
            $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
            $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->id_user));
            $userbranch= Yii::app()->user->id;
            $today = date('Y-m-d H:i:s', strtotime('0 day'));
            $after = date('Y-m-d H:i:s', strtotime($today . '+10 day'));
            $modelRequest->order_number = $modelRequest->id_request;
            $modelRequest->id_sn = $model->id_sn;
            $modelRequest->id_spare = $model->id_spare;
            $modelRequest->id_origin = $model->id_office;
            $modelRequest->id_destiny = $modelBranchOffice->id_office;
            $modelRequest->id_author = $modelBranchOffice->id_author;
            $modelRequest->start_date = $today;
            $modelRequest->end_date = $after;
            $modelRequest->status_request = "Request";
// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
			if($model->save()&&$modelRequest->save()){
                            $this->redirect(array('tbRequest/index'));
                      }
                        
		
        }
        
        public function actionAcceptdelivery($id){
            $model=$this->loadModel($id);
            $modelSnSpare=TbSnSpare::model()->findByPk($model->id_sn);
                $model->status_request="Accepted";
                $modelSnSpare->id_office =  $model->id_destiny;
                if($model->save()&&$modelSnSpare->save()){
                    $this->redirect(array('tbRequest/index2'));
                }
                
        }
        
        public function actionCanceldelivery($id){
            $model=$this->loadModel($id);
            $model->status_request ="Delivery Cancelled";
            if($model->save()){
                $this->redirect(array('tbRequest/index2'));
            }
        }
        
        public function actionAcceptrequest($id){
            $model=$this->loadModel($id);
            $model->status_request="In Delivery";
            if($model->save()){
                $this->redirect(array('tbRequest/index2'));
            }
        }
        
        public function actionRejectrequest($id){
         
		$model=$this->loadModel($id);
                $model->status_request="Rejected";
                if($model->save()){
                    $this->redirect(array('tbRequest/index2'));
                }
        }
        
        public function actionCancelrequest($id){
          $model=$this->loadModel($id);
          $model->status_request ="Cancelled";
          if($model->save()){
              $this->redirect(array('tbRequest/index'));
          }
            
                
        }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
//
//		if(isset($_POST['TbRequest']))
//		{
//			$model->attributes=$_POST['TbRequest'];
//                        // $model->status_request="Rejected";
//			if($model->save()){   
//                       
//                        }
//				$this->redirect(array('tbRequest/index2'));
//		}
//                
//                $this->render('rejectrequest',array(
//                    'model'=>$model,
//                ));

	
            
        
                
}

