<?php
if($model->registroFotografico!==null){
    if(count($model->registroFotografico)!==0){
?>
    <div style="width:100%;"> 
    <?php 
    $dir=Yii::getPathOfAlias('webroot').'/images/'.$model->idPresupuestoReconstruccion.'/';
    $images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE);  
    foreach($images as $v){
        $v=  str_replace('C:/xampp/htdocs', '', $v);
        echo '<img src="'.$v.'" border="0" style="width:150px;float:left;margin:10px;" />';  
    }  
    ?>  
    </div>

<?php   
    }else{
        echo "No se ha ingresado Registro Fotografico";
    }
}else{
	echo "No se ha ingresado Registro Fotografico";
}
?>