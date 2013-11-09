<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $username
 * @property string $user_email
 * @property string $user_password
 * @property string $user_fullname
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, user_email, user_password, user_fullname', 'required'),
			array('username, user_email, user_password, user_fullname', 'length', 'max'=>100),
			array('user_email', 'match', 'not'=>true, 'pattern'=>'/[^a-zA-Z0-9\-\_\.\s\@]/', 'message'=>Yii::t('labels','Invalid Email or Username')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, user_email, user_password, user_fullname', 'safe', 'on'=>'search'),
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
			'username' => 'Username',
			'user_email' => 'User Email',
			'user_password' => 'User Password',
			'user_fullname' => 'User Fullname',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_fullname',$this->user_fullname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}