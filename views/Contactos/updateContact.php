<!DOCTYPE html>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}else{
    header('Location: registros.php');
}
require_once "../../class/clienteModel.php";
$contacto = new Cliente;
$listCon = $contacto->selectOne($id);
/* $name = ""; */
foreach ($listCon as $key) {
    $name = $key['name'];
    $cumpleaños = $key['cumpleaños'];
    $edad = $key['edad'];
    $sexo = $key['genero'];
    $email = $key['correo'];
    $telefono = $key['telefono'];
    $tel_fijo = $key['tel_fijo'];
    $direccion = $key['direccion'];
    $dui = $key['dui'];
    $nit = $key['nit'];
    $n_licencia = $key['n_licencia'];
    $reg_iva = $key['reg_iva'];
    $giro = $key['giro_fiscal'];
}
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Control Automotriz | Nuevo Contacto</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../src/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../src/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
   <!-- Custom styles for this page -->
   <link href="../../src/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link href="../../src/css/sweetalert2.css" rel="stylesheet" />
  <script src="../../src/jquery/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a> 
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../list/cliente.php" class="nav-link">Clientes</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../src/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Control Automotriz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../src/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User Login</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php include_once "../../list/menu.php" ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <!-- /.col-md-6 -->
            <div class="card card-primary ">
              <div class="card-header">
                <h5>Contactos</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Datos Personales</h6><br/>
                <div class="row">
                  <div class="form-group">
                  <br>
                  
                     <!-- inicio de formulario -->
                     <form action="#">
                        <div class="row">
                            <div class="col">
                              <div class="form-group">
                                  <label for="email">Nombre Completo:</label>
                                    <input type="text" class="form-control" required id="nombre" value="<?php echo $name?>" oninput="this.value = this.value.toUpperCase()">
                                    <input type="hidden" class="form-control" id="id_cli" value="<?php echo $id?>" >
                              </div>
                            </div>
                          <div class="col">
                            <div class="form-group">
                                <label for="email">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" id="cumpleaños" value="<?php echo $cumpleaños?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="email">Edad:</label>
                                <input type="text" id="edad" class="form-control" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required value="<?php echo $edad?>"> 
                              </div>
                          </div>       
                        </div> 
                        <div class="row">                       
                              <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="pwd">Genero:</label>
                                      <select class="optica form-control" id="sexo" data-live-search="true" style="width:100px;" >
                                        <option value="0">Seleccione Genero</option>                                        
                                        <option value="M" <?php echo ($sexo =='M')? 'selected' : ''; ?>>Masculino</option>                                        
                                        <option value="F" <?php echo ($sexo =='F')? 'selected' : ''; ?>>Femenino</option>                                        
                                    </select>
                                </div>
                              </div>                       
                            <div class="col">
                              <div class="form-group">
                                  <label for="pwd">Correo:</label>
                                    <input type="email" id="email"  class="form-control" value="<?php echo $email?>">
                              </div>
                            </div>
                              <div class="col" >
                                <div class="form-group">
                                  <label for="email">Celular:</label>
                                    <input type="tel" class="form-control" id="telefono" maxlength="8" value="<?php echo $telefono?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="[0-9]{4}-[0-9]{4}" required> 
                                  </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="email">Telefono Fijo:</label>
                                      <input type="tel" class="form-control" id="tel_fijo" maxlength="8" value="<?php echo $tel_fijo?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="[0-9]{4}-[0-9]{4}" required> 
                                  </div>
                              </div>
                            </div>              
                        <div class="form-group"> 
                            <div class="col">
                              <div class="form-group">
                                  <label for="pwd">Direcciòn:</label>
                                    <input type="email" id="direccion" required class="form-control" value="<?php echo $direccion?>" oninput="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="pwd">DUI:</label>
                              <input type="text" class="form-control" id="dui" maxlength="9" value="<?php echo $dui?>" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                          </div> 
                          <div class="col">
                            <div class="form-group">
                              <label for="pwd">NIT:</label>
                              <input type="text" class="form-control" id="nit" maxlength="15" value="<?php echo $nit?>" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                            <label for="email">Nº Licencia:</label>
                                  <input type="tel" class="form-control" id="n_licencia" maxlength="15" value="<?php echo $n_licencia?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57' pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" required> 
                              </div>
                          </div> 
                          
                        </div>
                        <!-- DETALLE DE ORDEN -->
                        <div class="row"><div class="col">
                            <div class="form-group">
                              <label for="pwd">Registro IVA:</label>
                              <input type="text" class="form-control" id="reg_iva" maxlength="15" value="<?php echo $giro?>" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                          </div>
                          <div class="col">
                              <div class="form-group">
                                  <label for="pwd">Giro Fiscal:</label>
                                    <input type="text" id="giro"  class="form-control" oninput="this.value = this.value.toUpperCase()">
                              </div>
                            </div> 
                          <!-- <div class="col">
                              <label for="email">Añadir:</label>
                                <div class="form-group">
                                  <input type="button" class="btn btn-success agregar" value="+" onclick="agregarFila()" >
                                </div>
                          </div>
                          <div class="col">
                          <label for="email">Lente de contacto</label>
                          <div class="form-group">
                                <input type="checkbox" value="V" id="contacto">
                              </div>
                          </div>
                    
                            <input type="hidden" value="F" id="contacto">
                    

                          <div class="col">
                            <label for="email">Proveedor Externo</label>
                            <div class="form-group">
                                  <input type="checkbox" value="V" id="externo">
                                </div>
                          </div> -->
                        </div>
                        <div class="row">
                        <input type="button" class="btn btn-success save_data" value="Guardar">
                    </div>
                 </form>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                  
              </div>
            </div>
          <!-- /.col-md-6 -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Control Automotriz</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<div id="dataModal3" class="modal fade">  
                                  <div class="modal-dialog">  
                                       <div class="modal-content">  
                                            <div class="modal-header">  
                                            </div>  
                                            <div class="modal-body" id="employee_forms3">  

                                            </div>  
                                            <div class="modal-footer">  
                                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                            </div>  
                                       </div>  
                                  </div>  
