<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "../class/vehiculoModel.php";
require_once "../class/imgModel.php";
$accion=$_GET['accion'];
 // id	name	user	pass	active	id_tipo_user
if ($accion=='guardar') {
    if (isset($_POST['cliente'])) {
        $cliente=$_POST['cliente'];
    }else{
        $cliente=NULL;
    }
    if (isset($_POST['nombre'])) {
        $nombre=$_POST['nombre'];
    }else{
        $nombre=NULL;
    }
    if (isset($_POST['placa'])) {
        $placa=$_POST['placa'];
    }else{
        $placa=NULL;
    }
    if (isset($_POST['marca'])) {
        $marca=$_POST['marca'];
    }else{
        $marca=NULL;
    }
    if (isset($_POST['modelo'])) {
        $modelo=$_POST['modelo'];
    }else{
        $modelo=NULL;
    }
    if (isset($_POST['color'])) {
        $color=$_POST['color'];
    }else{
        $color=NULL;
    }
    if (isset($_POST['año'])) {
        $año=$_POST['año'];
    }else{
        $año=NULL;
    }
    if (isset($_POST['tipo'])) {
        $tipo=$_POST['tipo'];
    }else{
        $tipo=NULL;
    }
    if (isset($_POST['aseguradora'])) {
        $aseguradora=$_POST['aseguradora'];
    }else{
        $aseguradora=NULL;
    }
    if (isset($_POST['chasis_n'])) {
        $chasis_n=$_POST['chasis_n'];
    }else{
        $dui=NULL;
    }
    if (isset($_POST['motor_n'])) {
        $motor_n=$_POST['motor_n'];
    }else{
        $motor_n=NULL;
    }
    $estado=1;
    
    $usua = new Vehiculo();
    $usua->setCliente($cliente);
    $usua->setEstado($estado);
    $usua->setMarca($marca);
    $usua->setModelo($modelo);
    $usua->setColor($color);
    $usua->setAseguradora($aseguradora);
    $usua->setPlaca($placa);
    $usua->setAño($año);
    $usua->setTipo($tipo);
    $usua->setChasis_n($chasis_n);
    $usua->setMotor_n($motor_n);
    $save =$usua->save();
   
       if ($save==TRUE) {
           
        $informacion = [
            "tittle" => "Correcto",
            "text" => "Automovil registrado con exito, a nombre de: ".$nombre,
            "type" => "success",
            "url" => "vehiculoCreate.php"
            ];
            echo json_encode($informacion);
       }else{
           //header('Location: ../list/Usuarios.php?error=incorrecto');
           if ($_SESSION['cantidad']>0) {
               $informacion = [
                   "tittle" => "Advertencia",
                   "text" => "Contacto registrado",
                   "type" => "warning",
                 ];
           }else{
               $informacion = [
               "tittle" => "Error",
               "text" => "No fue posible registrar el contacto, por favor verifique los datos y vuelva a intentarlo".$_SESSION['mensaje'],
               "type" => "error",
             ];
               
           }
                         echo json_encode($informacion);
       }
   }else if($accion=='modelos'){
    $id_marca=$_POST['id_marca'];
    $sucursales='';
    $sucursal = new Vehiculo();
    $listSucursales = $sucursal->selectALLOneCliente($id_marca);
    foreach ($listSucursales as $dataCliente) {
        $sucursales.='<option data-tokens="'.$dataCliente['modelo'].'" value="'.$dataCliente['id_modelo'].'">'.$dataCliente['modelo'].'</option>';
    }
    echo $sucursales;
}
elseif ($accion=='logout') {
//	session_start();
	session_unset();
	session_destroy();
	//llenamos la sesion logged-in como false
	session_start();
	$_SESSION['logged-in']=false;

	$informacion = [
		"tittle" => "Correcto",
		"text" => "Hasta la proxima",
		"type" => "success",
		"url" => "index.php"
	];
	echo json_encode($informacion);
}elseif ($accion=='uploadimg') {
	if (isset($_FILES['up_img'])) {
		$cliente=$_POST['cliente'];	
		$placa=$_POST['placa'];	
		
        
		if($_FILES['up_img']['type']=='image/png' || $_FILES['up_img']['type']=='image/jpeg' || $_FILES['up_img']['type']=='image/jpg'){
			
			 $carpeta = $_SERVER['DOCUMENT_ROOT'].'/src/assets/img/upload/'.$cliente.'_'.$placa;
			$directorio = $carpeta.'/archivo_usr_'.$placa.'_';
	
				if (!file_exists($carpeta)) {
					
					mkdir($carpeta, 0777, true);
					$fichero=$directorio.basename($_FILES['up_img']['name']);
					if (move_uploaded_file($_FILES['up_img']['tmp_name'], $fichero)) {
						$nombre=$_FILES['up_img']['name'];
						$foto_uno='archivo_usr_'.$placa.'_';
						$imagen= new Imagenes();
						$imagen->setId_usuario($cliente);
						$imagen->setName_temp($nombre);
						$save = $imagen->uploadimg($placa);
						} 
				}else{
					
					$fichero=$directorio.basename($_FILES['up_img']['name']);
					if (move_uploaded_file($_FILES['up_img']['tmp_name'], $fichero)) {
						$nombre=$_FILES['up_img']['name'];
						$foto_uno='archivo_usr_'.$cliente.'_'.$nombre;
						$imagen= new Imagenes();
						$imagen->setId_usuario($cliente);
						$imagen->setName_temp($nombre);
						$save = $imagen->uploadimg($placa);
						} 
				}	

		}
	}


}
?>