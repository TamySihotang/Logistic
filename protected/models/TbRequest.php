<?php

/**
 * This is the model class for table "tb_request".
 *
 * The followings are the available columns in table 'tb_request':
 * @property integer $id_request
 * @property integer $order_number
 * @property integer $id_sn
 * @property integer $id_spare
 * @property integer $id_origin
 * @property integer $id_destiny
 * @property integer $id_author
 * @property string $start_date
 * @property string $end_date
 * @property string $status_request
 *
 * The followings are the available model relations:
 * @property TbAuthorBranchOffice $idAuthor
 * @property TbOffice $idDestiny
 * @property TbOffice $idOrigin
 * @property TbSnSpare $idSn
 * @property TbSpare $idSpare
 */
class TbRequest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sn, id_spare, id_origin, id_destiny, id_author, start_date, end_date, status_request', 'required'),
			array('order_number, id_sn, id_spare, id_origin, id_destiny, id_author', 'numerical', 'integerOnly'=>true),
			array('status_request', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_request, order_number, id_sn, id_spare, id_origin, id_destiny, id_author, start_date, end_date, status_request', 'safe', 'on'=>'search'),
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
			'idAuthor' => array(self::BELONGS_TO, 'TbAuthorBranchOffice', 'id_author'),
			'idDestiny' => array(self::BELONGS_TO, 'TbOffice', 'id_destiny'),
			'idOrigin' => array(self::BELONGS_TO, 'TbOffice', 'id_origin'),
			'idSn' => array(self::BELONGS_TO, 'TbSnSpare', 'id_sn'),
			'idSpare' => array(self::BELONGS_TO, 'TbSpare', 'id_spare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_request' => 'Id Request',
			'order_number' => 'Order Number',
			'id_sn' => 'Serial Number',
			'id_spare' => 'Sparepart',
			'id_origin' => 'Origin',
			'id_destiny' => 'Destiny',
			'id_author' => 'Requester',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'status_request' => 'Status Request',
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

		$criteria->compare('id_request',$this->id_request);
		$criteria->compare('order_number',$this->order_number);
		$criteria->compare('id_sn',$this->id_sn);
		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_origin',$this->id_origin);
		$criteria->compare('id_destiny',$this->id_destiny);
		$criteria->compare('id_author',$this->id_author);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('status_request',$this->status_request,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbRequest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
