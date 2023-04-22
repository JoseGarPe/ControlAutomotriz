<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="src/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="src/css/login.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="container">
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
            <h3>Sign in here</h3>
            <form action="login.php" method="post">
                <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="Password" placeholder="Password"> </div> <input type="submit" name="" value="Login">
            </form> 
            <a href="#">Forget Password<br> </a>
            <div class="text-center">
                <p style="color: #59238F;">Sign-Up</p>
            </div>
            
    </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
