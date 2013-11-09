<?php

/**
 * This is the model class for table "victims".
 *
 * The followings are the available columns in table 'victims':
 * @property integer $id
 * @property string $victim_name
 * @property integer $victim_age
 * @property string $victim_description
 * @property integer $shelter_id
 * @property integer $victim_status
 */
class Victims extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Victims the static model class
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
		return 'victims';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('victim_name, victim_age, victim_description, shelter_id, victim_status', 'required'),
			array('victim_age, shelter_id, victim_status', 'numerical', 'integerOnly'=>true),
			array('victim_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, victim_name, victim_age, victim_description, shelter_id, victim_status', 'safe', 'on'=>'search'),
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
			'victim_name' => 'Victim Name',
			'victim_age' => 'Victim Age',
			'victim_description' => 'Victim Description',
			'shelter_id' => 'Shelter',
			'victim_status' => 'Victim Status',
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
		$criteria->compare('victim_name',$this->victim_name,true);
		$criteria->compare('victim_age',$this->victim_age);
		$criteria->compare('victim_description',$this->victim_description,true);
		$criteria->compare('shelter_id',$this->shelter_id);
		$criteria->compare('victim_status',$this->victim_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function getVictimStatus($id){
		$status = self::model()->findByPk($id)->victim_status;

		if($status == 0){
			return 'Alive';
		} else if($status == 1){
			return 'Sick';
		} else if($status == 2){
			return 'Critical';
		} else if($status == 3){
			return 'Deceased';
		}
	}
}