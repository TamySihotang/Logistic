<?php

class TbSnSpareController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','request','request2','requestspare'),
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
		$model=new TbSnSpare;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TbSnSpare']))
		{
			$model->attributes=$_POST['TbSnSpare'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sn));
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

		if(isset($_POST['TbSnSpare']))
		{
			$model->attributes=$_POST['TbSnSpare'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_sn));
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
		$dataProvider=new CActiveDataProvider('TbSnSpare', array('criteria'=>array('condition'=>'id_author='.$modelBranchOffice->id_author)));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
                
		$model=new TbSnSpare('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TbSnSpare']))
			$model->attributes=$_GET['TbSnSpare'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionRequest()
	{
		$model=new TbSnSpare('search');
                
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TbSnSpare']))
			$model->attributes=$_GET['TbSnSpare'];

		$this->render('request',array(
			'model'=>$model,
		));
	}   
        
        public function actionRequest2() {
        $modelRequest = new TbRequest;
        $modelSnSpare = new TbSnSpare;
        $modelSpareOffice = new TbSpareOffice;
        
        $user = TbUser::model()->findByAttributes(array('id_user'=>Yii::app()->user->id));
        $modelBranchOffice = TbAuthorBranchOffice::model()->findByAttributes(array('id_user'=> $user->id_user));
        $office = TbOffice::model()->findByAttributes(array('id_office' => $modelBranchOffice->id_office));
        $modelRequest->order_number = $modelRequest->id_request;
        
            //$modelSnSpare->attributes = $_POST['TbSnSpare'];
            //$modelRequest->attributes = $_POST['TbRequest'];
            //$modelSpareOffice->attributes = $_POST['TbSpareOffice'];
            if (isset($_POST['Request'])){
                if ($modelRequest->save()){
            $modelRequest->attributes = $_POST['TbRequest'];
            $modelRequest->id_sn = $modelSnSpare->id_sn;
            $modelRequest->id_spare = $modelSnSpare->id_spare;
            $modelRequest->id_origin = $modelSnSpare->id_office;
            $modelRequest->id_destiny = $modelBranchOffice->id_office;
            $modelRequest->id_author = $modelBranchOffice->id_author;
            $modelRequest->status_request = "In Delivery";
            Yii::app()->user->setFlash('success', "Your Request is Successful");
            $this->redirect(array('tbRequest/index'));
            }
            }
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

        public function actionAccept(){
            
        }
        
        public function actionReject(){
            
        }
        
    
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TbSnSpare the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TbSnSpare::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TbSnSpare $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tb-sn-spare-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