</div>
  <!-- Modal modificar Sucursales -->
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<!--script src="../../src/plugins/jquery/jquery.min.js"></script-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="../../src/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../src/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../src/dist/js/adminlte.min.js"></script>
<script src="../../src/dist/js/sweetalert2.min.js"></script>
<script src="../../src/dist/js/sweetAlert2.js"></script>

<script>
 $(document).ready(function(){  
  $(document).on('click', '.save_data', function(){  
          var id = document.getElementById('id_cli').value;  
          var name = document.getElementById('nombre').value;
          var cumpleaños = document.getElementById('cumpleaños').value;
          var edad = document.getElementById('edad').value;
          var sexo = document.getElementById('sexo').value;
          var email = document.getElementById('email').value;
          var telefono = document.getElementById('telefono').value;
          var tel_fijo = document.getElementById('tel_fijo').value;
          var direccion = document.getElementById('direccion').value;
          var dui = document.getElementById('dui').value;
          var nit = document.getElementById('nit').value;
          var n_licencia = document.getElementById('n_licencia').value;
          var preg_iva = document.getElementById('reg_iva').value;
          var pgiro = document.getElementById('giro').value;
          if (preg_iva == 0) {
            reg_iva = 0;
            giro = "NULL";
          }else{
            reg_iva = preg_iva;
            giro = pgiro;
          }

                $.ajax({  
                     url:"../../controllers/clienteController.php?accion=update",  
                     method:"POST",  
                     data:{id:id,name:name,cumpleaños:cumpleaños,edad:edad,sexo:sexo,email:email,telefono:telefono,tel_fijo:tel_fijo,direccion:direccion,dui:dui,nit:nit,n_licencia:n_licencia,reg_iva:reg_iva,giro:giro},  
                     success:function(data){ 
                      var array = JSON.parse(data);
                        if (array.type == "success") {
                            alertaEspecial(array.tittle, "<h4>" + array.text + "</h4>", array.type,array.url);
                        } else {
                            alerta(array.tittle, "<h4>" + array.text + "</h4>", array.type);
                        }
                       console.log(data);
                     }
                }); 
      });
    });  
</script>
</body>
</html>