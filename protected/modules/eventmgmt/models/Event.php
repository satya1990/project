<?php

/**
 * This is the model class for table "tbl_event".
 *
 * The followings are the available columns in table 'tbl_event':
 * @property string $ename
 * @property string $edate
 * @property string $etime
 * @property string $evenue
 * @property string $econtact
 * @property string $name
 */
class Event extends CActiveRecord
{

	public $name;
	

	/**
	 * @return string the associated database table name
	 */

	protected function beforeSave()
	{
		$this->edate=date('Y-m-d', strtotime($this->edate));
		return TRUE;

	}

	protected function afterFind()
	{
		$this->edate=date('d-m-Y', strtotime($this->edate));
		return TRUE;
	}

	public function tableName()
	{
		return 'tbl_event';	
	}

	public function primaryKey()
	{
		return array('ename','econtact');
	}

	public function isValidDate($attribute, $params)
	{
	    if(strtotime($this->$attribute) < time())
	    {
		 $this->addError($attribute, 'Date cannot be in the past!');
	    }
	}
		/**
	 * @return array validation rules for model attributes.
	 */
	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ename', 'length', 'max'=>30),
			array('ename,etime,econtact,evenue,edate','required'),
			array('econtact','match','not'=>false,'pattern'=>'/^[7-9]{1}[0-9]{9}$/','message'=>'Invalid Mobile'),
			array('etime', 'length', 'max'=>5),
			array('etime','match','not'=>false,'pattern'=>'/([0-1]\d|2[0-3]):([0-5]\d)/','message'=>'Invalid Mobile'),
			array('name', 'file', 'types'=>'jpg, gif, png,pdf'),  
			array('evenue', 'length', 'max'=>50),
			array('edate', 'isValidDate'),
			//array('edate','compare','compareValue'=>date('d-m-Y'),'operator'=>'>=', 'allowEmpty'=>false),
			array('econtact', 'length', 'max'=>10),
			array('edate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ename, edate, etime, evenue, econtact', 'safe', 'on'=>'search'),
			array('ename', 'unique', 'on' => 'insert,update', 'message' => 'This event has already been created!'),

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
			'ename' => 'Ename',
			'edate' => 'Edate',
			'etime' => 'Etime',
			'evenue' => 'Evenue',
			'econtact' => 'Econtact',
			'name' => 'Name',
	
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

		$criteria->compare('ename',$this->ename,true);
		$criteria->compare('edate',$this->edate,true);
		$criteria->compare('etime',$this->etime,true);
		$criteria->compare('evenue',$this->evenue,true);
		$criteria->compare('econtact',$this->econtact,true);
		$criteria->compare('name',$this->name,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}



