<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id
 * @property string $judul
 * @property string $harga
 * @property string $konten
 * @property string $foto
 * @property integer $provinsi
 * @property integer $kota
 * @property integer $kategori
 * @property integer $sub_kategori
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $foto1, $foto2, $foto3;
	public function tableName()
	{
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul, harga, konten, foto, provinsi, kota, kategori, sub_kategori, id_user', 'required'),
			array('provinsi, kota, kategori, sub_kategori', 'numerical', 'integerOnly'=>true),
			array('judul', 'length', 'max'=>50),
			array('harga', 'length', 'max'=>20),
			array('foto1, foto2, foto3','file','types'=>'jpg, gif, png, jpeg','allowEmpty'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, judul, harga, konten, foto, provinsi, kota, kategori, sub_kategori, id_user', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'judul' => 'Judul',
			'harga' => 'Harga',
			'konten' => 'Konten',
			'foto' => 'Foto',
			'provinsi' => 'Provinsi',
			'kota' => 'Kota',
			'kategori' => 'Kategori',
			'sub_kategori' => 'Sub Kategori',
			'foto1'=>'Foto 1',
			'foto2'=>'Foto 2',
			'foto3'=>'Foto 3',
			'id_user'=>'ID User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('harga',$this->harga,true);
		$criteria->compare('konten',$this->konten,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('provinsi',$this->provinsi);
		$criteria->compare('kota',$this->kota);
		$criteria->compare('kategori',$this->kategori);
		$criteria->compare('sub_kategori',$this->sub_kategori);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
