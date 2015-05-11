<?php

class PostController extends Controller
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
				'actions'=>array('index','view','DynamicCategories','Dynamiccities','cari'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('buat','ubah'),
				'roles'=>array('user','admin'),
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

	public function actionUbah(){
		
		if(isset($_POST['ubah']))
		{
			$data = $_POST['ubah'];
			$model=$this->loadModel($data['id']);
			if ($data['status'] != 'remove') {
				$model->status = $data['status'];
				$model->save();
			}else{
				$model->delete();
			}
			
		}

		$this->redirect(array('user/profile'));
	}

	public function actionCari(){
		$cari=$_POST['cari'];
		//print_r($cari);
		$kondisi = "";
		$criteria = new CDbCriteria();
		if ($cari['judul'] == '') {
			//$kondisi = "(";
		}else{
			$kondisi = "judul like '%".$cari['judul']."%' and ";
		}

		if ($cari['provinsi'] != '') {
			$kondisi .= "(";
			if (strpos($cari['provinsi'], 'non') !== FALSE) {
				$lokasi = explode("-", $cari['provinsi'])[1];
				//echo "lokasi ".$lokasi;
				switch ($lokasi) {
					case 'jab':
						$kondisi .= "provinsi=11 or kota=161 or kota=162 or kota=179 or kota=180 or kota=183 or kota=224 or kota=227 or kota=228";
						break;
					case 'jak':
						$kondisi .= "provinsi=11";
						break;
					case 'bog':
						$kondisi .= "kota=162 or kota=180";
						break;
					case 'tan':
						$kondisi .= "kota=224 or kota=227 or kota=228";
						break;
					case 'bek':
						$kondisi .= "kota=161 or kota=162";
						break;
					case 'ban':
						$kondisi .= "kota=159 or kota=160 or kota=177";
						break;
					case 'yog':
						$kondisi .= "provinsi=16";
						break;
					case 'sur':
						$kondisi .= "kota=258";
						break;
					case 'med':
						$kondisi .= "kota=49";
						break;
					default:
						# code...
						break;
				}
			}else{
				$kondisi .= "provinsi=".$cari['provinsi'];
			}
			$kondisi .= ") and ";
		}

		$kondisi .= "kategori=:kategori and sub_kategori=:sub_kategori";
		//echo $kondisi;
		$criteria->condition = $kondisi;
		$criteria->params = array(':kategori'=>$cari['kategori'], ':sub_kategori'=>$cari['sub_kategori']);
		$hasil = Post::model()->findAll($criteria);
		$cari['kategori'] = Kategori::model()->findByPk($cari['kategori'])->nama;
		$sesuatu = Post::model()->findAll();
		//print_r($sesuatu);
		//print_r($hasil);
		$this->render('cari',array('model'=>$hasil, 'cari'=>$cari));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$model->provinsi = Provinsi::model()->findByPk($model->provinsi)->nama;
		$model->kota = Kota::model()->findByPk($model->kota)->nama;
		$model->kategori = Kategori::model()->findByPk($model->kategori)->nama;
		$model->sub_kategori = SubKategori::model()->findByPk($model->sub_kategori)->nama;
		$user = User::model()->findByPk($model->id_user);
		$this->render('lihat',array(
			'model'=>$model,'user'=>$user,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionBuat()
	{
		$model=new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			$uploadedFile1=CUploadedFile::getInstance($model,'foto1');
			$uploadedFile2=CUploadedFile::getInstance($model,'foto2');
			$uploadedFile3=CUploadedFile::getInstance($model,'foto3');

			$temp = "";
			if (!empty($uploadedFile1)) {
				$namaFile1 = rand(0,99999)."-".$uploadedFile1;
				$temp .= $namaFile1.";";
			}
			if (!empty($uploadedFile2)) {
				$namaFile2 = rand(0,99999)."-".$uploadedFile2;
				$temp .= $namaFile2.";";

			}
			if (!empty($uploadedFile3)) {
				$namaFile3 = rand(0,99999)."-".$uploadedFile3;
				$temp .= $namaFile3.";";

			}

			$model->foto= $temp;
			$model->id_user = Yii::app()->session['id'];
			$model->status = 1;
			if($model->save()){
				if (!empty($uploadedFile1)) {
					$uploadedFile1->saveAs(Yii::app()->basePath.'/../images/post/'.$namaFile1);
				}
				if (!empty($uploadedFile2)) {
					$uploadedFile2->saveAs(Yii::app()->basePath.'/../images/post/'.$namaFile2);

				}
				if (!empty($uploadedFile3)) {
					$uploadedFile3->saveAs(Yii::app()->basePath.'/../images/post/'.$namaFile3);

				}
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('buat',array(
			'model'=>$model,
		));
	}

	public function actionDynamicCategories()
	{
		if (!isset($_POST['cari']['kategori'])) {
			$data=SubKategori::model()->findAll('id_kategori=:idKategori', 
			              array(':idKategori'=>(int) $_POST['Post']['kategori']));
		}else{
			$data=SubKategori::model()->findAll('id_kategori=:idKategori', 
			              array(':idKategori'=>(int) $_POST['cari']['kategori']));
		}
	    
	 
	    $data=CHtml::listData($data,'id','nama');
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}

	public function actionDynamiccities()
	{
	    $data=Kota::model()->findAll('id_provinsi=:idProv', 
	                  array(':idProv'=>(int) $_POST['Post']['provinsi']));
	 
	    $data=CHtml::listData($data,'id','nama');
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
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

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
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
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
