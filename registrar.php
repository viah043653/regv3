<?php
include ("con_db.php");

if(isset($_POST['register']))
{
  if (strlen($_POST['nombres'])>=1 && strlen($_POST['apaterno'])>=1 && strlen($_POST['amaterno'])>=1 && strlen($_POST['fecnac'])>=1 && strlen($_POST['mail'])>=1 && strlen($_POST['cel'])>=1 && strlen($_POST['pass'])>=1 && strlen($_POST['passd'])>=1)
  {
            $nombres = $_POST['nombres'];
            $apater = $_POST['apaterno'];
            $amater = $_POST['amaterno'];
           $fecnac = $_POST['fecnac'];
           $mail = $_POST['mail'];
           $cel = $_POST['cel'];
           $pass = $_POST['pass'];
           $passd = $_POST['passd'];
          $consulta = "INSERT INTO registro(nombres, apellidop, apellidom, f_nacimiento, corre, telefono, pass, pass2) 
                  VALUES ('$nombres','$apater','$amater','$fecnac','$mail','$cel','$pass','$passd')";
            $result = mysqli_query($conex, $consulta);
    
        if($result){
         ?>
         <h3 class="ok">Registro Correcto</h3>
         <?php 
        }else{
          ?>
          <h3 class="bad">No se registro</h3>
          <?php  
        }
    } 
}else
{
      ?>
      <h3 class="bad">Todos los campos son obligatorios</h3>
      <?php
}
?>