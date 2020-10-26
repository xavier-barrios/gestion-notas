<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
    include './alumnoDao.php';
    if (isset($_POST['b_insert'])){
        $insertar_alu=new AlumnoDao;
        $insertar_alu->insertar();
    }
  ?>
  <form action="./insertar_alumnos.php" method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Escribe tu nombre..."><br><br>
  <label for="apellido1">1er apellido:</label><br>
  <input type="text" id="apellidop_alumno" name="apellidop_alumno" placeholder="Escribe tu 1er apellido..."><br><br>
  <label for="apellido2">2do apellido:</label><br>
  <input type="text" id="apellidom_alumno" name="apellidom_alumno" placeholder="Escribe tu 2do apellido..."><br><br>
  <label for="grupo">Grupo alumno:</label><br>
  <input type="text" id="grupo_alumno" name="grupo_alumno" placeholder="Escribe tu grupo..."><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email_alumno" name="email_alumno" placeholder="Pon tu email..."><br><br>
  <label for="passwd">Password:</label><br>
  <input type="password" id="passwd_alumno" name="passwd_alumno" placeholder="Escribe tu password..."><br><br>
  <input type="submit" value="Submit" name="b_insert">


</form>
</body>
</html>
