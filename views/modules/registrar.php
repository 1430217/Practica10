<!-- Funciona pero hay errores en los headers -->
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
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <b>Registro</b>TAW</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Formualrio de registro</p>

      <form method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nombre completo" name="nombre">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Número de empleado" name="no_empleado">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <select name="idCarrera">
            <?php
              $mvc = new MvcController();
              $mvc->getCarrerasCmb();
            ?>
          </select>
        </div>

        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Contraseña" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-8">
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
          </div>
        </div>

      </form>

      <a href="login.php" class="text-center">Ya tengo cuenta</a>
    </div>
  </div>

  <!-- Lo hice para verificar si los datos se enviaban por post
    < ?php
        echo 'Formulario';
        echo $_POST['nombre'];
        echo $_POST['no_empleado'];
        echo $_POST['idCarrera'];
        echo $_POST['email'];
        echo $_POST['password'];
        echo '<br>';
      ?>-->

  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  $mvc->registrarMaestroController();

  if (isset($_GET['action'])) {

		if ($_GET['action'] == 'ok') 
			echo 'Registro Exitoso';
		else 
			echo 'Error al registrar';	
	}
?>
