<?php

/**
 * This is the model class for table "caracteristicas_almacenamiento".
 *
 * The followings are the available columns in table 'caracteristicas_almacenamiento':
 * @property integer $idCaracteristicasAlmacenamiento
 * @property integer $idPresupuestoReconstruccion
 * @property string $tanques
 * @property integer $cantidad
 * @property string $ubicacionFisica
 * @property string $contenido
 * @property string $capacidad
 * @property string $materialConstruccion
 */
class CaracteristicasAlmacenamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristicas_almacenamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tanques', 'required'),
			array('idPresupuestoReconstruccion, cantidad', 'numerical', 'integerOnly'=>true),
			array('tanques', 'length', 'max'=>5),
			array('ubicacionFisica, contenido, materialConstruccion', 'length', 'max'=>250),
			array('capacidad', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCaracteristicasAlmacenamiento, idPresupuestoReconstruccion, tanques, cantidad, ubicacionFisica, contenido, capacidad, materialConstruccion', 'safe', 'on'=>'search'),
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
			'idCaracteristicasAlmacenamiento' => 'Id Caracteristicas Almacenamiento',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstruccion',
			'tanques' => 'Tanques',
			'cantidad' => 'Cantidad',
			'ubicacionFisica' => 'Ubicación Física',
			'contenido' => 'Contenido',
			'capacidad' => 'Capacidad',
			'materialConstruccion' => 'Material de construcción',
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

		$criteria->compare('idCaracteristicasAlmacenamiento',$this->idCaracteristicasAlmacenamiento);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('tanques',$this->tanques,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('ubicacionFisica',$this->ubicacionFisica,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('capacidad',$this->capacidad,true);
		$criteria->compare('materialConstruccion',$this->materialConstruccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaracteristicasAlmacenamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
