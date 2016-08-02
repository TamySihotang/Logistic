<?php

class TbOfficeController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'summary2', 'relational', 'viewSummary'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new TbOffice;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TbOffice'])) {
            $model->attributes = $_POST['TbOffice'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_office));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TbOffice'])) {
            $model->attributes = $_POST['TbOffice'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id_office));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('TbOffice');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TbOffice('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TbOffice']))
            $model->attributes = $_GET['TbOffice'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionViewSummary($id) {
        $SnSpare = new TbSnSpare('search');
        $SnSpare->unsetAttributes();
        if (isset($_GET['TbSnSpare'])) {
            $SnSpare->attributes = $_GET['TbSnSpare'];
        }
        $this->render('viewSummary', array(
            'model' => TbOffice::model()->with('tbSnSPare')->findByPk($id),
            'SnSpare' => $SnSpare
        ));
    }

    public function actionSummary2() {
        $model = new TbOffice('search');
        $model2 = new TbAuthorBranchOffice();
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TbOffice']))
            $model->attributes = $_GET['TbOffice'];
        $model2->unsetAttributes();  // clear any default values
        if (isset($_GET['TbAuthorBranchOffice']))
            $model2->attributes = $_GET['TbAuthorBranchOffice'];

        $this->render('summary2', array(
            'model' => $model,
            'model2' => $model2,
        ));
    }

    public function actionRelational($id) {
        $model = $this->loadModel($id);
        $c2 = new CDbCriteria;
        $c2->condition = 'id_office=:P_id';
        $c2->params = array(':P_id' => $id);
        $c2->with = array('pedidosPiezas', array('condition' => 'id=:id', 'params' => array(':id' => 'Pedidos_piezas_id')));
        $c2->together = true;

        //$c2->join="LEFT JOIN Pedidos_piezas AS pp ON pp.id=Pedidos_piezas_id";
        //$c2->select="pp.Inventario_idInventario as pieza, pp.Cantidad as cant, Cantidad, Precio";
        $dataProviderPiezas = new CActiveDataProvider('tbOffice', array('criteria' => $c2));

        $this->renderPartial('_relational', array(
            'id' => $id,
            'model' => $model,
            'dataProvider' => $dataProviderPiezas,
                ), false, true);
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TbOffice the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TbOffice::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TbOffice $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'tb-office-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
