<?php

/**
 * This is the model class for table "stats".
 *
 * The followings are the available columns in table 'stats':
 * @property integer $id
 * @property integer $player_id
 * @property string $date
 * @property integer $wins
 * @property integer $losses
 */
class Stats extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Stats the static model class
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
		return 'stats';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('player_id, wins, losses', 'required'),
			array('player_id, wins, losses', 'numerical', 'integerOnly'=>true),
			array('date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, player_id, date, wins, losses', 'safe', 'on'=>'search'),
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
			'player' => array(self::BELONGS_TO, 'Players', 'player_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'player_id' => 'Player',
			'date' => 'Date',
			'wins' => 'Wins',
			'losses' => 'Losses',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('player_id',$this->player_id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('wins',$this->wins);
		$criteria->compare('losses',$this->losses);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
