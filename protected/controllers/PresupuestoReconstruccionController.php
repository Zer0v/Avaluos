<?php

class PresupuestoreconstruccionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(array('CrugeAccessControlFilter'));
		/*return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		
		$this->render('ver',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Insercion;
		//$model1=new InformacionGeneral;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		
		if(isset($_POST['Insercion']))
		{
			$model->attributes=$_POST['Insercion'];
			
			/*$valid=$model->validate();
			$valid=$model1->validate() && $valid;*/
			
			if($model->save()){
				
				$this->redirect('index');
			}
		
		}
		$this->render('create',array(
			'model'=>$model,
		));
	
	}

	/**
	 * Ingresar en el nuevo modelo.
	 */
	public function actionIngresar()
	{
		$modelpr=new PresupuestoReconstruccion;
		$modelig=new InformacionGeneral;
		$modelip=new InformacionPredio;
		$modelcc=new CaracteristicasConstruccion;
		$modelci=new CaracteristicasInstalacion;
		$modelcme=new CaracteristicasMaquinariaEquipos;
		$modelca=new CaracteristicasAlmacenamiento;
                $modelrf=new RegistroFotografico;
                $msg='';
		
		$this->performAjaxValidation(array($modelpr,$modelig,$modelip,$modelcc,$modelci,$modelcme,$modelca,$modelrf));
		
		if(isset($_POST['PresupuestoReconstruccion'], $_POST['InformacionGeneral'], $_POST['InformacionPredio'], $_POST['CaracteristicasConstruccion'], $_POST['CaracteristicasInstalacion'], $_POST['CaracteristicasMaquinariaEquipos'], $_POST['CaracteristicasAlmacenamiento']/*, $_POST['RegistroFotografico']*/))
		{
			$modelpr->attributes=$_POST['PresupuestoReconstruccion'];
			$modelig->attributes=$_POST['InformacionGeneral'];
			$modelip->attributes=$_POST['InformacionPredio'];
			$modelcc->attributes=$_POST['CaracteristicasConstruccion'];
			$modelci->attributes=$_POST['CaracteristicasInstalacion'];
			$modelcme->attributes=$_POST['CaracteristicasMaquinariaEquipos'];
			$modelca->attributes=$_POST['CaracteristicasAlmacenamiento'];
                        
                        $imagen=CUploadedFile::getInstancesByName('imagen');
			
			if($modelpr->nuevo=='No')
				$modelpr->presupuestoexistente();
			
			
			$valid=$modelpr->validate() && $modelig->validate() && $modelip->validate() && $modelcc->validate() && $modelci->validate() && $modelcme->validate() && $modelca->validate()/* && $modelrf->validate()*/;
			
			 if($valid)
			{
				// use false parameter to disable validation
				$modelpr->save(false);
                                $id=$modelpr->idPresupuestoReconstruccion;
				$modelig->idPresupuestoReconstruccion=$id;
				$modelip->idPresupuestoReconstruccion=$id;
				$modelcc->idPresupuestoReconstruccion=$id;
				$modelci->idPresupuestoReconstruccion=$id;
				$modelcme->idPresupuestoReconstruccion=$id;
				$modelca->idPresupuestoReconstruccion=$id;
				$modelig->save(false);
				$modelip->save(false);
				$modelcc->save(false);
				$modelci->save(false);
				$modelcme->save(false);
				$modelca->save(false);
				
                                /////
                                
                                //$buscar=array(' ','ñ','á','é','í','ó','ú');
                                //$reemplazar=array('-','n','a','e','i','o','u');

                                $ruta=Yii::getPathOfAlias('webroot').'/images/'.$id.'/';

                                if(!is_dir($ruta)){
                                    mkdir($ruta, 0, true);
                                    chmod($ruta, 0755);
                                }
                                foreach ($imagen as $im => $i) {
                                    $aleatorio=rand(100000,999999);
                                    $img=$aleatorio.'-'.$i->name;

                                    $modelrf_s=new RegistroFotografico;
                                    $modelrf_s->idPresupuestoReconstruccion=$id;
                                    $modelrf_s->imagen=$img; 
                                    $modelrf_s->save();

                                    $i->saveAs($ruta.$img);
                                }
                                
                                ////////
                                
                                
				$this->redirect(array('view','id'=>$modelpr->idPresupuestoReconstruccion));
			}
                        
                }

		$this->render('ingresar',array(
			'modelpr'=>$modelpr,
			'modelig'=>$modelig,
			'modelip'=>$modelip,
			'modelcc'=>$modelcc,
			'modelci'=>$modelci,
			'modelcme'=>$modelcme,
			'modelca'=>$modelca,
                        'modelrf'=>$modelrf,
                        'msg'=>$msg,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PresupuestoReconstruccion']))
		{
			$model->attributes=$_POST['PresupuestoReconstruccion'];
			if($model->save())
				$this->redirect(array('actualizar','id'=>$id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionActualizar($id)
	{
		$modelpr=$this->loadModel($id);
		$modelig=InformacionGeneral::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelip=InformacionPredio::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelcc=CaracteristicasConstruccion::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelci=CaracteristicasInstalacion::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelcme=CaracteristicasMaquinariaEquipos::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelca=CaracteristicasAlmacenamiento::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($modelpr,$modelig,$modelip,$modelcc,$modelci,$modelcme,$modelca));

		if(isset($_POST['PresupuestoReconstruccion'], $_POST['InformacionGeneral'], $_POST['InformacionPredio'], $_POST['CaracteristicasConstruccion'], $_POST['CaracteristicasInstalacion'], $_POST['CaracteristicasMaquinariaEquipos'], $_POST['CaracteristicasAlmacenamiento']))
		{
			$modelpr->attributes=$_POST['PresupuestoReconstruccion'];
			$modelig->attributes=$_POST['InformacionGeneral'];
			$modelip->attributes=$_POST['InformacionPredio'];
			$modelcc->attributes=$_POST['CaracteristicasConstruccion'];
			$modelci->attributes=$_POST['CaracteristicasInstalacion'];
			$modelcme->attributes=$_POST['CaracteristicasMaquinariaEquipos'];
			$modelca->attributes=$_POST['CaracteristicasAlmacenamiento'];
			
			$valid=$modelpr->validate() && $modelig->validate() && $modelip->validate() && $modelcc->validate() && $modelci->validate() && $modelcme->validate() && $modelca->validate();
			
			 if($valid){
				$modelpr->save(false);
				$modelig->save(false);
				$modelip->save(false);
				$modelcc->save(false);
				$modelci->save(false);
				$modelcme->save(false);
				$modelca->save(false);
				
				$this->redirect(array('view','id'=>$id));
			 }
		}

		$this->render('actualizar',array(
			'modelpr'=>$modelpr,
			'modelig'=>$modelig,
			'modelip'=>$modelip,
			'modelcc'=>$modelcc,
			'modelci'=>$modelci,
			'modelcme'=>$modelcme,
			'modelca'=>$modelca,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
                $model=$this->loadModel($id);
                
                $model->informacionGeneral->delete();
                $model->informacionPredio->delete();
                $model->caracteristicasConstruccion->delete();
                $model->caracteristicasInstalacion->delete();
                $model->caracteristicasMaquinariaEquipos->delete();
                $model->caracteristicasAlmacenamiento->delete();
		
                if($model->registroFotografico!==null){
                    $ruta=Yii::getPathOfAlias('webroot').'/images/'.$id;
                    if(!is_dir($ruta)){
                        foreach(glob($ruta."/*") as $archivos_carpeta)
                        {
                            unlink($archivos_carpeta);
                        }
                        rmdir($ruta);
                    }
                
                    foreach ($model->registroFotografico as $rf){
                        $rf->delete();
                    }
                }
                
                $model->delete();
                
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PresupuestoReconstruccion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PresupuestoReconstruccion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PresupuestoReconstruccion']))
			$model->attributes=$_GET['PresupuestoReconstruccion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PresupuestoReconstruccion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PresupuestoReconstruccion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PresupuestoReconstruccion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='presupuesto-reconstruccion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
