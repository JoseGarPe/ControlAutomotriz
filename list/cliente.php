<!DOCTYPE html>
<?php

//--------------------------------------------//
$label='';
require_once "../class/clienteModel.php";
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
  <title>Control Automotriz | Clientes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../src/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../src/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
   <!-- Custom styles for this page -->
   <link href="../src/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="../src/jquery/jquery.min.js"></script>
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
        <a href="#" class="nav-link">Contact</a>
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
      <img src="../src/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Control Automotriz</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../src/img/user.png" class="img-circle elevation-2" alt="User Image">
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
      <?php include_once "menu.php" ?>
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
                      <button type="button" class="btn btn-success mr-2" onclick="location.href='../views/Contactos/contactCreate.php'"> + Agregar Contacto</button>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg">
                  <table class="users table table-striped" id="tableUsers">
                    <thead>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Telefono</th>
                      <th>Tel. Fijo</th>
                      <th>Correo</th>
                      <th>Dirección</th>
                      <th>Acciones</th>
                    </thead>
                    <tbody>
                                  <?php 
                                    $listUsua = $usuario->selectALL();
                                    foreach($listUsua['listUser'] as $dataCliente){
                                      echo "<tr>";
                                      echo "<td>".$dataCliente['id']."</td>";
                                      echo "<td>".$dataCliente['name']."</td>";
                                      echo "<td>".$dataCliente['telefono']."</td>";
                                      echo "<td>".$dataCliente['tel_fijo']."</td>";
                                      echo "<td>".$dataCliente['correo']."</td>";
                                      echo "<td>".$dataCliente['direccion']."</td>";
                                      echo "<td><a href='https://localhost/ControlAutomotriz/views/Contactos/updateContact.php?id=".$dataCliente['id']."' class='btn btn-warning'>Editar</a></td>";
                                      echo "</tr>";
                                    }
                                  ?>
                    </tbody>
                  </table>

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
<!--script src="../src/plugins/jquery/jquery.min.js"></script-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="../src/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../src/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../src/dist/js/adminlte.min.js"></script>

<script>
 $(document).ready(function(){  
  $('#tableUsers').DataTable({
                            "paging":   false,
                            "ordering": false,
                            "info":     false
                        });
  $('.optica').selectpicker();
  //cargarFecha();
  //setInterval(function(){ cargarHora(); }, 1000);  //------------------------------------------------------------// 
        //------------------------------------------------------//
        $(document).on('click', '.updata_contacto', function(){  
          //var id_pedido = $(this).attr("id_pedido");  
                $.ajax({  
                     url:"../views/Contactos/contactCreate.php",  
                     method:"POST",  
                     data:{id_pedido:id_pedido},  
                     success:function(data){  
                          $('#employee_forms3').html(data);  
                          $('#dataModal3').modal('show');  
                     }  
                });  
        }); 

    });
</script>
</body>
</html>