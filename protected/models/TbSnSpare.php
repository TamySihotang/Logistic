<?php

/**
 * This is the model class for table "tb_sn_spare".
 *
 * The followings are the available columns in table 'tb_sn_spare':
 * @property integer $id_sn
 * @property integer $id_office
 * @property integer $id_spare
 * @property integer $id_status_spare
 * @property string $serial_number
 *
 * The followings are the available model relations:
 * @property TbDescKerusakan[] $tbDescKerusakans
 * @property TbDescPenambahan[] $tbDescPenambahans
 * @property TbDescPengurangan[] $tbDescPengurangans
 * @property TbRequest[] $tbRequests
 * @property TbSpare $idSpare
 * @property TbStatusSpare $idStatusSpare
 * @property TbSpareOffice[] $tbSpareOffices
 * @property TbStockOffice[] $tbStockOffices
 * @property TbStockSpare[] $tbStockSpares
 */
class TbSnSpare extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_sn_spare';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_spare, id_office, id_status_spare, serial_number', 'required'),
			array('id_spare, id_office, id_status_spare', 'numerical', 'integerOnly'=>true),
			array('serial_number', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sn, id_spare, id_office, id_status_spare, serial_number', 'safe', 'on'=>'search'),
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
			'tbDescKerusakans' => array(self::HAS_MANY, 'TbDescKerusakan', 'id_sn'),
			'tbDescPenambahans' => array(self::HAS_MANY, 'TbDescPenambahan', 'id_sn'),
			'tbDescPengurangans' => array(self::HAS_MANY, 'TbDescPengurangan', 'id_sn'),
			'tbRequests' => array(self::HAS_MANY, 'TbRequest', 'id_sn'),
                        'idOffice' => array(self::BELONGS_TO, 'TbOffice', 'id_office'),
			'idSpare' => array(self::BELONGS_TO, 'TbSpare', 'id_spare'),
			'idStatusSpare' => array(self::BELONGS_TO, 'TbStatusSpare', 'id_status_spare'),
			'tbSpareOffices' => array(self::HAS_MANY, 'TbSpareOffice', 'id_sn'),
			'tbStockOffices' => array(self::HAS_MANY, 'TbStockOffice', 'id_sn'),
			'tbStockSpares' => array(self::HAS_MANY, 'TbStockSpare', 'id_sn'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sn' => 'Id Sn',
                        'id_office' => 'Office',
			'id_spare' => 'Spare',
			'id_status_spare' => 'Status Spare',
			'serial_number' => 'Serial Number',
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
                
		$criteria->compare('id_sn',$this->id_sn);
                $criteria->compare('id_office',$this->id_office);
		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_status_spare',$this->id_status_spare);
		$criteria->compare('serial_number',$this->serial_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbSnSpare the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
