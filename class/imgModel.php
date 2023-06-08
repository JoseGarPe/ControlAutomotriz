<?php
class Imagenes extends Conexion
{
 private $id_usuario;
 private $id_img_us;
 private $fecha_ing_img;
 private $name_temp;

 public function __construct()
	{
		  parent::__construct(); //Llamada al constructor de la clase padre

          $this->id_usuario="";
          $this->img="";
          $this->fecha_ing_img="";
          $this->name_temp="";
    }


    public function getId_img_us() {
        return $this->id_img_us;
    }

    public function setId_img_us($id_img_us) {
        $this->id_img_us = $id_img_us;
    }
	
    public function getName_temp() {
        return $this->name_temp;
    }

    public function setName_temp($name_temp) {
        $this->name_temp = $name_temp;
    }
    public function getId_usuario() {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    public function getFecha_in_img() {
        return $this->fecha_ing_img;
    }

    public function setFecha_in_img($fecha_ing_img) {
        $this->fecha_ing_img = $fecha_ing_img;
    }

public function uploadimg($path)
{
    $query1="INSERT INTO notificaciones (id_noti,id_usr,estado,fecha_noti)
        VALUES (NULL,'".$this->id_usuario."','0',CURDATE())";
    $noti=$this->db->query($query1);
    //--------------------------------------------------------------------------//
    $query2="UPDATE usuarios SET path='".$path."' WHERE id_usuario='".$this->id_usuario."'";
    $save=$this->db->query($query2);
    if ($save==true) {
        $query="INSERT INTO img_usr (id_img_us,user_id,fecha_ing_img,img_nombre) 
        VALUES (NULL,'".$this->id_usuario."',CURDATE(),'".$this->name_temp."');";
            $save=$this->db->query($query);
        if ($save==true) {
            return true;
        }else {
            return false;
        }
    }else {

        return false;
    }
   
    //--------------------------------------------------------------------------//
  
       
}
public function viewImg($codigo)
{
    $query="SELECT iu.*, (SELECT path FROM usuarios WHERE id_usuario=".$codigo.") as path FROM img_usr iu WHERE user_id=".$codigo."";
      $selectall=$this->db->query($query);
      $Listapellido=$selectall->fetch_all(MYSQLI_ASSOC);
      return $Listapellido;
}

public function delete(){

    $query="DELETE FROM img_usr WHERE id_img_us='".$this->id_img_us."'"; 
     $delete=$this->db->query($query);
     if ($delete == true) {
      return true;
     }else{
      return false;
     }

}

}
    ?>