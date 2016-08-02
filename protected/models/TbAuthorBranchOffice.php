<?php

/**
 * This is the model class for table "tb_author_branch_office".
 *
 * The followings are the available columns in table 'tb_author_branch_office':
 * @property integer $id_author
 * @property integer $id_user
 * @property integer $id_office
 * @property string $author_name
 * @property string $email_author
 * @property string $phone_author
 *
 * The followings are the available model relations:
 * @property TbOffice $idOffice
 * @property TbUser $idUser
 * @property TbRequest[] $tbRequests
 */
class TbAuthorBranchOffice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_author_branch_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_office, author_name, email_author, phone_author', 'required'),
			array('id_user, id_office', 'numerical', 'integerOnly'=>true),
			array('author_name, email_author, phone_author', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_author, id_user, id_office, author_name, email_author, phone_author', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'TbUser', 'id_user'),
			'tbRequests' => array(self::HAS_MANY, 'TbRequest', 'id_author'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_author' => 'ID',
			'id_user' => 'Id User',
			'id_office' => 'Office',
			'author_name' => 'Author Name',
			'email_author' => 'Email Author',
			'phone_author' => 'Phone Author',
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

		$criteria->compare('id_author',$this->id_author);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_office',$this->id_office);
		$criteria->compare('author_name',$this->author_name,true);
		$criteria->compare('email_author',$this->email_author,true);
		$criteria->compare('phone_author',$this->phone_author,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TbAuthorBranchOffice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
