<?php

/**
 * This is the model class for table "ward".
 *
 * The followings are the available columns in table 'ward':
 * @property string $id
 * @property string $site_id
 * @property string $name
 * @property integer $restriction
 *
 * The followings are the available model relations:
 * @property Site $site
 */
class Ward extends CActiveRecord
{
	const RESTRICTION_MALE = 1;
	const RESTRICTION_FEMALE = 2;
	const RESTRICTION_UNDER_16 = 4;
	const RESTRICTION_ATLEAST_16 = 8;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return Ward the static model class
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
		return 'ward';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, name', 'required'),
			array('restriction', 'numerical', 'integerOnly'=>true),
			array('site_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, site_id, name, restriction', 'safe', 'on'=>'search'),
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
			'site' => array(self::BELONGS_TO, 'Site', 'site_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'site_id' => 'Site',
			'name' => 'Name',
			'restriction' => 'Restriction',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('restriction',$this->restriction);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}