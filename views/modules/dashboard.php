<?php
    $mvc = new MvcController();
?>

<!-- Dashboard para el profesor, se verán los almnos que tiene adjuntados -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
    <!-- Condicion if por si entra el administrador -->
    <h1>Ejemplo del dashboard para administradores</h1>

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>150</h3>
                    <p>Alumnos</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="index.php?action=listadoAlumnos" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php $mvc->getCountMaestros();?></h3>
                    <p>Maestros</p>
                </div>
                <div class="icon">
                    <i class="fa fa-institution"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Listado y conteo de carreras funcionando -->
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3><?php $mvc->getCountCarreras();?></h3>
                    <p>Carreras</p>
                </div>
                <div class="icon">
                    <i class="fa fa-mortar-board "></i>
                </div>
                <a href="index.php?action=listadoCarreras" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>150</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>

    <br><br>
    <!-- Condicion if por si entra un maestro -->
    <h1>Dashboard para maestros</h1>
    <div class="row">
        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tutorados</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="index.php?action=listadoAlumnos" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>150</h3>
                    <p>Asesorias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-4 col-xs-4">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tutorias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-commenting-o"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <br><br>
    <!-- Condicion if por si entra un personal del departamento de tutorias -->
    <h1>Dashboard para personal de tutorias</h1>
    <div class="row">
        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>150</h3>
                    <p>Alumnos</p>
                    <br><br>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="index.php?action=listadoAlumnos" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tutores/Maestros</p>
                    <br><br>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tutorias</p>
                    <br><br>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-6 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>150</h3>
                    <p>Asesorias</p>
                    <br><br>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

    </div>



    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src="../bower_components/chart.js/Chart.js"></script>
</body>
</html>