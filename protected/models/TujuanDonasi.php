<?php

/**
 * This is the model class for table "tujuan_donasi".
 *
 * The followings are the available columns in table 'tujuan_donasi':
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $kontak
 * @property string $telepon
 * @property string $email
 * @property string $profil
 * @property string $tujuan
 * @property string $tentang
 * @property string $fb
 * @property string $youtube
 * @property string $website
 * @property string $foto
 */
class TujuanDonasi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tujuan_donasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, kontak, telepon, email, profil, tujuan, tentang, fb, youtube, website, foto', 'required'),
			array('nama, alamat, kontak, telepon, email, tujuan, tentang, fb, youtube, website, foto', 'length', 'max'=>255),
			array('profil', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, alamat, kontak, telepon, email, profil, tujuan, tentang, fb, youtube, website, foto', 'safe', 'on'=>'search'),
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
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'kontak' => 'Kontak',
			'telepon' => 'Telepon',
			'email' => 'Email',
			'profil' => 'Profil',
			'tujuan' => 'Tujuan',
			'tentang' => 'Tentang',
			'fb' => 'Fb',
			'youtube' => 'Youtube',
			'website' => 'Website',
			'foto' => 'Foto',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kontak',$this->kontak,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('profil',$this->profil,true);
		$criteria->compare('tujuan',$this->tujuan,true);
		$criteria->compare('tentang',$this->tentang,true);
		$criteria->compare('fb',$this->fb,true);
		$criteria->compare('youtube',$this->youtube,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('foto',$this->foto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TujuanDonasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
