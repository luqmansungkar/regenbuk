<?php

class UserController extends Controller
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
				'actions'=>array('index','view','register','Dynamiccities','forgot','recover'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','verifikasi'),
				'roles'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('editprofile','profile'),
				'roles'=>array('user','admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionVerifikasi(){
		Yii::app()->session['hal'] = 'Verifikasi User';
		if (isset($_POST['id']) && isset($_POST['action'])) {
			$id = $_POST['id'];
			$action = $_POST['action'];
			$model=$this->loadModel($id);
			$model->verified = $action;
			$model->cpassword = "-";
			if ($model->save()) {
				echo '{"status":"sukses","id": '.$_POST['id'].'}';
			}else{
				print_r($model->getErrors());
			}
			//echo '{"status":"sukses","id": '.$_POST['id'].'}';

		}else{
			$model = User::model()->findAll();
			$this->render('verifikasi',array('model'=>$model));
		}
	}
	public function actionForgot(){
		if(isset($_POST['emailForgot'])){
			$email = $_POST['emailForgot'];
			$model = User::model()->findByAttributes(array('email'=>$email));
			if (empty($model)) {
				Yii::app()->user->setFlash('forgot','0');
			}else{
				$getToken=rand(0, 99999);
				$getTime=date("H:i:s");
				$model->token = md5("!@13!34^".$getToken.$model->id.$getTime);
				//print_r($model);
				$model->cpassword = '123';
				if($model->save()){
					$namaPengirim="Regenerasi Buku";
					$emailadmin="admin@regenbuk.com";
					$subjek="Reset Password";
					$setpesan="you have successfully reset your password<br/>
					                    <a href='".$this->createUrl('user/recover',array('t'=>$model->token))."'>";
					$name='=?UTF-8?B?'.base64_encode($namaPengirim).'?=';
					$subject='=?UTF-8?B?'.base64_encode($subjek).'?=';
					$headers="From: $name <{$emailadmin}>\r\n".
					                    "Reply-To: {$emailadmin}\r\n".
					                    "MIME-Version: 1.0\r\n".
					                    "Content-type: text/html; charset=UTF-8";
					mail('loekmansungkar@gmail.com',$subject,$setpesan,$headers);
					echo "<a href='".$this->createUrl('user/recover',array('t'=>$model->token))."'>Click Here to Reset Password</a>";
				}
				Yii::app()->user->setFlash('forgot','1');
			}
		}
		$this->render('forgot');
	}

	public function actionRecover(){
		$token = $_GET['t'];
		if (!empty($token)) {
			$model = User::model()->findByAttributes(array('token'=>$token));
			if (!empty($model)) {
				$this->render('recover', array('token'=>$token));
			}else{
				throw new CHttpException(404,'The specified post cannot be found.');
			}
		}elseif (isset($_POST['np'])) {
				$model = User::model()->findByAttributes(array('token'=>$_POST['tok']));
				$model->password = md5($_POST['np'].'86mU_&6@GCtMwY*PdpLNDW^jRZV@73Ac');
				$model->cpassword = '123';
				$model->token = '';
				if ($model->save()) {
					$this->redirect(Yii::app()->homeUrl);
				}
		}else{
		throw new CHttpException(404,'The specified post cannot be found.');
		}
	}

	public function actionDynamiccities()
	{
	    $data=Kota::model()->findAll('id_provinsi=:idProv', 
	                  array(':idProv'=>(int) $_POST['User']['provinsi']));
	 
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
		$model=$this->loadModel($id);
		$post = Post::model()->findAllByAttributes(array('id_user'=>$id));
		$model->provinsi = Provinsi::model()->findByPk($model->provinsi)->nama;
		$model->kota = Kota::model()->findByPk($model->kota)->nama;
		$this->render('profile',array(
			'model'=>$model,'post'=>$post,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionRegister()
	{
		$model=new User('create');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if ($model->validate()) {
				$model->password = md5($model->password.'86mU_&6@GCtMwY*PdpLNDW^jRZV@73Ac');
				//use false as parameter because already validated above
				if($model->save(false)){ //no validation
					Yii::app()->user->setFlash('terdaftar','Anda berhasil didaftarkan. Silakan login.');
					$this->refresh();
					//$this->redirect(array('view','id'=>$model->id));
				}
			}
			
		}

		$this->render('register',array(
			'model'=>$model,
		));
	}

	public function actionEditProfile(){
		$model=$this->loadModel(Yii::app()->session['id']);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{	
			$model->attributes=$_POST['User'];
			$model->cpassword = 'sesuatu';
			$uploadedFile=CUploadedFile::getInstance($model,'foto');
			if (!empty($uploadedFile)) {
				$namaFile = rand(0,99999)."-pp-".$uploadedFile;
				$model->foto = $namaFile;
			}
			//print_r($model);
			if($model->save()){
				if (!empty($uploadedFile)) {
					$uploadedFile->saveAs(Yii::app()->basePath.'/../images/user/'.$namaFile);
				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('editProfile',array(
			'model'=>$model,
		));
	}

	public function actionProfile(){
		$model=$this->loadModel(Yii::app()->session['id']);
		$post = Post::model()->findAllByAttributes(array('id_user'=>Yii::app()->session['id']));
		$model->provinsi = Provinsi::model()->findByPk($model->provinsi)->nama;
		$model->kota = Kota::model()->findByPk($model->kota)->nama;
		$this->render('profile',array(
			'model'=>$model,'post'=>$post,
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

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$model->cpassword = "-";
			if($model->save())
				$this->redirect(array('admin'));
				//$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];
		Yii::app()->session['hal'] = 'Users';
		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
