<section class="form-register">
  <h4>Registro de libros</h4>
  <form action="http://localhost/bibliotech/?C=bookController&M=insert" method="post">
    <input class="controls" type="text" name="isbn" id="isbn" placeholder="ISBN" required>
    <input class="controls" type="text" name="title" id="title" placeholder="Titulo" required>
    <input class="controls" type="text" name="author" id="author" placeholder="Autor" required>
    <input class="controls" type="text" name="edit" id="edit" placeholder="Editorial" required>
    <input class="controls" type="text" name="cat" id="cat" placeholder="Categoria" required>
    <input class="controls" type="text" name="apublic" id="apublic" placeholder="Año de publicacion" required>
    <input class="controls" type="text" name="cant" id="cant" placeholder="Cantidad" required>
    <p><input class="botons" type="submit" value="Enviar"></p><br><br><br>
    <a href="http://localhost/bibliotech?C=bookController&M=callIndex" class="botons">Mostrar libros</a>
  </form>
</section>