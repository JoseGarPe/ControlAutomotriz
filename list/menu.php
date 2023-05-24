<?php 
    /* session_start();
    if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in']==false ) {
      header('Location: ../login.php');
    } */
    function url_actual(){
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
          $url = "https://"; 
        }else{
          $url = "http://"; 
        }
      //  echo $url . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
      $enlace = $_SERVER['REQUEST_URI'];
      $arrayEnlace=explode('/',$enlace);
      $indice = array_search('list',$arrayEnlace,true);
      return $indice;  
     }
     
    ?>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Administrar
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>Usuarios</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Actividades</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo (url_actual()!= null)? 'cliente.php':'../../list/cliente.php';?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo (url_actual()!= null)? 'vehiculo.php':'../../list/vehiculo.php';?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehiculos</p>
                </a>
              </li>
            </ul>
          </li>
    <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Trabajos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial realizado</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trabajo pendientes</p>
                </a>
              </li>
            </ul>
          </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Simple Link
        <span class="right badge badge-danger">New</span>
      </p>
    </a>
  </li>
</ul>
</nav>
<script>
  //-------------------- Hosting ----------------------------------//
const serverHosting = window.location.hostname;
const serverPort = window.location.port;
console.log(serverPort);
let server ='';
if (serverPort!=8080 && serverPort!=4433 ) {
 server = `${serverHosting}`;
} else {
server = `${serverHosting}:${serverPort}`;
}
console.log(server);
//---------------------------------------------------------------//
</script>