<?php

class DonasiController extends Controller
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
				'actions'=>array('index','view','DynamicCategories'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('buat'),
				'roles'=>array('user','admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionDynamicCategories()
	{
		$data=SubKategori::model()->findAll('id_kategori=:idKategori', 
			              array(':idKategori'=>(int) $_POST['Donasi']['kategori']));
	    
	 
	    $data=CHtml::listData($data,'id','nama');
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
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

	public function actionBuat(){
		$model=new Donasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donasi']))
		{
			$model->attributes=$_POST['Donasi'];
			$model->no_surat = "temp";
			$model->id_user = Yii::app()->session['id'];
			if($model->save()){
				Yii::app()->user->setFlash('sukses','Anda berhasil didaftarkan. Silakan login.');
				
				$message = new YiiMailMessage;
		           //this points to the file test.php inside the view path
		        $message->view = "donasi";  

		        date_default_timezone_set('Asia/Jakarta');
		        $model->tanggal = date("Y-m-d H:i:s");

		        $user = User::model()->findByPk($model->id_user);
		        $tujuan = TujuanDonasi::model()->findByPk($model->tujuan);
		        $model->id_user = $user->nama;
		        $model->kategori = Kategori::model()->findByPk($model->kategori)->nama;
				$model->sub_kategori = SubKategori::model()->findByPk($model->sub_kategori)->nama;


		        $message->subject    = 'Informasi Donasi';
		        $params              = array('model'=>$model,'tujuan'=>$tujuan);
		        $message->setBody($params, 'text/html');   
				$message->addTo($user->email);
		        $message->from = 'admin@skebbook.com';   
		        Yii::app()->mail->send($message);

				//$this->render('email', array('params'=>$model,'tujuan'=>$tujuan));
			}else{
				echo "gagal";
				print_r($model->getErrors());
				//$this->refresh();
			}
		}

		$this->render('buat',array(
			'model'=>$model,
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Donasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Donasi']))
		{
			$model->attributes=$_POST['Donasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Donasi']))
		{
			$model->attributes=$_POST['Donasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('Donasi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Donasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Donasi']))
			$model->attributes=$_GET['Donasi'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Donasi the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Donasi::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Donasi $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='donasi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
