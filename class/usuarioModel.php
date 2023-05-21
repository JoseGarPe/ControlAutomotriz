<?php 
require_once "config/conexion.php";
class User extends Conexion{
    // id	name	user	pass	active	id_tipo_user
   private $id;
   private $name;
   private $user;
   private $pass;
   private $active;
   private $id_tipo_usuario;

   public function __construct()
   {
         parent::__construct(); //Llamada al constructor de la clase padre

          $this->id;
          $this->name;
          $this->user;
          $this->pass;
          $this->active;
          $this->id_tipo_usuario;    
       
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
public function getUser() {
    return $this->user;
}

public function setUser($user) {
    $this->user = $user;
}

public function getPass() {
    return $this->pass;
}


public function setPass($pass) { 
    $password = hash('sha256', $pass);  
    $this->pass = $password;
}

public function getId_tipo_usuario() {
    return $this->id_tipo_usuario;
}

public function setId_tipo_usuario($id_tipo_usuario) {
    $this->id_tipo_usuario = $id_tipo_usuario;
}


//------------------------------------ FUNCIONES --------------------------------------//

public function save()
{
      $query="INSERT INTO usuario (id,name,user,pass,id_tipo_usuario)
                  values(NULL,'".$this->name."','".$this->user."','".$this->pass."',".$this->id_tipo_usuario.");";
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
      $query="SELECT u.*,tu.name as tipoUsuario FROM usuario u LEFT JOIN tipo_usuario tu on u.id_tipo_usuario = tu.id ORDER BY name DESC";
      $selectall=$this->db->query($query);
      $Listuser=$selectall->fetch_all(MYSQLI_ASSOC);
      $informacion=array();
      $informacion['cantidadInscritos']=$selectall->num_rows;
      $informacion['listUser']=$Listuser;
      return $informacion;
  }
  public function selectOne($codigo)
  {
      $query="SELECT * FROM user WHERE id_usaurio=".$codigo."";
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