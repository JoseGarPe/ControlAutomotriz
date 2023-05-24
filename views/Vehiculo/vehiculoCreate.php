<!DOCTYPE html>
<?php

//--------------------------------------------//

require_once "../../class/clienteModel.php";
$usuario = new Cliente();
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Control Automotriz | Nuevo Vehículo</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../src/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../src/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
   <!-- Custom styles for this page -->
   <link href="../../src/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                                  <label for="email">Nombre Contacto:</label>
                                  <select class="optica form-control" id="cliente" data-live-search="true">
                                    <option value="0">Selecciona o un contacto</option>
                                    <?php 
                                        $listUsua = $usuario->selectALL();
                                        foreach($listUsua['listUser'] as $dataCliente){
                                            echo '<option data-tokens="'.$dataCliente['name'].'" value="'.$dataCliente['id'].'">'.$dataCliente['name'].'</option>';
                                            }
                                    ?>
                                </select>
                              </div>
                            </div>
                          <div class="col">
                            <div class="form-group">
                                <label for="email">Placa:</label>
                                <input type="text" class="form-control" id="placa" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="email">Marca:</label>
                                <input type="text" id="marca" class="form-control" required> 
                              </div>
                          </div>       
                          <div class="col-sm-2">
                            <div class="form-group">
                                <label for="pwd">Modelo:</label>
                                    <input type="text" id="modelo" class="form-control" required> 
                            </div>
                          </div>                       
                        </div> 
                        <div class="row">                       
                            <div class="col">
                              <div class="form-group">
                                  <label for="pwd">Color:</label>
                                    <input type="text" id="color"  class="form-control" required>
                              </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                  <label for="email">Año:</label>
                                      <input type="text" class="form-control" id="año" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required> 
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="pwd">Tipo:</label>
                                    <input type="text" id="tipo" required class="form-control">
                                </div>
                              </div>
                              <div class="col" >
                                <div class="form-group">
                                  <label for="email">Aseguradora:</label>
                                    <input type="text" class="form-control" id="aseguradora" required> 
                                  </div>
                              </div>
                            </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="pwd">N° de Chasis:</label>
                              <input type="text" class="form-control" id="chasis_n" required>
                            </div>
                          </div> 
                          <div class="col">
                            <div class="form-group">
                              <label for="pwd">N° de Motor:</label>
                              <input type="text" class="form-control" id="motor_n">
                            </div>
                          </div>
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
   <script src="../../src/plugins/sweetalert2/sweetalert2.min.js"></script>
   <script src="../../src/plugins/sweetalert2/sweetAlert2.js"></script>

<script>
 $(document).ready(function(){  
  $(document).on('click', '.save_data', function(){  
         // var sticker = document.getElementById('sticker').value;  
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
          var reg_iva = document.getElementById('reg_iva').value;
          var giro = document.getElementById('giro').value;

                $.ajax({  
                     url:"../../controllers/clienteController.php?accion=guardar",  
                     method:"POST",  
                     data:{name:name,cumpleaños:cumpleaños,edad:edad,sexo:sexo,email:email,telefono:telefono,tel_fijo:tel_fijo,direccion:direccion,dui:dui,nit:nit,n_licencia:n_licencia,reg_iva:reg_iva,giro:giro},  
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