<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $id
 * @property string $login
 * @property string $email
 * @property string $pass
 * @property string $status
 */
class User extends CActiveRecord
{
	const ROLE_ADMIN = 'admin';
	const ROLE_USER = 'user';
	public $verifyCode;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{users}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, pass', 'required'),
			array('login','match', 'pattern'=>'/^([A-Za-z0-9 ]+)$/u','message'=>'Допустимые символы A-Za-z0-9 '),
			array('email','email'),
			array('login, email', 'length', 'max'=>50),
			array('pass', 'length', 'max'=>32),
			array('status', 'length', 'max'=>15),
			// The following rule is used by search().
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on'=>'registration'),

			// @todo Please remove those attributes that should not be searched.
			array('id, login, email, pass, status', 'safe', 'on'=>'search'),
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
			'login' => 'Имя',
			'email' => 'E-mail',
			'pass' => 'Пароль',
			'status' => 'Status',
			'verifyCode'=>'Код с картинки'
		);
	}


	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public  function beforeSave(){

		$this->pass = md5($this->pass);
		return parent::beforeSave();
	}
}
