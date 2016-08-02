<?php

/**
 * This is the model class for table "tb_desc_penambahan".
 *
 * The followings are the available columns in table 'tb_desc_penambahan':
 * @property integer $id_desc_tambah
 * @property integer $id_sn
 * @property string $description
 *
 * The followings are the available model relations:
 * @property TbSnSpare $idSn
 */
class TbDescPenambahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_desc_penambahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sn, description', 'required'),
			array('id_sn', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_desc_tambah, id_sn, description', 'safe', 'on'=>'search'),
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
			'idSn' => array(self::BELONGS_TO, 'TbSnSpare', 'id_sn'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_desc_tambah' => 'Id Desc Tambah',
			'id_sn' => 'Id Sn',
			'description' => 'Description',
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

		$criteria->compare('id_desc_tambah',$this->id_desc_tambah);
		$criteria->compare('id_sn',$this->id_sn);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbDescPenambahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
