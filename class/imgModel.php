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

public function uploadimg($placa)
{
    //--------------------------------------------------------------------------//
        $query="INSERT INTO img_car (id_img,id_cliente,placa,created_date,img_name) 
         VALUES (NULL,'".$this->id_usuario."',".$placa.",CURDATE(),'".$this->name_temp."');";
            $save=$this->db->query($query);
       
            return true;
       

   
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