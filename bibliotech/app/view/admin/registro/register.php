<section class="form-register">
  <h4>Formulario Registro BiblioTech</h4>
  <form action="http://localhost/bibliotech?C=registerController&M=insert" method="post">
  <input class="controls" type="text" name="user" id="user" placeholder="Usuario" required>
  <input class="controls" type="text" name="pass" id="pass" placeholder="Contraseña" required>
  <input class="controls" type="text" name="name" id="name" placeholder="Nombre (s)" required>
  <input class="controls" type="text" name="app" id="app" placeholder="Apellidos (s)" required>
  <input class="controls" type="text" name="tel" id="tel" placeholder="Teléfono" required>
  <input class="controls" type="text" name="email" id="email" placeholder="Correo" required>
  <input class="controls" type="text" name="address" id="address" placeholder="Dirección" required>
  <p><input type="checkbox" required> Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p><br><br>
  <p><input class="botons" type="submit" value="Enviar"></p>
  </form>
</section>