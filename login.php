<!DOCTYPE html>
<html>
  <body>
    <form action="./loginController.php" method="POST" onsubmit="return validacionForm()">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email...">
        
        <label for="psswd">Contraseña</label>
        <input type="password" id="psswd" name="psswd" placeholder="Contraseña...">
        
        <input type="submit" value="Iniciar sesión">
         <div id="message"></div>
      </form>
  </body>
</html>