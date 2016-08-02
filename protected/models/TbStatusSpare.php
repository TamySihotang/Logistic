<?php

/**
 * This is the model class for table "tb_status_spare".
 *
 * The followings are the available columns in table 'tb_status_spare':
 * @property integer $id_status_spare
 * @property string $status
 *
 * The followings are the available model relations:
 * @property TbSnSpare[] $tbSnSpares
 * @property TbSpareOffice[] $tbSpareOffices
 * @property TbStockOffice[] $tbStockOffices
 * @property TbStockSpare[] $tbStockSpares
 */
class TbStatusSpare extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_status_spare';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'required'),
			array('status', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_status_spare, status', 'safe', 'on'=>'search'),
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
			'tbSnSpares' => array(self::HAS_MANY, 'TbSnSpare', 'id_status_spare'),
			'tbSpareOffices' => array(self::HAS_MANY, 'TbSpareOffice', 'id_status_spare'),
			'tbStockOffices' => array(self::HAS_MANY, 'TbStockOffice', 'id_status_spare'),
			'tbStockSpares' => array(self::HAS_MANY, 'TbStockSpare', 'id_status_spare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_status_spare' => 'Id Status Spare',
			'status' => 'Status',
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

		$criteria->compare('id_status_spare',$this->id_status_spare);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbStatusSpare the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
