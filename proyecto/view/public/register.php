<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Bibliotech - Sign Up</title>
</head>
<body>
  <section class="form-register">
    <h4>Formulario Registro BiblioTech</h4>
    <form action="http://localhost/practicas/?C=registerController&M=insert" method="post"></form>
    <input class="controls" type="text" name="user" id="user" placeholder="Usuario">
    <input class="controls" type="text" name="pass" id="pass" placeholder="Contraseña">
    <input class="controls" type="text" name="name" id="name" placeholder="Nombre (s)">
    <input class="controls" type="text" name="app" id="app" placeholder="Apellidos (s)">
    <input class="controls" type="text" name="tel" id="tel" placeholder="Teléfono">
    <input class="controls" type="text" name="email" id="email" placeholder="Correo">
    <input class="controls" type="text" name="address" id="address" placeholder="Dirección">
    <p><input type="checkbox"> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p><br><br>
    <input class="botons" type="submit" value="Enviar">
    </form>
  </section>
</body>
</html>