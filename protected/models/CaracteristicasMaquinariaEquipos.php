<?php

/**
 * This is the model class for table "caracteristicas_maquinaria_equipos".
 *
 * The followings are the available columns in table 'caracteristicas_maquinaria_equipos':
 * @property integer $idCaracteristicasMaquinariaEquipos
 * @property integer $idPresupuestoReconstruccion
 * @property string $descripcion
 * @property string $hojaVida
 */
class CaracteristicasMaquinariaEquipos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristicas_maquinaria_equipos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hojaVida', 'required'),
			array('idPresupuestoReconstruccion', 'numerical', 'integerOnly'=>true),
			array('hojaVida', 'length', 'max'=>5),
			array('descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCaracteristicasMaquinariaEquipos, idPresupuestoReconstruccion, descripcion, hojaVida', 'safe', 'on'=>'search'),
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
			'idCaracteristicasMaquinariaEquipos' => 'Id Caracteristicas Maquinaria Equipos',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstruccion',
			'descripcion' => 'Breve Descripción',
			'Se lleva hoja de vida para el respectivo mantenimiento de la maquinaria y equipos' => 'Hoja Vida',
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

		$criteria->compare('idCaracteristicasMaquinariaEquipos',$this->idCaracteristicasMaquinariaEquipos);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('hojaVida',$this->hojaVida,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaracteristicasMaquinariaEquipos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
