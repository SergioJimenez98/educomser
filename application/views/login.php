<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>res/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>res/css/styles.css">
 
</head>
<body>

  <div class="sidenav">
    <div class="login-main-text">
      <h2>BLOG<br>Inicia sesion</h2>
      <p>Autenticate o registrate.</p>
    </div>
  </div>

  <div class="main">
    <div class="col-md-6 col-sm-12">
      <div class="login-form">
        <form role="form" action="./signin" method="POST">
          <div class="form-group">
            <label>Correo electronico</label>
            <input type="text" class="form-control" placeholder="Ingresa tu correo electronico" name="correo" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="password" required>
          </div>

          <input type="submit" class="btn btn-black" value="INICIAR SESION">

          <button type="submit" class="btn btn-secondary"><a href="./register">REGISTRAR</a></button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>res/js/jquery-3.4.1.slim.min.js" ></script>
  <script src="<?php echo base_url();?>res/js/popper.min.js" ></script>
  <script src="<?php echo base_url();?>res/js/bootstrap.min.js"></script>

</body>
</html>
