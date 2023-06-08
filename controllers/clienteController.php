<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "../class/clienteModel.php";
$accion=$_GET['accion'];
 // id	name	user	pass	active	id_tipo_user
if ($accion=='guardar') {
    if (isset($_POST['name'])) {
        $name=$_POST['name'];
    }else{
        $name=NULL;
    }
    if (isset($_POST['cumpleaños'])) {
        $cumpleaños=$_POST['cumpleaños'];
    }else{
        $cumpleaños=NULL;
    }
    if (isset($_POST['edad'])) {
        $edad=$_POST['edad'];
    }else{
        $edad=NULL;
    }
    if (isset($_POST['sexo'])) {
        $sexo=$_POST['sexo'];
    }else{
        $sexo=NULL;
    }
    if (isset($_POST['email'])) {
        $email=$_POST['email'];
    }else{
        $email=NULL;
    }
    if (isset($_POST['telefono'])) {
        $telefono=$_POST['telefono'];
    }else{
        $telefono=NULL;
    }
    if (isset($_POST['tel_fijo'])) {
        $tel_fijo=$_POST['tel_fijo'];
    }else{
        $tel_fijo=NULL;
    }
    if (isset($_POST['direccion'])) {
        $direccion=$_POST['direccion'];
    }else{
        $direccion=NULL;
    }
    if (isset($_POST['dui'])) {
        $dui=$_POST['dui'];
    }else{
        $dui=NULL;
    }
    if (isset($_POST['nit'])) {
        $nit=$_POST['nit'];
    }else{
        $nit=NULL;
    }
    if (isset($_POST['n_licencia'])) {
        $n_licencia=$_POST['n_licencia'];
    }else{
        $n_licencia=NULL;
    }
    if (isset($_POST['reg_iva'])) {
        $reg_iva=$_POST['reg_iva'];
    }else{
        $reg_iva=NULL;
    }
    if (isset($_POST['giro'])) {
        $giro=$_POST['giro'];
    }else{
        $giro=NULL;
    }
    $estado=1;
    
    $usua = new Cliente();
    $usua->setName($name);
    $usua->setDireccion($direccion);
    $usua->setTelefono($telefono);
    $usua->setDui($dui);
    $usua->setNit($nit);
    $usua->setLicencia($n_licencia);
    $usua->setCorreo($email);
    $usua->setGenero($sexo);
    $usua->setEdad($edad);
    $usua->setReg_iva($reg_iva);
    $usua->setTel_fijo($tel_fijo);
    $usua->setCumpleaños($cumpleaños);
    $usua->setGiro($giro);
    $save =$usua->save();
   
       if ($save==TRUE) {
           
        $informacion = [
            "tittle" => "Correcto",
            "text" => "Cliente registrado con exito ",
            "type" => "success",
            "url" => "cliente.php"
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
               "text" => "No fue posible registrar el contacto, por favor verifique los datos y vuelva a intentarlo ".$_SESSION['mensaje'],
               "type" => "error",
             ];
               
           }
                         echo json_encode($informacion);
       }
   }
   elseif ($accion=='update') {
    $id = $_POST['id'];
    if (isset($_POST['name'])) {
        $name=$_POST['name'];
    }else{
        $name=NULL;
    }
    if (isset($_POST['cumpleaños'])) {
        $cumpleaños=$_POST['cumpleaños'];
    }else{
        $cumpleaños=NULL;
    }
    if (isset($_POST['edad'])) {
        $edad=$_POST['edad'];
    }else{
        $edad=NULL;
    }
    if (isset($_POST['sexo'])) {
        $sexo=$_POST['sexo'];
    }else{
        $sexo=NULL;
    }
    if (isset($_POST['email'])) {
        $email=$_POST['email'];
    }else{
        $email=NULL;
    }
    if (isset($_POST['telefono'])) {
        $telefono=$_POST['telefono'];
    }else{
        $telefono=NULL;
    }
    if (isset($_POST['tel_fijo'])) {
        $tel_fijo=$_POST['tel_fijo'];
    }else{
        $tel_fijo=NULL;
    }
    if (isset($_POST['direccion'])) {
        $direccion=$_POST['direccion'];
    }else{
        $direccion=NULL;
    }
    if (isset($_POST['dui'])) {
        $dui=$_POST['dui'];
    }else{
        $dui=NULL;
    }
    if (isset($_POST['nit'])) {
        $nit=$_POST['nit'];
    }else{
        $nit=NULL;
    }
    if (isset($_POST['n_licencia'])) {
        $n_licencia=$_POST['n_licencia'];
    }else{
        $n_licencia=NULL;
    }
    if (isset($_POST['reg_iva'])) {
        $reg_iva=$_POST['reg_iva'];
    }else{
        $reg_iva=NULL;
    }
    if (isset($_POST['giro'])) {
        $giro=$_POST['giro'];
    }else{
        $giro=NULL;
    }
    $estado=1;
    
    $usua = new Cliente();
    $usua->setName($name);
    $usua->setDireccion($direccion);
    $usua->setTelefono($telefono);
    $usua->setDui($dui);
    $usua->setNit($nit);
    $usua->setLicencia($n_licencia);
    $usua->setCorreo($email);
    $usua->setGenero($sexo);
    $usua->setEdad($edad);
    $usua->setReg_iva($reg_iva);
    $usua->setTel_fijo($tel_fijo);
    $usua->setCumpleaños($cumpleaños);
    $usua->setGiro($giro);
    $save =$usua->update($id);
   
       if ($save==TRUE) {
           
        $informacion = [
            "tittle" => "Correcto",
            "text" => "Cliente actualizado con exito ",
            "type" => "success",
            "url" => "../../list/cliente.php"
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
               "text" => "No fue posible actualizar el contacto, por favor verifique los datos y vuelva a intentarlo ".$_SESSION['mensaje'],
               "type" => "error",
             ];
               
           }
                         echo json_encode($informacion);
       }
   }
elseif($accion=='login') {
	if (isset($_POST['usuario'])) {
		$usuario=$_POST['usuario'];
		if (isset($_POST['pass'])) {
			$pass=$_POST['pass'];
			$usua = new Usuario();
			$usua->setCorreo($usuario);
			$usua->setPass($pass);
			$login=$usua->login();
			if ($login==true) {
				if ($usuario=='administrador@gmail.com') {
					$informacion = [
						"tittle" => "Correcto",
						"text" => "Bienvenido",
						"type" => "success",
						"url" => "administracion.php"
					];
					
				} else {
					$informacion = [
						"tittle" => "Correcto",
						"text" => "Bienvenido",
						"type" => "success",
						"url" => "index.php"
					];
				}
				
				echo json_encode($informacion);
			}else{
							$informacion = [
								"tittle" => "Error",
								"text" => "Usuario $usuario no registrado, por favor registrate o intenta de nuevo.",
								"type" => "error",
							];
				echo json_encode($informacion);  
			}
		}else{
			$informacion = [
				"tittle" => "Error",
				"text" => "Contraseña invalida",
				"type" => "error",
			  ];
			  echo json_encode($informacion);  
		}	
	}else{
		$informacion = [
			"tittle" => "Error",
			"text" => "Es necesario un correo electronico para poder ingresar",
			"type" => "error",
		  ];
		  echo json_encode($informacion);  
	}	
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
}
?>