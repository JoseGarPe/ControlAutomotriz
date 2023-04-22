<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once "../class/usuarioModel.php";
$accion=$_GET['accion'];
 // id	name	user	pass	active	id_tipo_user
if ($accion=='guardar') {
    if (isset($_POST['name'])) {
        $name=$_POST['name'];
    }else{
        $name=NULL;
    }
    if (isset($_POST['user'])) {
        $user=$_POST['user'];
    }else{
        $user=NULL;
    }
    if (isset($_POST['pass'])) {
        $pass=$_POST['pass'];
    }else{
        $pass=NULL;
    }

     if (isset($_POST['id_tipo_usuario'])) {
        $id_tipo_usuario=$_POST['id_tipo_usuario'];
    }else{
        $id_tipo_usuario=NULL;
    }
    $estado=1;
    
    $usua = new Usuario();
    $usua->setName($name);
    $usua->setUser($user);
    $usua->setPass($pass);
    $usua->setId_tipo_usuario($id_tipo_usuario);
    //$usua->setDescripcion($descripcion);
    $save =$usua->save();
   
       if ($save==TRUE) {
           
        $informacion = [
            "tittle" => "Correcto",
            "text" => "Gracias! ".$_POST['name'].' te has registrado con exito, en los próximos días nos pondremos en contacto contigo!',
            "type" => "success",
            "url" => "index.php"
            ];
            echo json_encode($informacion);
       }else{
           //header('Location: ../list/Usuarios.php?error=incorrecto');
           if ($_SESSION['cantidad']>0) {
               $informacion = [
                   "tittle" => "Advertencia",
                   "text" => "Ya te encuentras inscrito, si no has recibido tu kit, por favor comunícate con nosotros en nuestras redes sociales o llama a nuestro Call Center.",
                   "type" => "warning",
                 ];
           }else{
               $informacion = [
               "tittle" => "Error",
               "text" => "No fue posible Eliminar el usuario, por favor verifique los datos y vuelva a intentarlo",
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