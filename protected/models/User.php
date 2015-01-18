<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $email
 * @property string $password
 * @property integer $provinsi
 * @property integer $kota
 * @property string $telepon
 * @property string $pendidikan
 * @property string $bb
 * @property string $fb
 * @property string $twitter
 * @property string $ig
 * @property string $bio
 */
class User extends CActiveRecord
{
	public $cpassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, username, email, password, provinsi, kota, telepon, cpassword', 'required','message'=>'{attribute} tidak boleh kosong'),
			array('provinsi, kota', 'numerical', 'integerOnly'=>true),
			array('nama, username, email', 'length', 'max'=>30),
			array('password', 'length', 'max'=>255),
			array('telepon', 'length', 'max'=>15),
			array('pendidikan', 'length', 'max'=>20),
			array('bb', 'length', 'max'=>10),
			array('fb, twitter, ig', 'length', 'max'=>100),
			array('bio', 'safe'),
			array('cpassword','compare','compareAttribute'=>'password','message'=>'Password tidak sama','on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nama, username, email, password, provinsi, kota, telepon, pendidikan, bb, fb, twitter, ig, bio', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'email' => 'Email',
			'password' => 'Password',
			'provinsi' => 'Provinsi',
			'kota' => 'Kota',
			'telepon' => 'Telepon',
			'pendidikan' => 'Pendidikan',
			'bb' => 'Bb',
			'fb' => 'Fb',
			'twitter' => 'Twitter',
			'ig' => 'Ig',
			'bio' => 'Bio',
			'cpassword'=>'Konfirmasi Password',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('provinsi',$this->provinsi);
		$criteria->compare('kota',$this->kota);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('pendidikan',$this->pendidikan,true);
		$criteria->compare('bb',$this->bb,true);
		$criteria->compare('fb',$this->fb,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('ig',$this->ig,true);
		$criteria->compare('bio',$this->bio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}