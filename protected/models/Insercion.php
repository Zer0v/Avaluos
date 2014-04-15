<?php

class Insercion extends CFormModel
{
 public $idPresupuestoReconstruccion;
 public $copropiedad;
 public $nitCc;
 public $direccion;
 public $fechaVisita;
 public $intermediario;
 //
 public $idInformacionGeneral;
 public $personaEntrevistada;
 public $telefono;
 public $personaEncargadaAdministracion;
 public $cargo;
 public $ciudad;
 //
 public $idInformacionPredio;
 public $predioCopropiedad;
 public $conjuntoCerrado;
 public $conjuntoCerradoOtro;
 public $ciudadpredio;
 public $barrio;
 public $sector;
 public $estrato;
 public $fechaFundacion;
 public $numeroEmpleados;
 public $horarioTrabajo;
 public $linderoNorte;
 public $linderoNorteOcupado;
 public $linderoSur;
 public $linderoSurOcupado;
 public $linderoOriente;
 public $linderoOrienteOcupado;
 public $linderoOccidente;
 public $linderoOccidenteOcupado;
 public $entidadesOficiales;
 public $poliductosMineras;
 public $aguasFallas;
 public $vias;
 public $amenazasComunidad;
 public $informacionRelacionesComunidad;
 public $relacionesComunidadBuenas;
 
 public function rules()
	{
		return array(
			array('idPresupuestoReconstruccion
				, copropiedad', 'required'),
			array('idPresupuestoReconstruccion, telefono
				, estrato, fechaFundacion, numeroEmpleados', 'numerical', 'integerOnly'=>true),
			array('copropiedad, intermediario, personaEntrevistada, personaEncargadaAdministracion, cargo, ciudad', 'length', 'max'=>250),
			array('nitCc, direccion, fechaVisita, telefono', 'length', 'max'=>25),
			
			array('idInformacionPredio, predioCopropiedad, conjuntoCerrado, conjuntoCerradoOtro, ciudadpredio, barrio, sector, estrato, fechaFundacion, numeroEmpleados, horarioTrabajo, linderoNorte, linderoNorteOcupado, linderoSur, linderoSurOcupado, linderoOriente, linderoOrienteOcupado, linderoOccidente, linderoOccidenteOcupado, entidadesOficiales, poliductosMineras, aguasFallas, vias, amenazasComunidad, informacionRelacionesComunidad, relacionesComunidadBuenas
				, copropiedad, nitCc, direccion, fechaVisita, intermediario, idInformacionGeneral
				, idPresupuestoReconstruccion, personaEntrevistada, telefono, personaEncargadaAdministracion, cargo, ciudad', 'safe', 'on'=>'search'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstrucción',
			'copropiedad' => 'Copropiedad',
			'nitCc' => 'NIT/CC',
			'direccion' => 'Dirección',
			'fechaVisita' => 'Fecha de Visita',
			'intermediario' => 'Intermediario',
			'idInformacionGeneral' => 'Id Información General',
			'personaEntrevistada' => 'Persona Entrevistada',
			'telefono' => 'Teléfono',
			'personaEncargadaAdministracion' => 'Persona encargada de la Administración',
			'cargo' => 'Cargo',
			'ciudad' => 'Ciudad',
			'idInformacionPredio' => 'Id Información Predio',
			'predioCopropiedad' => 'El predio a asegurar es una copropiedad',
			'conjuntoCerrado' => 'Conjunto cerrado',
			'conjuntoCerradoOtro' => 'Otro',
			'ciudad' => 'Ciudad',
			'barrio' => 'Barrio',
			'sector' => 'Sector',
			'estrato' => 'Estrato',
			'fechaFundacion' => 'Fecha de Fundacion(años)',
			'numeroEmpleados' => 'Número de empleados',
			'horarioTrabajo' => 'Horario de trabajo',
			'linderoNorte' => 'Lindero Norte',
			'linderoNorteOcupado' => 'Ocupado Si/No',
			'linderoSur' => 'Lindero Sur',
			'linderoSurOcupado' => 'Ocupado Si/No',
			'linderoOriente' => 'Lindero Oriente',
			'linderoOrienteOcupado' => 'Ocupado Si/No',
			'linderoOccidente' => 'Lindero Occidente',
			'linderoOccidenteOcupado' => 'Ocupado Si/No',
			'entidadesOficiales' => 'Sedes políticas, bases militares, estaciones de policía, embajadas, entidades oficiales',
			'poliductosMineras' => 'Oleoductos, gasoductos, poliductos, explotaciones mineras, otros similares',
			'aguasFallas' => 'Ríos, quebradas, lagos, lagunas, represas, fallas geológicas',
			'vias' => 'Aeropuertos, autopistas, vías férreas, puertos fluviales, o marítimos',
			'amenazasComunidad' => 'Amenazas contra la copropiedad o sus habitantes',
			'informacionRelacionesComunidad' => 'Información sobre relaciones con la comunidad',
			'relacionesComunidadBuenas' => 'Las relaciones con las comunidad son buenas',
		);
	}
	
	function save(){
		//   BEGIN_TRANSACTION;//  (para asegurar que si hay un error no queden Vets en el aire o mascotas sin Vet)
		$transaction=Yii::app()->db->beginTransaction();
		$PresupuestoReconstruccion = new PresupuestoReconstruccion();
		$PresupuestoReconstruccion->copropiedad=$this->copropiedad;
		$PresupuestoReconstruccion->nitCc=$this->nitCc;
		$PresupuestoReconstruccion->direccion=$this->direccion;
		$PresupuestoReconstruccion->fechaVisita=$this->fechaVisita;
		$PresupuestoReconstruccion->intermediario=$this->intermediario;

		$InformacionGeneral = new InformacionGeneral();

		if($PresupuestoReconstruccion->save()){

			$InformacionGeneral->idPresupuestoReconstruccion=$PresupuestoReconstruccion->idPresupuestoReconstruccion;
			$InformacionGeneral->personaEntrevistada=$this->personaEntrevistada;
			$InformacionGeneral->telefono=$this->telefono;
			$InformacionGeneral->personaEncargadaAdministracion=$this->personaEncargadaAdministracion;
			$InformacionGeneral->cargo=$this->cargo;
			$InformacionGeneral->ciudad=$this->ciudad;
		if($InformacionGeneral->save()){
			$transaction->commit();
			return true;
		}else{
			$transaction->rollBack();
			return false;
			}
		}
		/*si hay error:
		ROLLBACK
		y esto garantiza que no se haya creado solo un vet si su mascota, es decir, begin trans garantiza q si todo salio bien y hay integridad relacional entonces commit, sino rollback y no ha pasado nada.
		END_TRANSACTION*/
		Yii::app()->db->endTransaction();
	}
 
}