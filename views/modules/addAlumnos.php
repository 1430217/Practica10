<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de tutorias| Registration Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <div class="register-box-body">
    <p class="login-box-msg">Registrar</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre completo" name="nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Matricula" name="matricula">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group">
          <select name="idCarrera" class="form-control">
            <option selected disabled>Carrera</option>
              <?php
                $mvc = new MvcController();
                $mvc->getCarrerasCmb();
              ?>
          </select>
      </div>

        <div class="form-group">
            <select name="idMaestro" class="form-control">
            <option selected disabled>Tutor</option>
              <?php
                $mvc->getMaestrosCmb();
              ?>
          </select>
        </div>

      <div class="row">
        <div class="col-xs-8">
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
      </div>
    </form>
  </div>

  <?php
        echo '<br>'.$_POST['nombre'];
        echo '<br>'.$_POST['matricula'];
        echo '<br>'.$_POST['idCarrera'];
        echo '<br>'.$_POST['idMaestro'];
        echo '<br>';
  ?>
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  $mvc->registrarAlumnoController();
  
  if (isset($_GET['action'])) {

		if ($_GET['action'] === 'ok') 
			echo 'Registro Exitoso';
	}
?>
