<?php

/**
 * This is the model class for table "tb_stock_office".
 *
 * The followings are the available columns in table 'tb_stock_office':
 * @property integer $id_stock_office
 * @property integer $id_office
 * @property integer $id_status_spare
 * @property integer $id_spare
 * @property integer $id_sn
 * @property string $stock_total
 *
 * The followings are the available model relations:
 * @property TbOffice $idOffice
 * @property TbSnSpare $idSn
 * @property TbSpare $idSpare
 * @property TbStatusSpare $idStatusSpare
 */
class TbStockOffice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_stock_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_office, id_status_spare, id_spare, id_sn, stock_total', 'required'),
			array('id_office, id_status_spare, id_spare, id_sn', 'numerical', 'integerOnly'=>true),
			array('stock_total', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_stock_office, id_office, id_status_spare, id_spare, id_sn, stock_total', 'safe', 'on'=>'search'),
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
			'idOffice' => array(self::BELONGS_TO, 'TbOffice', 'id_office'),
			'idSn' => array(self::BELONGS_TO, 'TbSnSpare', 'id_sn'),
			'idSpare' => array(self::BELONGS_TO, 'TbSpare', 'id_spare'),
			'idStatusSpare' => array(self::BELONGS_TO, 'TbStatusSpare', 'id_status_spare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_stock_office' => 'Id Stock Office',
			'id_office' => 'Id Office',
			'id_status_spare' => 'Id Status Spare',
			'id_spare' => 'Id Spare',
			'id_sn' => 'Id Sn',
			'stock_total' => 'Stock Total',
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

		$criteria->compare('id_stock_office',$this->id_stock_office);
		$criteria->compare('id_office',$this->id_office);
		$criteria->compare('id_status_spare',$this->id_status_spare);
		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_sn',$this->id_sn);
		$criteria->compare('stock_total',$this->stock_total,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbStockOffice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
