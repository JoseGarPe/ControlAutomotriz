<?php 
require_once "config/conexion.php";
class Vehiculo extends Conexion{
    // id	name	user	pass	active	id_tipo_user
   private $id;
   private $marca;
   private $modelo;
   private $color;
   private $active;
   private $aseguradora;
   private $id_contacto;
   private $placa;
   private $año;
   private $tipo;
   private $chasis_n;
   private $motor_n;
   
   public function __construct()
   {
         parent::__construct(); //Llamada al constructor de la clase padre

         $this->id;
         $this->marca;
         $this->modelo;
         $this->color;
         $this->active;
         $this->aseguradora;
         $this->id_contacto;
         $this->placa;
         $this->año;
         $this->tipo;
         $this->chasis_n;
         $this->motor_n;
             
       
   }
 public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getMarca() {
    return $this->marca;
}

public function setMarca($marca) {
    $this->marca = $marca;
}

public function getModelo() {
    return $this->modelo;
}

public function setModelo($modelo) {
    $this->modelo = $modelo;
}

public function getColor() {
    return $this->color;
}

public function setColor($color) {
    $this->color = $color;
}

public function getAseguradora() {
    return $this->aseguradora;
}

public function setAseguradora($aseguradora) {
    $this->aseguradora = $aseguradora;
}

public function getId_contacto() {
    return $this->$id_contacto;
}

public function setId_contacto($id_contacto) {
    $this->id_contacto = $id_contacto;
}

public function getPlaca() {
    return $this->$placa;
}

public function setPlaca($placa) {
    $this->placa = $placa;
}

public function getAño() {
    return $this->$año;
}

public function setAño($año) {
    $this->año = $año;
}

public function getTipo() {
    return $this->$tipo;
}

public function setTipo($tipo) {
    $this->tipo = $tipo;
}

public function getChasis_n() {
    return $this->$chasis_n;
}

public function setChasis_n($chasis_n) {
    $this->chasis_n = $chasis_n;
}

public function getMotor_n() {
    return $this->$motor_n;
}

public function setMotor_n($motor_n) {
    $this->motor_n = $motor_n;
}


//------------------------------------ FUNCIONES --------------------------------------//

public function save()
{
      $query="INSERT INTO contacto (id,name,direccion,telefono,dui,n_licencia,correo,nit,reg_iva,genero,tel_fijo,edad,giro_fiscal,cumpleaños)
                  values(NULL,'".$this->name."','".$this->direccion."','".$this->telefono."','".$this->dui."','".$this->licencia."','".$this->correo."',".$this->nit.",".$this->reg_iva.",'".$this->genero."','".$this->tel_fijo."',".$this->edad.",'".$this->giro."','".$this->cumpleaños."');";
          $save=$this->db->query($query);
          if ($save==true) {
              return true;
          }else {
              $_SESSION['cantidad']=0;
              $_SESSION['mensaje']= $this->db->error;
              return false;
          }   
  
}
///----------------------------------------------------------------------------------------//
public function update()
  {
      $query="UPDATE contacto SET user='".$this->user."',pass='".$this->pass."' WHERE id=".$this->id."";
      $update=$this->db->query($query);
      if ($update==true) {
          return true;
      }else {
        $_SESSION['cantidad']=0;
        $_SESSION['mensaje']= $this->db->error;
          return false;
      }  
  }
  //-------------------------------------------------------------------------------------//

  public function selectALLOneCliente($id_marca)
        {
            $query="SELECT s.* FROM modelo_vehiculo s WHERE s.id_marca = $id_marca";
            $selectall=$this->db->query($query);
            $ListTipoUsuario=$selectall->fetch_all(MYSQLI_ASSOC);
            return $ListTipoUsuario;
        }

  
  public function delete()
  {
     $query="DELETE FROM user WHERE id='".$this->id."'"; 
     $delete=$this->db->query($query);
     if ($delete == true) {
      return true;
     }else{
      return false;
     }

  }
  //-----------------------------------------------------------------------------------------//
  public function selectALL()
  {
      $query="SELECT v.*, c.name FROM vehiculo v LEFT JOIN contacto c ON v.id_contacto = c.id ORDER BY name ASC";
      $selectall=$this->db->query($query);
      $Listuser=$selectall->fetch_all(MYSQLI_ASSOC);
      $informacion=array();
      $informacion['cantidadInscritos']=$selectall->num_rows;
      $informacion['listUser']=$Listuser;
      return $informacion;
  }
  public function selectALLV()
  {
      $query="SELECT v.* FROM marcas_vehiculos v ORDER BY marca ASC";
      $selectall=$this->db->query($query);
      $Listuser=$selectall->fetch_all(MYSQLI_ASSOC);
      $informacion=array();
      $informacion['cantidadInscritos']=$selectall->num_rows;
      $informacion['listUser']=$Listuser;
      return $informacion;
  }
  public function selectOne($codigo)
  {
      $query="SELECT u.* FROM contacto u WHERE id=".$codigo."";
      $selectall=$this->db->query($query);
      $Listuser=$selectall->fetch_all(MYSQLI_ASSOC);
      return $Listuser;
  }
  public function selectTipoUsuario()
  {
      $query="SELECT * FROM tipo_usuario";
      $selectall=$this->db->query($query);
      $Listuser=$selectall->fetch_all(MYSQLI_ASSOC);
      return $Listuser;
  }
  
//-------------------------------------------------------------------------------------//

public function login(){
    $query1="SELECT u.* FROM user u WHERE u.user='".$this->user."' AND u.pass='".$this->pass."'";
    $selectall1=$this->db->query($query1);
    $ListUser=$selectall1->fetch_all(MYSQLI_ASSOC);

    if ($selectall1->num_rows!=0) {
        foreach ($ListUser as $key) {
            session_start();
            $_SESSION['logged-in'] = true;
            $_SESSION['user']= $key['user'];
            $_SESSION['id']=$key['id'];
 //         $_SESSION['tipo']=$key['tipo'];
            $_SESSION['tiempo']=time();
        }
         return true;
    }else{
        session_start();
            $_SESSION['logged-in'] = false;
             $_SESSION['tiempo']=0;
            return false;
        }
        
    }

}

?>