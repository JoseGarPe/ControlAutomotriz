<?php 
require_once "config/conexion.php";
class Cliente extends Conexion{
    // id	name	user	pass	active	id_tipo_user
   private $id;
   private $name;
   private $direccion;
   private $telefono;
   private $active;
   private $dui;
   private $licencia;
   private $nit;
   private $correo;
   private $genero;
   private $edad;
   private $reg_iva;
   private $tel_fijo;
   private $cumpleaños;
   private $giro;
   
   public function __construct()
   {
         parent::__construct(); //Llamada al constructor de la clase padre

          $this->id;
          $this->name;
          $this->direccion;
          $this->telefono;
          $this->active;
          $this->dui;
          $this->licencia ;    
          $this->nit ;    
          $this->correo ;    
          $this->genero ;    
          $this->edad ;    
          $this->reg_iva ;    
          $this->tel_fijo ;    
          $this->cumpleaños ;    
          $this->giro ;    
       
   }
 public function getId() {
    return $this->id;
}

public function setId($id) {
    $this->id = $id;
}

public function getName() {
    return $this->name;
}

public function setName($name) {
    $this->name = $name;
}

public function getDrireccion() {
    return $this->direccion;
}

public function setDireccion($direccion) {
    $this->direccion = $direccion;
}

public function getTelefono() {
    return $this->telefono;
}

public function setTelefono($telefono) {
    $this->telefono = $telefono;
}

public function getdui() {
    return $this->dui;
}

public function setdui($dui) {
    $this->dui = $dui;
}

public function getLicencia() {
    return $this->$licencia;
}

public function setLicencia($licencia) {
    $this->licencia = $licencia;
}

public function getNit() {
    return $this->$nit;
}

public function setNit($nit) {
    $this->nit = $nit;
}

public function getCorreo() {
    return $this->$correo;
}

public function setCorreo($correo) {
    $this->correo = $correo;
}

public function getGenero() {
    return $this->$genero;
}

public function setGenero($genero) {
    $this->genero = $genero;
}

public function getEdad() {
    return $this->$edad;
}

public function setEdad($edad) {
    $this->edad = $edad;
}

public function getReg_iva() {
    return $this->$reg_iva;
}

public function setReg_iva($reg_iva) {
    $this->reg_iva = $reg_iva;
}

public function getTel_fijo() {
    return $this->$tel_fijo;
}

public function setTel_fijo($tel_fijo) {
    $this->tel_fijo = $tel_fijo;
}

public function getCumpleaños() {
    return $this->$cumpleaños;
}

public function setCumpleaños($cumpleaños) {
    $this->cumpleaños = $cumpleaños;
}

public function getGiro() {
    return $this->$giro;
}

public function setGiro($giro) {
    $this->giro = $giro;
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
      $query="SELECT u.* FROM contacto u ORDER BY name ASC";
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