<?php

/**
 * This is the model class for table "tb_office".
 *
 * The followings are the available columns in table 'tb_office':
 * @property integer $id_office
 * @property string $branch_office
 * @property string $address_office
 * @property string $email_office
 * @property string $phone_office
 *
 * The followings are the available model relations:
 * @property TbAuthorBranchOffice[] $tbAuthorBranchOffices
 * @property TbRequest[] $tbRequests
 * @property TbRequest[] $tbRequests1
 * @property TbSpareOffice[] $tbSpareOffices
 * @property TbStockOffice[] $tbStockOffices
 */
class TbOffice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branch_office, address_office, email_office, phone_office', 'required'),
			array('branch_office, address_office, email_office, phone_office', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_office, branch_office, address_office, email_office, phone_office', 'safe', 'on'=>'search'),
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
			'tbAuthorBranchOffices' => array(self::HAS_MANY, 'TbAuthorBranchOffice', 'id_office'),
			'tbRequests' => array(self::HAS_MANY, 'TbRequest', 'id_destiny'),
			'tbRequests1' => array(self::HAS_MANY, 'TbRequest', 'id_origin'),
                        'tbSnSPare' => array(self::HAS_MANY, 'TbSnSpare', 'id_office'),
			'tbSpareOffices' => array(self::HAS_MANY, 'TbSpareOffice', 'id_office'),
			'tbStockOffices' => array(self::HAS_MANY, 'TbStockOffice', 'id_office'),
			'tbStock' => array(self::HAS_MANY, 'TbStock', 'id_office'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_office' => 'No',
			'branch_office' => 'Office',
			'address_office' => 'Address Office',
			'email_office' => 'Email Office',
			'phone_office' => 'Phone Office',
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

		$criteria->compare('id_office',$this->id_office);
		$criteria->compare('branch_office',$this->branch_office,true);
		$criteria->compare('address_office',$this->address_office,true);
		$criteria->compare('email_office',$this->email_office,true);
		$criteria->compare('phone_office',$this->phone_office,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbOffice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
