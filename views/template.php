<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema tutorias | TAW</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php"class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Ocultar navegación</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="views/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">

      <div class="user-panel">
        <div class="pull-left image">
          <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>

      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación</li>

        <!-- Menú desplegable-->
        <li class="treeview">
          <a href="#">
          <small class="label pull-left bg-purple"><i class="fa fa-user fa-fw fa-2x"></i></small>
            <span>Alumnos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>

            <ul class="treeview-menu">
              <li>
                <a href="index.php?action=listadoAlumnos">
                  <small class="label pull-left bg-purple"><i class="fa fa-user fa-fw"></i> </small>
                    <span>Listado de Alumnos</span>
                </a>
              </li>

              <li>
                <a href="index.php?action=addAlumnos">
                  <small class="label pull-left bg-green"><i class="fa fa-pencil-square-o fa-fw"></i> </small>
                  <span>Registro de alumnos</span>
                </a>
              </li>

            </ul>
        </li>
        <!--./ Finaliza el menú desplegable -->

        <!--<li>
          <a href="index.php?action=listadoAlumnos">
              <small class="label pull-left bg-purple"><i class="fa fa-user fa-fw fa-2x"></i> </small>
              <span>Listado de Alumnos</span>
          </a>
        </li>-->

        <li>
          <a href="index.php?action=listadoMaestros">
              <small class="label pull-left bg-blue"><i class="fa fa-graduation-cap fa-fw fa-2x"></i> </small>
              <span>Tutores</span>
          </a>
        </li>

        <li>
          <a href="index.php?action=listadoTutorias">
              <div class="label pull-left bg-orange"><i class="fa fa-commenting-o fa-fw fa-2x"></i> </div>
              <span>Listado de tutorias</span>
          </a>
        </li>

        <li>
          <a href="index.php?action=registrar">
              <small class="label pull-left bg-red"><i class="fa fa-pencil-square-o fa-fw fa-2x"></i> </small>
              <span>Registro</span>
          </a>
        </li>

        <!--<li>
          <a href="index.php?action=addAlumnos">
              <small class="label pull-left bg-green"><i class="fa fa-pencil-square-o fa-fw fa-2x"></i> </small>
              <span>Registro de alumnos</span>
          </a>
        </li>-->

      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

      <?php 
        $mvc = new MvcController();
        $mvc -> enlacesPaginasController();
      ?>

    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="views/dist/js/adminlte.min.js"></script>
</body>
</html>