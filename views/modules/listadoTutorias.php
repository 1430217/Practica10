<!-- Aun no esta funcional, solo son datos de prueba--> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lisatdo de tutorias</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID de la sesión</th>
                  <th>Nombre del alumno</th>
                  <th>Nombre del tutor</th>
                  <th>fecha</th>
                  <th>Hora</th>
                  <th>Categoria</th>
                  <th>Tipo</th>
                  <th>Descripción</th>
                </tr>
                <tr>
                  <td>1430217</td>
                  <td>Gonzalo Cesar Raymundo Marténez Reséndez</td>
                  <td>Marco Aurelio Nuño Maganda</td>
                  <td>17/10/2018</td>
                  <td>15:00</td>
                  <td>Justificante</td>
                  <td>Individual</td>
                  <td>Justificar faltas</td>
                </tr>

                <tr>
                  <td>1430471</td>
                  <td>Jesús Antonio Vega Rodríguez</td>
                  <td>Jorge Arturo Hernandez Almazan</td>
                  <td>17/10/2018</td>
                  <td>15:00</td>
                  <td>Sesion grupal de tutorias</td>
                  <td>Grupal</td>
                  <td>Realimentación de alumnos hacía el profesor</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <script src="../dist/js/adminlte.min.js"></script>    
</body>
</html>