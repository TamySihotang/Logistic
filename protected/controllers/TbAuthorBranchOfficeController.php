<?php

class TbAuthorBranchOfficeController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','registration'),
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
		$model=new TbAuthorBranchOffice;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['TbAuthorBranchOffice']))
		{
			$model->attributes=$_POST['TbAuthorBranchOffice'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_author));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
        
        public function actionRegistration() {
        $registration = new RegistrationAuthorOffice();
// collect user input data
        if (isset($_POST['RegistrationAuthorOffice'])) {
            $registration->attributes = $_POST['RegistrationAuthorOffice'];
            $registration->attributes = $_POST['RegistrationAuthorOffice'];
// validate user input and redirect to the previous page if valid
            if ($registration->validate()) {
// create an account model
                $account = new TbUser;
                $account->username = $registration->username;
                $account->password = $registration->password;
               
                if ($account->save()) {
                    $office = new TbOffice;
                    $author = new TbAuthorBranchOffice;
                    $author->attributes = $registration->attributes;
                    $author->author_name = $registration->author_name;
                    $author->email_author = $registration->email_author;
                    $author->phone_author = $registration->phone_author;
                    $author->id_user = $account->id_user;

                    if ($author->save()) {

                        $this->redirect(array('index'));
                    } else {
// what's wrong? get the error message
                        $registration->addErrors($office->getErrors());
                        $registration->addErrors($account->getErrors());
                    }
                } else {
// what's wrong? get the error message
                    $registration->addErrors($author->getErrors());
                }
            }
        }
// display the registration form
        $this->render('Registration', array('model' => $registration));
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

		if(isset($_POST['TbAuthorBranchOffice']))
		{
			$model->attributes=$_POST['TbAuthorBranchOffice'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_author));
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
		$dataProvider=new CActiveDataProvider('TbAuthorBranchOffice');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new TbAuthorBranchOffice('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['TbAuthorBranchOffice']))
			$model->attributes=$_GET['TbAuthorBranchOffice'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return TbAuthorBranchOffice the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=TbAuthorBranchOffice::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param TbAuthorBranchOffice $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tb-author-branch-office-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
