<?php

/**
 * This is the model class for table "tb_spare".
 *
 * The followings are the available columns in table 'tb_spare':
 * @property integer $id_spare
 * @property string $category
 * @property string $series
 * @property string $type
 * @property string $model
 * @property string $aliasname
 * @property string $partno
 * @property string $description
 * @property string $suband
 * @property string $hilo
 *
 * The followings are the available model relations:
 * @property TbRequest[] $tbRequests
 * @property TbSnSpare[] $tbSnSpares
 * @property TbSpareOffice[] $tbSpareOffices
 * @property TbStockOffice[] $tbStockOffices
 * @property TbStockSpare[] $tbStockSpares
 */
class TbSpare extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_spare';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, series, type, model, aliasname, partno, description, suband, hilo', 'required'),
			array('category, series, type, model, aliasname, partno, description, suband, hilo', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_spare, category, series, type, model, aliasname, partno, description, suband, hilo', 'safe', 'on'=>'search'),
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
			'tbRequests' => array(self::HAS_MANY, 'TbRequest', 'id_spare'),
			'tbSnSpares' => array(self::HAS_MANY, 'TbSnSpare', 'id_spare'),
			'tbSpareOffices' => array(self::HAS_MANY, 'TbSpareOffice', 'id_spare'),
			'tbStockOffices' => array(self::HAS_MANY, 'TbStockOffice', 'id_spare'),
			'tbStockSpares' => array(self::HAS_MANY, 'TbStockSpare', 'id_spare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_spare' => 'Id Spare',
			'category' => 'Category',
			'series' => 'Series',
			'type' => 'Type',
			'model' => 'Model',
			'aliasname' => 'Aliasname',
			'partno' => 'Partno',
			'description' => 'Description',
			'suband' => 'Suband',
			'hilo' => 'Hilo',
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

		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('aliasname',$this->aliasname,true);
		$criteria->compare('partno',$this->partno,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('suband',$this->suband,true);
		$criteria->compare('hilo',$this->hilo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbSpare the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
