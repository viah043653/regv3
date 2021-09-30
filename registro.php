<!DOCTYPE html>
<HTML>
<head>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap-icons/font/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" type="text/css" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
  <div class="container border text-center col-md-3">
    
    
    <form class="row g-1" method="post">
      
     <h2 class="card-header col-md-12">Registro</h2>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Nombres</label>
       <input type="text" class="form-control is-valid" name="nombres" value="" placeholder ="ej: Raul" required  >
      </div>
      
      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Apellido Paterno</label>
       <input type="text" class="form-control is-valid" name="apaterno" value="" placeholder ="ej: Martinez" required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Apellido Materno</label>
       <input type="text" class="form-control is-valid" name="amaterno" value="" placeholder ="ej: Lopez"  required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Fecha de Nacimiento</label>
       <input type="text" class="form-control is-valid" name="fecnac" value="" placeholder ="ej: 14/03/1990" required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Correo</label>
       <input type="text" class="form-control is-valid" name="mail" value="" placeholder ="ej: anita16@hotmail.com" required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Telefono</label>
       <input type="text" class="form-control is-valid" name="cel" value="" placeholder ="ej: 5547309216" required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Contraseña</label>
       <input type="password" class="form-control is-valid" name="pass" value="" placeholder ="ej: S.aul.345" required>
      </div>

      <div class="col-md-12">
       <label for="validationServer01" class="form-label">Confirmar Contraseña</label>
       <input type="password" class="form-control is-valid" name="passd" value="" placeholder ="ej: S.aul.345" required>
      </div>
      
      <div class="mb-3">
       <button class="btn btn-primary" type="submit" name="register">Submit form</button>
      </div>
    </form>
  </div>

     <?php
      include("registrar.php");
     ?>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</HTML>
